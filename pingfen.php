<?php
session_start();
$img1 = './output/output.png';
$img2 = './usermakeup/' . $_SESSION['usermakeup'];
$code = 'py xiangsidu.py ' . $img1 . ' ' . $img2;
//echo $code;
$output = exec($code);
if ($output == 0) $grade = 10;
elseif ($output == 1 || $output == 2) $grade = 9;
elseif ($output == 3 || $output == 4) $grade = 8;
elseif ($output == 5 || $output == 6) $grade = 7;
elseif ($output == 7 || $output == 8) $grade = 6;
elseif ($output == 9 || $output == 10) $grade = 5;
elseif ($output == 11 || $output == 12) $grade = 4;
elseif ($output == 13 || $output == 14) $grade = 3;
elseif ($output == 15 || $output == 16) $grade = 2;
elseif ($output == 17 || $output == 18) $grade = 1;
else $grade = 0;
$_SESSION['grade'] = $grade;
header("Content-type:text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html>

<head>
	<title>评分</title>
</head>

<body style="background-image: url(b2.jpg);">
	<div style="margin-top: 100px;">
		<center>
			<img src="./makeup/<?php echo $_SESSION['makeup']; ?>">
			<img src="./usermakeup/<?php echo $_SESSION['usermakeup'] ?>">
			<img src="./output/output.png">
		</center>
	</div><br />

	<center>
		<h1 style="text-align: center;
		   font-family:宋体;
		   background-image:-webkit-linear-gradient(bottom,rgb(238,0,255),rgba(253,3,220,0.46),rgba(255,0,170,0.12));
		   -webkit-background-clip:text;
		   -webkit-text-fill-color:transparent;">
			<?php
			$grade = $_SESSION['grade'];
			echo "您本次的妆容评分: " . $grade;
			?>
		</h1>
	</center>
</body>

</html>