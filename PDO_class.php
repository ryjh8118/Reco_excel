<?php
///////////////////////////////////////////////////
class PDOsetting{
	public $dbname = 'nalaning1590';
	public $host = 'localhost';
	public $port = '3306';
	public $username = 'root';
	public $userpwd = '';

	function __construct(){
		$this->sql_connect();
	}

	function sql_connect(){
		try {
		   $this->sql_link();
		   //echo "成功建立MySQL伺服器連接和開啟資料庫<br>-----------------------------------<br>"; 

		} catch (PDOException $e) {
		   echo "連接失敗: " . $e->getMessage();
		}
	}

	function sql_link(){
		$link = new PDO($this->sql_setting(),
		           $this->username,
		           $this->userpwd,
		           $this->sql_encode()   //沒輸入無法秀出中文
		           );  //連上 資料庫               並做編碼設定
		return $link;
	}

	function sql_setting(){
		return 'mysql:dbname='.$this->dbname.';host='.$this->host.';port='.$this->port;	
	}

	function sql_encode(){
		return array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");
	}

}

?>
