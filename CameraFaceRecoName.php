<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>


</head>

<body><form method="POST">
	<h1><font face="標楷體">說不定我會認識你唷</font></h1>
	<br>
	<font face="微軟正黑體">
	    <label for="phone">電話：</label>　
	<input type="tel" id="phone" name="phone" value="09">

	<input type="submit" name="button" id="button" value="送出" >

<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
$phone = $_POST['phone'];
$regex = "/^[0|9]{2}[0-9]{8}$/";
// 正規化 只能 09   + 9碼

if (preg_match($regex,$phone)) {
	setcookie('phone',$phone);
	setcookie('enter','false');
	header("Location:FaceReco_DB.php"); 
	exit;

}

else if($phone==NULL)
	echo '<br><br><br>請輸入手機號碼，共十碼';
else
	echo '<br><br><font color="red"> <h1>輸入錯誤 </h1></font><br><br>剛剛輸入號碼為：'.$phone.'</font>';
//	var_dump($phone);
?>

</form>
	
	
</body>
</html>
