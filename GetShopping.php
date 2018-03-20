<?php   // 本機端
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
include("PDO_class.php");
include("mysql_program.php");
	$mysqldb = new PDOsetting; //連線建立物件
	$mysql_program = new datasheet;  //SQL查詢
	//error_reporting(0);  //隱藏所有錯誤訊息
	echo '<font face="微軟正黑體">';

			$shopping="SELECT market_member.name as peoplename,fproduct.name, qibill.orderID,qibill.bill
						  From ifarm_toa.qibill,ifarm_toa.qibilldetail,ifarm_toa.fproduct,ifarm_toa.market_member
						  WHERE qibill.orderID=qibilldetail.orderID
						  and qibilldetail.product_id=fproduct.pid
						  and market_member.phone=qibill.memid";
			$order = '';
			$result=$mysqldb->sql_link()->query($shopping);   
			while ($row = $result->fetch(PDO::FETCH_ASSOC) )//抓到的所有值
			{	
				if ($row['orderID'] != $order){
					echo '----------不同訂單--------------<br>';
					echo '花費：'.$row['bill'].'<br>';
					echo '訂單：'.$row['orderID'].'<br>';
					echo '姓名：'.$row['peoplename'].'<br>產品：';
				}
				//篩選不是產品
				if (strpos($row['name'],'調整')!=false or strpos($row['name'],'折扣') !=false )
				 	echo '';
				 else
				 	echo $row['name'].'<br>';

				 //比對
				$order = $row['orderID']; 
			}
		//$proname = $mysql_program->product('name','手動調整','fproduct','ifarm_toa');
				// $proname = "SELECT fproduct.name FROM ifram_toa.fproduct WHERE fproduct.name = 手動調整";
				// $proresult=$mysqldb->sql_link()->query($proname);
				// $productrow = $proresult->fetch(PDO::FETCH_ASSOC);
				// if ($row['name'] )
			

?>