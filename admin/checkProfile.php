<?php 
session_start(); 
$user_id=$_SESSION['user'];
include ('includeOthers/connection.php');
include ('includeOthers/checkType.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include ('include/header.php');?>
</head>
<body>
<!-- start header -->
<?php include ('include/menu.php');?>

<!-- end header -->
<div id="wrapper">
	<!-- start page -->
	<div id="page">
	
		<!-- start leftbar -->
		<div id="sidebar1" class="sidebar">
			<ul><li></li></ul>
		</div>
		<!-- end leftbar -->
		
		<!-- start content -->
		<div id="contents">
		
					<?php
					if($type==1){
					?>
					<?php include ('include/profileEmployee.php');?>
					<?php 
					}else if($type==2){
					?>
					<?php include ('include/profileStudent.php');?>
					<?php 
					}else {
					?>
					<?php include ('include/profileAdmin.php');?>
					<?php 
					}
					?>
			
		</div>
		<!-- end content -->
		<div id="sidebar2" class="sidebar">
		<!-- start rightbar -->
		
		</div>
		<!-- end rightbar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end page -->
</div>
<div id="footer">
<?php include ('include/footer.php');?>	
</div>
</body>
</html>
