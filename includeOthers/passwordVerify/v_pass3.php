<?php

 

$m_id=$_SESSION['user'];
	if(isset($_POST['login']))
	{
		$uncle = $_POST['user'];
		$query = mysql_query("SELECT * FROM members WHERE id='$m_id'");
		while($row = mysql_fetch_array($query))
        {			
			$sm_id=$row['id'];
			$sm_type=$row['type'];
        }
		if($sm_type==2)
		{
			$query = mysql_query("SELECT * FROM stu_details WHERE id='$m_id'");
			while($row = mysql_fetch_array($query))
			{			
				$ans=$row['t_name'];
			}
			if($ans==$uncle)
			{
				echo "<script>window.location='verifyPassword4.php'</script>";
			}
			else
			{
				  echo '<br /><center><label class="error"><b><h3>Wrong Answer. Try Again.!!!</h3></b></label></center>';
			}
		}
		if($sm_type==1)
		{
			$query = mysql_query("SELECT * FROM emp_details WHERE id='$m_id'");
			while($row = mysql_fetch_array($query))
			{			
				$ans=$row['t_name'];
			}
			if($ans==$uncle)
			{
				echo "<script>window.location='verifyPassword4.php'</script>";
			}
			else
			{
				  echo '<br /><center><label class="error"><b><h3>Wrong Answer. Try Again.!!!</h3></b></label></center>';
			}
		}
		
		
		

	}
?>