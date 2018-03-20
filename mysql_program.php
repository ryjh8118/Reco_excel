<?php

class datasheet{

	//Facereco欄位
	public $id='id';
	public $age ='age';
	public $gender ='gender';
	public $date_time='date_time';
	//
					//查詢欄位  預設10筆欄位 
	function search($column,$countnum,$sheetname,$dbname){
		return "SELECT $column
				FROM $dbname.$sheetname 
				ORDER BY $column 
				DESC LIMIT $countnum";
	}

	function product($column,$where,$sheetname,$dbname){
		return "SELECT $column
				FROM $dbname.$sheetname
				Where $column=$where 
				ORDER BY $column";

	}

				//新增資料 pepper傳過來
	function add_data($age,$gender,$sheetname,$dbname){
		return "INSERT INTO $sheetname 
				($this->age,$this->gender) 
				VALUES ($age,$gender)";

	}

	function where($column1,$column2,$countnum,$condition,$sheetname,$dbname){
			
		return "SELECT $column1,$column2
				FROM $dbname.$sheetname
				WHERE $column1=$condition
				ORDER BY $column1 
				DESC LIMIT $countnum";
	}
}






?>