<?php   // 本機端
//ini_set("error_reporting","E_ALL & ~E_NOTICE");
/*
include("PDO_class.php");
include("mysql_program.php");
	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢

	function color($text,$value='',$color=''){
		if ($color==1)  //藍色
			echo ('<br><font color="#4169E1">'.$text.$value.'</font>');
		elseif ($color==2) //紅色   
			echo ('<br><font color="#4169E1">'.$text.$value.'</font>');
		else  //黑色
			echo ('<br><font ">'.$text.$value.'</font>');
	} */
	/*
	$photoname=array();
		$i=0;
///查詢////												//先設定10張照片輪播
	$data_name=$mysql_program->search($column='data_name','10',$sheetname='img_list');
    $result=$mysqldb->sql_link()->query($data_name);   
 	while($row = $result->fetch(PDO::FETCH_ASSOC)){
			echo $photoname[$i]=$row['data_name'].'<br>';
			$i+=1;
	}*/
	$num=rand(0,4);
	//echo $num;
	echo "<img src=\"img\juice".$num.".jpg\">";

?>