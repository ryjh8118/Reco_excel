<?php
// 本機端
include("PDO_class.php");
$mysqldb = new PDOsetting;


//$getDate= date("Y-m-d h:i:s"); //取得日期
//偵錯用
	print 'age:'.$_GET['age'].'<br>';
	print 'gender:'.$_GET['gender'];
/////////////
	$humanage = $_GET['age'];
		if($_GET['gender']=='male')
			$humangender = 1;
		else
			$humangender = 0;
//////////////

	///新增資料////////////////////////
	try {
		$sql = "INSERT INTO facereco_list (age,gender) VALUES ($humanage,$humangender)";
		$mysqldb->sql_link()->query($sql);
		echo '<br><font color="#4169E1">新增_成功</font>';
	}
	catch(Exception $e){
		echo '<br><font color="#FF0000">新增_失敗</font> ';
	}
	///////////////////////////////////	

///修改資料////////////////////////
/*
try {
	//$sql = "SELECT NOW();";
	$sql = "UPDATE facereco_list SET id=0, age=20 WHERE id=1";
	$link->query($sql);
	echo '<br>修改成功';
} catch(Exception $e){
	echo '<br>修改失敗';
}
///////////////////////////////////	*/



/////EXCEL//////////////////////////////////
/*
if ( !is_file("Record/".$getDate."_Recognition.xls")):
		$fp = fopen("Record/".$getDate."_Recognition.xls", "w"); //直接複寫
		fputs($fp,$getDate."\n");
	endif;
	
	$fp = fopen("Record/".$getDate."_Recognition.xls", "a"); //若有接寫


fputs($fp,"age\t".$_GET['age']."\n");
fputs($fp,"gender\t".$_GET['gender']."\n");
fputs($fp,"\n");


fclose($fp);
*/
//////////////////////////////////////////////////
?>