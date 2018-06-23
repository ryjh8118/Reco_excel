<?php   // 本機端
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
include("PDO_class.php");
include("mysql_program.php");
	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
	error_reporting(0);  //隱藏所有錯誤訊息
	// echo '<font face="微軟正黑體">';
			$Ask="SELECT fproduct.name,COUNT(fproduct.name)
				  FROM ifarm_toa.qiproduct,ifarm_toa.fproduct
				  where qiproduct.product_id=fproduct.pid
				  and fproduct.sort_id= '{$_GET["ask_sortid"]}'
			      GROUP by fproduct.pid
						  ";
						  // 現打果汁 9  、12 熟食		
			$result=$mysqldb->sql_link()->query($Ask);   
			while ($row = $result->fetch(PDO::FETCH_ASSOC) )//抓到的所有值
			{	
			$product[$row['name']] = $row['name'].'<br>';

				
			} 
			//陣列隨機亂數
				

			// echo '我們的巴台有賣';


			print_r($product);
			// if ($_GET['ask_sortid']==9)
			// 	echo '是新鮮水果現打的香濃好喝';
			// else
			// 	echo '偷偷跟你說我看客人都吃得津津有味狼吞虎嚥我以為都沒吃飯呢';
			

?>