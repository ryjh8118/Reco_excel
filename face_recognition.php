<?php   // 本機端
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
include("PDO_class.php");
include("mysql_program.php");
	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
	// error_reporting(0);  //隱藏所有錯誤訊息
	$robot_facetoken=$_GET['face_token'];
	// $robot_confidence=' 55.165';
	$thresholdsjson=$_GET['thresholdsjson'];
	$resultjson=$_GET['resultjson'];
	var_dump(json_decode($thresholdsjson, true));
	// var_dump($thresholdsjson);
	echo "<br><br>";
	var_dump(json_decode($resultjson, true));
	echo "<br><br><br><br><br><br><br>";

	foreach ($thresholdsjson as $key => $value) {
    	echo "Array: $key, $value
		\n";
	}

	
		// echo $resultjson[];




	echo '<center><table border="10" width=500 ><td><center><font face="微軟正黑體">';

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
				 echo $row['person_name'].'<br>'.$row['face_token'];
			// }
?>

<body>
	<br>
	<form>
		
 		</center></td></table></center>
	</form>
	

</body>

