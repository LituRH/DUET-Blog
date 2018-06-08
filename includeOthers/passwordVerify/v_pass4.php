<?php



$m_id=$_SESSION['user'];
	if(isset($_POST['login']))
	{
		$pass = $_POST['user'];
		$query = mysql_query("SELECT * FROM members WHERE id='$m_id'");
		while($row = mysql_fetch_array($query))
        {			
			$sm_id=$row['id'];
			$sm_type=$row['type'];
        }
		if($sm_type==2)
		{
			$query = mysql_query("UPDATE stu_details SET user_pass='$pass' WHERE id='$m_id'");
			if($query)
			{
				 echo '<br /><center><label class="error"><b><h3>You Have Successfully Re-generate Your Password!!!<br/></h3></b></label></center>';
			}
			else
			{
				 echo '<br /><center><label class="error"><b><h3>May Be Something Wrong Happened. Try Later.!!!</h3></b></label></center>';
			}
		}
		if($sm_type==1)
		{
			$query = mysql_query("UPDATE emp_details SET user_pass='$pass' WHERE id='$m_id'");
			if($query)
			{
				 echo '<br /><center><label class="error"><b><h3>You Have Successfully Re-generate Your Password!!!</h3></b></label></center>';
			}
			else
			{
				 echo '<br /><center><label class="error"><b><h3>May Be Something Wrong Happened. Try Later.!!!</h3></b></label></center>';
			}
		}
		
		
		

	}
?>