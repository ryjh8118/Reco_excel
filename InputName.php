<?php
	error_reporting(0);  //隱藏所有錯誤訊息
	$name=$_GET['name'];
	$myfile = fopen("GetFaceName.php", "w") or die("Unable to open file!");
	fwrite($myfile,$name);
		if ($cleanup == 1){
			$myfile = fopen("GetFaceName.php", "w") or die("Unable to open file!");
			fwrite($myfile, '');
		}
	fclose($myfile);

	?>
<meta charset="utf-8">
</head>

<body><form action="" method="GET" >
	<h1>人臉註冊</h1>
	<br>
	
	    <label for="name">請輸入姓名：</label>　
	<input type="text" id="name" name="name">

	<input type="submit" name="enter" id="enter" 
		value="submit" onclick=success()>
	</form>
	
</body>
</html>

<script>
function success() {
　alert("成功，請摸我的頭");
  // location.href="QRcode.php";
}

</script> 