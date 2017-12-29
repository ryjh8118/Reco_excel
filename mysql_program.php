<?php

class datasheet{
	public $datasheet = 'facereco_list';

	//欄位
	public $id='id';
	public $age ='age';
	public $gender ='gender';
	public $date_time='date_time';

					//查詢欄位  幾個欄位
	function search($column,$countnum){
		return "SELECT $column
				FROM $this->datasheet 
				ORDER BY $countnum 
				DESC LIMIT $countnum";
	}

				//新增資料 pepper傳過來
	function add_data($age,$gender){
		return "INSERT INTO $this->datasheet 
				($this->age,$this->gender) 
				VALUES ($age,$gender)";

	}

}






?>