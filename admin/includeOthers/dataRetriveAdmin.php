<?php
		$id=$_REQUEST['id'];
	   $result ="SELECT * FROM admin WHERE e_id='".$id."'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
		  $id=$row[0];
		  $name=$row[1];
		  $u_id=$row[2];
		  $pass=$row[3];
		  $email=$row[4];
		  $address=$row[5];
        }	
		
	?>