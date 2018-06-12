<!doctype html>
<html>
<head>
	<?php
	error_reporting(0);  //隱藏所有錯誤訊息
	$cleanup = 0;
	$name = $_GET['name'];
	//echo $name;
	echo '<center><table border="10" width=300 ><td><center><font face="微軟正黑體">';
	$myfile = fopen("GetFaceName.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $name);
	if ($cleanup == 1){
		$myfile = fopen("GetFaceName.txt", "w") or die("Unable to open file!");
		fwrite($myfile, '');
	}
	fclose($myfile);

	?>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body><form method="GET" >
	<h1>人臉註冊</h1>
	<br>
	
	    <label for="name">請輸入姓名：</label>　
	<input type="text" id="name" name="name">

	<input type="submit" name="button" id="button" value="送出" >
	</form>
	
</body>
</html>
