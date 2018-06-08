<?php
		$id=$_REQUEST['id'];
	   $result ="SELECT * FROM stu_details WHERE id='".$id."'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
		  $id=$row[0];
		  $name=$row[1];
		  $dept=$row[2];
		  $year=$row[3];
		  $sem=$row[4];
		  $sec=$row[5];
		  $u_id=$row[6];
		  $pass=$row[7];
		  $email=$row[9];
		  $address=$row[10];
		  $ans1=$row[11];
		  $ans2=$row[12];
        }	
		
	?>
