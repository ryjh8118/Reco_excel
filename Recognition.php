<?php
include("PDO.php");
$getDate= date("Y_md"); //取得日期

//偵錯用
print 'age:'.$_GET['age'].'<br>';
print 'gender:'.$_GET['gender'];








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
?>