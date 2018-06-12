
<meta charset="utf-8">

<body>
<?php
	// error_reporting(0);  //隱藏所有錯誤訊息


	echo '<center><table border="10" width=300 ><td><center><font face="微軟正黑體">';
	if($_GET['name']!='null'){
		$name=$_GET['name'];
		$myfile = fopen("GetFaceName.php", "w") or die("Unable to open file!");
		fwrite($myfile,$name);

		fclose($myfile);
		echo "<font color='GREEN'><h1>輸入成功，請摸一下我的頭</h1></font>";
	}else{
		echo "<font color='RED'><h1>請輸入名字 </h1></font>";
	}
	?>

	<form action="" method="GET" name="from1" >
	<h1>人臉註冊</h1>
	<br>
	
	    <label for="name">請輸入姓名：</label>　
	<input type="text" id="name" name="name">
	<br><br><br><br>
	<input type="submit" name="enter" id="enter" 
		value="確認"  >
		<!-- style="width:500px;height:40px;font-size:20px;" -->
	</center></td></table></center>
	</form>	
	
</body>
<!-- 
<script type="text/javascript">
	var name ='';
	// alert(name);
	
function success() {
	name = "<?php echo $name?>";

	// document.write(name);
	if (name!=''){
		alert(name+'輸入成功，請摸一下我的頭');
	}else{
		alert('請輸入名字');
	}
// document.write("<font style='微軟正黑體'>輸入成功，請摸我的頭，我的眼睛會發光");
  // location.href="QRcode.php";
}

</script>  -->

</html>
