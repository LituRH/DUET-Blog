<?php
		$id=$_REQUEST['id'];
	   $result ="SELECT * FROM emp_details WHERE id='".$id."'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
		  $id=$row[0];
		  $name=$row[1];
		  $dept=$row[2];
		  $desig=$row[3];
		  $u_id=$row[4];
		  $pass=$row[5];
		  $email=$row[7];
		  $address=$row[8];
		  $address=trim($address);
		   $ans1=$row[9];
		    $ans2=$row[10];
        }	
		
	?>