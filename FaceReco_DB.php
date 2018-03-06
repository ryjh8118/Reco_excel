<?php   // 本機端
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
include("PDO_class.php");
include("mysql_program.php");
	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
///查詢////
	//error_reporting(0);  //隱藏所有錯誤訊息
	$cleanup = 0;
	$phone = $_GET['phone'];

	$searchphone="SELECT * From ifarm_toa.market_member WHERE `phone` = $phone";    

    $result=$mysqldb->sql_link()->query($searchphone);   
	$name = '';

	var_export($row = $result->fetch(PDO::FETCH_ASSOC));
	$name =$row['name'] ;

    $myfile = fopen("GetFaceName.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $name);
	if ($cleanup == 1){
		$myfile = fopen("GetFaceName.txt", "w") or die("Unable to open file!");
		fwrite($myfile, '');
	}
	fclose($myfile);

///////////////偵錯
	// while($row = $result->fetch(PDO::FETCH_ASSOC)){
	// 		echo '<br>ID:'.$row['id'];
	// 		echo '<br>'.'姓名'.$row['name'];
	// 		echo '<br>'.'電話'.$row['phone'].'<br>';

	// 		echo '////////////////////<br>';
	// 	}



?>