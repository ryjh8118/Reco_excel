<?php

 //PDO的登入資料
$dsn = "mysql:dbname=nalaning1590;host=localhost;port=3306";
//連結PDO資料庫
try {
   $link = new PDO($dsn,
           "root",
           "",
           array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8")   //沒輸入無法秀出中文
           );
   $link->setAttribute(PDO::ATTR_ERRMODE, 
                   PDO::ERRMODE_EXCEPTION);
    echo "成功建立MySQL伺服器連接和開啟資料庫<br>-----------------------------------<br>"; 
} catch (PDOException $e) {
   echo "連接失敗: " . $e->getMessage();
}
///////////////////////////////////////////////////


?>
