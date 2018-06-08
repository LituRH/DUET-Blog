<?php
if(isset($_POST['btnsave']))
{
	
	$m_id=$_POST['m_id'];
	$m_type=$_POST['m_type'];

		$result ="SELECT id FROM members where id='$m_id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {			
			$sm_id=$row['id'];
        }
		
	   if($m_id==$sm_id)
	   {
		   $msg="This Member Already Added In Admin Pannel";
		}
		else
		{
			$query = "INSERT INTO members VALUES ('$m_id', '$m_type')";
             mysql_query($query);
			 $msg=" $name Succesfully Added In Admin Panel";
		}
}

?>
   