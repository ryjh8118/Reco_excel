<head>
<meta charset="utf-8">
</head>
<?php

	error_reporting(0);  //隱藏所有錯誤訊息
	// echo '<center><table border="10" width=300 ><td><center><font face="微軟正黑體">';
	if($_GET['name']!='null'){
		$name=$_GET['name'];
		$myfile = fopen("GetFaceName.php", "w") or die("Unable to open file!");
		fwrite($myfile,$name);

		fclose($myfile);
		// echo "<font color='GREEN'><h1>輸入成功，請摸一下我的頭".$name."</h1></font>";
	}
	// else{
	// 	echo "<font color='RED'><h1>請輸入名字 </h1></font>";
	// }
?>

</html>
