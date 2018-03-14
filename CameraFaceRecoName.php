<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<?php
$phone = $_POST['phone'];
$regex = "/^[0|9]{2}[0-9]{8}$/";
// 正規化 只能 09   + 9碼

if (preg_match($regex,$phone)) {
	setcookie('phone',$phone);
}else{
	echo $phone.'<br>輸入的號碼格式錯誤請重新輸入';
}

?>

</head>

<body><form method="POST">
	<h1>說不定我會認識你唷</h1>
	<br>
	
	    <label for="phone">請輸入電話：</label>　
	<input type="tel" id="phone" name="phone" value="09">

	<input type="submit" name="button" id="button" value="送出" >

</form>
	
	
</body>
</html>
