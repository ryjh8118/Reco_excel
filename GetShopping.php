<?php   // 本機端
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
include("PDO_class.php");
include("mysql_program.php");
	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
	error_reporting(0);  //隱藏所有錯誤訊息
	// echo '<font face="微軟正黑體">';
			$shopping="SELECT market_member.name as peoplename,fproduct.name, qibill.orderID,qibill.bill
						  From ifarm_toa.qibill,ifarm_toa.qibilldetail,ifarm_toa.fproduct,ifarm_toa.market_member
						  WHERE qibill.orderID=qibilldetail.orderID
						  and qibilldetail.product_id=fproduct.pid
						  and market_member.phone=qibill.memid
						  and market_member.name = '{$_GET["customername"]}'
						  Order by qibill.orderID  desc 
						  ";
						  					
			$order = '';
			$result=$mysqldb->sql_link()->query($shopping);   
			while ($row = $result->fetch(PDO::FETCH_ASSOC) )//抓到的所有值
			{	
				//撈一筆
				if ($order == '' or $order ==$row['orderID'] )
					$order = $row['orderID']; 
				else
					break;
				/* 偵錯用
				if ($row['orderID'] != $order){
					echo '----------不同訂單--------------<br>';
					echo '花費：'.$row['bill'].'<br>';
					echo '訂單：'.$row['orderID'].'<br>';
					echo '姓名：'.$row['peoplename'].'<br>產品：';
				}  */
				//篩選不是產品
				if (strpos($row['name'],'調整')!=false or strpos($row['name'],'折扣') !=false )
				 	echo '';
				 else{
				 	// $product = array();
				 	$product[$row['name']] = $row['name'].'<br>';
				 	// echo $product = $row['name'].'<br>';
				 }
				 //比對
				
			} 
			//陣列隨機亂數

			if ($product!=NULL){
				echo '我印象中記得你上次有購買';
				print_r(array_rand($product,1));
				echo '如果喜歡的話可以再來買唷';
			}else{
				echo '你好像還沒買過我們超市的東西';
			}
			// var_dump($product);


			

?>