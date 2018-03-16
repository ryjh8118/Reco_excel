<?php   // 本機端
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
include("PDO_class.php");
include("mysql_program.php");
	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
	error_reporting(0);  //隱藏所有錯誤訊息
	$phone = $_COOKIE['phone'];
	$enter = $_COOKIE['enter'];
    $clean = $_GET['clean'];
 	$myfile = fopen("GetFaceName.php", "w") or die("Unable to open file!");
	echo '<font face="微軟正黑體">';

	    if ($clean == 'clean'){
	    	echo $clean;
			fwrite($myfile,'');
			header("Location:CameraFaceRecoName.php"); 
	     	exit;
	    }

			$searchphone="SELECT * From ifarm_toa.market_member WHERE `phone` = $phone";    
			$result=$mysqldb->sql_link()->query($searchphone);   
			$name = '';
				//var_export($row = $result->fetch(PDO::FETCH_ASSOC)); //抓到的所有值
			$row = $result->fetch(PDO::FETCH_ASSOC);
			if ($row['name'] == ''){
				echo "此手機號碼：".$phone."<br>抱歉！會員資料裡並無此號碼";
			}else{					echo "姓名：".$row['name'].
					"<br>手機：".$row['phone'].
					"<br>生日：".$row['birthday'].
					"<br>請問資料是否正確? ";
			}			 //再次確認		
			if ($enter=='true'){
				$name =$row['name'];
				$utf8= '<?php
					header("Content-Type:text/html; charset=utf-8");?>';
				fwrite($myfile,$utf8.$name);

						//////////////////////////////////////////////////////////////////////////////////
			}
    
		fclose($myfile);
?>

<body>
	<br>
	<form>
		<input type="submit" name="enter" id="enter" 
		value="<?php setcookie('enter','true'); 
		 ?> 正確">

		<input type="button" value="這不是我的資料" onclick="location.href='CameraFaceRecoName.php'">

	</form>
	

</body>