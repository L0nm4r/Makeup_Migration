<?php
session_start();
$_SESSION['makeup'] = $_POST["img"];
?>
<!DOCTYPE html>
<html>

<head>
	<title>文件上传</title>
	<meta charset="utf-8">
	<style>
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

<body style=" background-image:url(img/b1.jpg)">
	<div style="margin-top:120px;">
		<center>
			<h1 style="color: white;">请上传您的素颜照</h1><br /><br /><br />
			<!-- enctype="mulipart/form-data"属性是指以二进制方式进行数据传输，传输文件需要设置-->
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="max_file_size" value="1048576">
				<a href="javascript:;" class="file">选择文件
					<input type="file" name="file" id="">
				</a>
				<br />
				<input style="width: 150px; height:30px; margin-top:20px; color:white; background-color:pink; border:none;" type="submit" name="上传">
			</form>
		</center>
	</div>


</body>

</html>