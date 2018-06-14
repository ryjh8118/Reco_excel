<?php   // 本機端
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
include("PDO_class.php");
include("mysql_program.php");
	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
	//error_reporting(0);  //隱藏所有錯誤訊息
	// echo '<font face="微軟正黑體">';
			$hotproduct="SELECT fproduct.name ,COUNT(name) as 'number'
					    FROM ifarm_toa.qibilldetail,ifarm_toa.fproduct
					    WHERE fproduct.pid=qibilldetail.product_id
					    GROUP BY qibilldetail.product_id 
					    ORDER BY COUNT(name) desc  
					    LIMIT 10";
						  					
			$result=$mysqldb->sql_link()->query($hotproduct);   
			while ($row = $result->fetch(PDO::FETCH_ASSOC) )//抓到的所有值
			// var_dump($row);
			{	
				
				if (strpos($row['name'],'調整')!=false or strpos($row['name'],'折') !=false 
					or strpos($row['name'],'營業') !=false)
				 	echo '';
				 else{
				 	// $product = array();
				 	$product[$row['name']] = $row['name'].'<br>';
				 	// echo $product = $row['name'].'<br>';
				 }

			} 
			//陣列隨機亂數
			// echo '我們最熱賣的是';
			// var_dump($product);
			print_r(array_rand($product,1));
			
			

?>