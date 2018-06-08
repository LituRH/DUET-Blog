<?php

	if(isset($_POST['login']))
	{
		$m_id = $_POST['user'];
		$query = mysql_query("SELECT * FROM members WHERE id='$m_id'");
		while($row = mysql_fetch_array($query))
        {			
			$sm_id=$row['id'];
			$sm_type=$row['type'];
        }
		if ($sm_type==1)
		{
			$query = mysql_query("SELECT * FROM emp_details WHERE id='$m_id'");
			if(mysql_num_rows($query) != 0)
			{
				echo '<br /><center><label class="error"><h3>You Have Already Registered Members.</h3></label></center>';
			}
			else
			{
				$_SESSION['user'] = $m_id;
				echo "<script>window.location='empRegistration.php'</script>";
				
			}
			
		}
		else if ($sm_type==2)
		{
			$query = mysql_query("SELECT * FROM stu_details WHERE id='$m_id'");
			if(mysql_num_rows($query) != 0)
			{
				echo '<br /><center><label class="error"><h3>You Have Already Registered Members.</h3></label></center>';
			}
			else
			{
				$_SESSION['user'] = $m_id;
				echo "<script>window.location='stdRegistration.php'</script>";
				
			}
			
		}



		
		else
		{
			echo '<br /><center><label class="error"><h3>We Are Sorry That, Your ID Could Not Found In DUET </br>Employee/Student List. So You Cant Register This Blog.</h3></label></center>';
		}
	}
?>