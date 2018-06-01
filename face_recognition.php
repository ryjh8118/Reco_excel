<?php   // 本機端
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
include("PDO_class.php");
include("mysql_program.php");

	function thre($le,$confidence,$thresholds){
			if ($confidence<$thresholds["1e-".$le])
				return 0;
			else
				return 1; 
		}


	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
	// error_reporting(0);  //隱藏所有錯誤訊息
	$thresholds=json_decode($_GET['thresholdsjson'], true);
	$result=json_decode($_GET['resultjson'], true);
	$Threarray=array();
 // $array=$thresholds["1e-4"]."<br>";
	
	$confidence=$result[0]["confidence"];
	// $confidence=70.123;
	$robot_facetoken=$result[0]["face_token"];


	// echo '<center><table border="10" width=500 ><td><center><font face="微軟正黑體">';

			$facedeta="
			SELECT `person_list`.`person_id`,`person_list`.`person_name`,`face_token`.`face_token` 
			From face_reco.person_list,face_reco.face_token 
			WHERE `face_token`.`person_id`=`person_list`.`person_id` 
			and `face_token`.`face_token`= '$robot_facetoken' ";   


			$result=$mysqldb->sql_link()->query($facedeta);   
			$row = $result->fetch(PDO::FETCH_ASSOC);
			// var_export($row = $result->fetch(PDO::FETCH_ASSOC));


			// echo $row['person_name']."：".$row['face_token']."<br>";
			 // while($row = $result->fetch(PDO::FETCH_ASSOC)){
				 // echo $row['person_name'].'<br>'.$row['face_token'];
			// }
			for ($i=0;$i<3;$i++){
				$j=3+$i;
				$Threarray[$i+3]= thre($i+3,$confidence,$thresholds);
				// echo '<br>閥值'.$j.' : '.$Threarray[$i+3]= thre($i+3,$confidence,$thresholds);
			}

			if($Threarray[4]==1)
				echo $row['person_name'];
			else
				echo '0';
			


?>
	



