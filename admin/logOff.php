<?php 
session_start(); 

include ('includeOthers/connection.php');
$user=$_SESSION['user'];
$result ="SELECT type FROM members where id='$user'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$type=$row['type'];
		}	
if($type==1)
{
		
			$query = mysql_query("UPDATE emp_details SET online='0' WHERE id='$user'");
}
if($type==2)
{
	   
$query = mysql_query("UPDATE stu_details SET online='0' WHERE id='$user'");
}



?>

<?php

	
	session_destroy();
	
	echo "<script>window.location='/duetblog/index.php'</script>";
	
?>