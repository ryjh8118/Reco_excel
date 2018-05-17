	<?php  session_start();  // 本機端
	// ini_set("error_reporting","E_ALL & ~E_NOTICE");
				 error_reporting(0);  //隱藏所有錯誤訊息
		echo '<center><table border="10" width=500 ><td><center><font face="微軟正黑體">';
	?>
<body>
	<br>
	
		<h1>報到系統</h1>
		<?php
			// echo 'COOKIE：'.$_COOKIE['confirm'];
			// 	$_SESSION['UserName']='Jordan';
			 // echo $_SESSION['UserName'];
		 	
			
			switch ($_GET['name']) {
				case '1':
					$Visitorname='賴信叡';
					break;
				
				case '0':
					echo '<h1>請重新掃描</h1>';
					exit;
					break;
				case '-1':
					session_destroy();
				default:
					// if (isset($Visitorname)==1)
						$Visitorname='練習生'.rand(0,100);
					break;
			}


			if ($_POST){
				echo '<h2>報到成功</h2><br>
				<h1><font color="red">請摸我的頭</font><br>眼睛<font color="green">綠色</font>即為報到成功</h1><br>';
				exit;
			}
				else
		 	echo '<h2>姓名：'.$Visitorname.'</h2><br>';

		 	?>
	<form action="" method="post">
		<?php 
			$myfile = fopen("QRcode_confirm.php", "w") or die("Unable to open file!");
			$utf8= '<?php
					header("Content-Type:text/html; charset=utf-8");?>';
			fwrite($myfile,$utf8.$Visitorname);
			fclose($myfile);
			  // $_SESSION['confirm']=$Visitorname;
			 // echo 'SESSION'.$_SESSION['confirm'];
			// session_destroy();
		?>

		<input type="submit" name="button1" id="button1" onclick=success() value="確認" style="width:120px;height:40px;font-size:20px;">

		<input type="button" name="button2" id="button2" onclick=wrong() value="錯誤" style="width:120px;height:40px;font-size:20px;" >

 		</center></td></table></center>
	</form>
	

</body>


<!-- <?php
if($_POST)echo $_SESSION['confirm'];
?> -->

<!-- <script>
	// 


	 // document.write(name);
function success() {
  var name='<?php echo $Visitorname;?>';
  var date = new Date();
  date.setTime(date.getTime()+(10*1000)); //10秒

　alert("貴賓："+name+"，報到成功。");
  // document.cookie="confirm=1;expires="+date.toUTCString() + ";path=/";  
  										//10秒過期

}-->
<script>
function wrong() {
　alert("請重新掃描");
  location.href="QRcode.php?name=0";

  // var date = new Date();
  // date.setTime(date.getTime()-1);
  // document.cookie="confirm=0;expires="+date.toUTCString() + ";path=/";  
}

</script> 