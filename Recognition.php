<?php   // 本機端
include("PDO_class.php");
include("mysql_program.php");
	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
	color($text='Time：',$value=$getDate= date("Y-m-d h:i:s"));
	color($age='Age：',$humanage = $_GET['age']);
	color($text='SaveDB：',$value=$humangender=gender_judge($_GET['gender']));

	function gender_judge($gender){
			return (($gender=='male')?$gender='1':$gender ='0');
	}

	function color($text,$value='',$color=''){
		if ($color==1)  //藍色
			echo ('<br><font color="#4169E1">'.$text.$value.'</font>');
		elseif ($color==2) //紅色   
			echo ('<br><font color="#4169E1">'.$text.$value.'</font>');
		else  //黑色
			echo ('<br><font ">'.$text.$value.'</font>');
	}
///查詢////

	$timediff=$mysql_program->search('UNIX_TIMESTAMP(date_time)','1');
    $result=$mysqldb->sql_link()->query($timediff);

	while( $row = $result->fetch(PDO::FETCH_ASSOC)){
		$contrast_seconds =$row['UNIX_TIMESTAMP(date_time)']; //對比秒數
		color($text='傳入時間：',$value=$getseconds=time());
		color($text='資料時間：',$value=$contrast_seconds);
	}	

///新增資料////////////////////////
		//目前時間 - 資料庫時間   辨給一秒時間傳送 怕重複資料
	if ($getseconds-$contrast_seconds>2){
		try {
			$sql_add = $mysql_program->add_data($humanage,$humangender);
			$mysqldb->sql_link()->query($sql_add);
			color('Success','',$color='1');
		}
		catch(Exception $e){
			color('失敗');
		}
	}
//////////////////////////////////

?>