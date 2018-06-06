<?php   // 本機端
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
include("PDO_class.php");
include("mysql_program.php");


	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
	// error_reporting(0);  //隱藏所有錯誤訊息

	$facetoken = $_GET['facetoken'];
	$name = $_GET['name'];

	$namedata="SELECT * 
				  From face_reco.person_list 
				  WHERE `person_list`.`person_name`='$name'";    
	$result=$mysqldb->sql_link()->query($namedata);   
	$row = $result->fetch(PDO::FETCH_ASSOC);
	
	// var_dump($row);

//   丟姓名撈資料 假如無資料 直接新增
	if ($row==FALSE){
		$sql_add = "INSERT INTO `face_reco`.`person_list`(`person_name`) VALUES ('$name')";
		$mysqldb->sql_link()->query($sql_add);   
		// echo '無這個人，新增成功<br>';

		$namedata="SELECT `person_id`
				  From face_reco.person_list 
				  WHERE `person_list`.`person_name`='$name'";  
		$result=$mysqldb->sql_link()->query($namedata);     
		$row = $result->fetch(PDO::FETCH_ASSOC);
		// perid  $row['person_id']
		$person_id=$row['person_id'];
		$sql_add = "INSERT INTO `face_reco`.`face_token`(`person_id`,`face_token`) 
					VALUES ('$person_id','$facetoken')";
		$mysqldb->sql_link()->query($sql_add);
		// echo '新增一組facetoken 共1組 <br>新增成功';
		echo '恭喜你成為我們的一員';
		
	}else{

		// $sql_add = "INSERT INTO `face_reco`.`person_list`(`person_name`) VALUES ('$name')";
		// $mysqldb->sql_link()->query($sql_add);   
		// echo '有這個人，撈person_ID成功<br>';

		$namedata="SELECT `person_id`
				  From face_reco.person_list 
				  WHERE `person_list`.`person_name`='$name'";  
		$result=$mysqldb->sql_link()->query($namedata);     
		$row = $result->fetch(PDO::FETCH_ASSOC);
		// perid  $row['person_id']
		$person_id=$row['person_id'];
		$sql_add = "INSERT INTO `face_reco`.`face_token`(`person_id`,`face_token`) 
					VALUES ('$person_id','$facetoken')";
		$mysqldb->sql_link()->query($sql_add);
		// echo '共有多組facetoken <br>新增成功';
	}


	

?>
	



