<?php

class datasheet{

	//Facereco欄位
	public $id='id';
	public $age ='age';
	public $gender ='gender';
	public $date_time='date_time';
	//
	//img欄位
	public $data_name='name'; //主檔名

					//查詢欄位  預設10筆欄位 
	function search($column,$countnum,$sheetname){
		return "SELECT $column
				FROM $sheetname 
				ORDER BY $column 
				DESC LIMIT $countnum";
	}

				//新增資料 pepper傳過來
	function add_data($age,$gender,$sheetname){
		return "INSERT INTO $sheetname 
				($this->age,$this->gender) 
				VALUES ($age,$gender)";

	}

}






?>