<?php   // 本機端
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
include("PDO_class.php");
include("mysql_program.php");
	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
///查詢////
	//error_reporting(0);  //隱藏所有錯誤訊息
	$phone = $_COOKIE['phone'];
	$myfile = fopen("GetFaceName.php", "w") or die("Unable to open file!");

	if ($phone != '1'){
		$searchphone="SELECT * From ifarm_toa.market_member WHERE `phone` = $phone";    

		$result=$mysqldb->sql_link()->query($searchphone);   
		$name = '';

		//var_export($row = $result->fetch(PDO::FETCH_ASSOC)); //抓到的所有值
		$row = $result->fetch(PDO::FETCH_ASSOC);
		if ($row['name'] == ''){
			echo "此手機號碼：".$phone."<br>抱歉！會員資料裡並無此號碼";
		}else{
			echo "姓名：".$row['name'].
				"<br>手機：".$row['phone'].
				"<br>生日：".$row['birthday'];
		}
	////////////////////////////////////////////////////////////////////////////////////
		
		


		$name =$row['name'] ;
		//echo $name;

		$utf8= '<?php
				header("Content-Type:text/html; charset=utf-8");
				?>';
		fwrite($myfile,$utf8.$name);


	//////////////////////////////////////////////////////////////////////////////////
	}else
		fwrite($myfile,'none');
	fclose($myfile);

///////////////偵錯
	// while($row = $result->fetch(PDO::FETCH_ASSOC)){
	// 		echo '<br>ID:'.$row['id'];
	// 		echo '<br>'.'姓名'.$row['name'];
	// 		echo '<br>'.'電話'.$row['phone'].'<br>';

	// 		echo '////////////////////<br>';
	// 	}



?>