<?php 
session_start(); 
include ('includeOthers/connection.php');
$id=$_SESSION['user'];

$result ="SELECT id FROM members where id='$id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$sm_id=$row['id'];
        }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include ('include/header.php');?>
</head>
<body>

<!-- start header + menubar-->
<div id="header">
	<?php include ('include/menu.php');?>
</div>
<!-- end header + menubar-->

<div id="wrapper">
	<!-- start page -->
	<div id="page">
			<!-- start leftbar-->
		<div id="sidebar1" class="sidebar">
			<ul><li></li></ul>
		</div>
		<!-- end leftbar-->
		
		<!-- start content -->
		<div id="contents">
		<?php include ('include/stdRegistration.php');?>
		</div>
		<!-- end content -->
		
		<!-- start rightbar -->
		<div id="sidebar2" class="sidebar">
			
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
