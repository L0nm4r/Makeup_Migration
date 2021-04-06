<?php
session_start();
//echo $_SESSION['makeup'];
//echo $_SESSION['nomakeup'];
$code = 'py main.py ' . $_SESSION['nomakeup'] . ' ' . $_SESSION['makeup'] . ' output.png';
exec($code);
//   py main.py $_SESSION['nomakeup'] $_SESSION['makeup'] output.png
header("Content-type:text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html>

<head>
	<title>妆容迁移</title>
	<style>
		body {
			margin: 0;
			overflow: hidden;
		}

		.bg {
			width: 100%;
			height: 100%;
			top: 0;
			z-index: -1;
			position: absolute;
		}

		.bg img {
			display: block;
			outline: none;
			border: 0;
			height: 100%;
			width: 100%;
		}
		.file {
            width: 70px;
            height: 20px;
            position: relative;
            display: inline-block;
            background:pink;
            border-radius: 2px;
            padding: 4px 12px;
            overflow: hidden;
            color: white;
            text-decoration: none;
            text-indent: 0;
            line-height: 20px;
            text-align: center;
        }

        .file input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
        }

        .file:hover {
            background: palevioletred;
            color:white;
            text-decoration: none;
        }
	</style>
</head>

<body>
	<div class='bg'>
		<img src="b3.jpg" alt="">
	</div>

	<div style="margin-top: 200px;">
		<center>
			<h2>妆容迁移结果:</h2>
			<img height="120px" width="80px" src='./output/output.png'>
			<p style="color: white;">您可以上传您的妆容用来评分</p>

			<form action="upload2.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="max_file_size" value="1048576">
				<a href="javascript:;" class="file">选择文件
					<input type="file" name="file" id="">
				</a><br/>
				<input style="width: 100px; height:25px; margin-top:20px; color:white; background-color:pink; border:none;" type="submit" name="上传">
			</form>
		</center>
	</div>


</body>

</html>