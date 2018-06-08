<?php 
session_start(); 
include ('includeOthers/connection.php');
$id=$_SESSION['user'];
$reqid=$_REQUEST['req'];
?>
<?php include('includeOthers/deletepost.php')?>
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
			<?php include ('include/leftbarSelf.php');?>
		</div>
		<!-- end leftbar -->
		
		<!-- start content -->
		<div id="content">
			<?php include ('include/indexSelf.php');?>
		</div>
		<!-- end content -->
		<div id="sidebar2" class="sidebar">
		<!-- start rightbar -->
		<?php include ('include/rightbarSelf.php');?>
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
