<?php 
session_start(); 
include ('includeOthers/connection.php');
$u_id=$_SESSION['user'];
?>

<?php
	if(isset($_POST['login']))
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		//$enc_pass = md5($pass);
		
		$query = mysql_query("SELECT * FROM admin WHERE user_id='$user' AND user_pass='$pass'");
		
		if(mysql_num_rows($query) == 0)
				{		
					$query = mysql_query("SELECT * FROM stu_details WHERE user_id='$user' AND user_pass='$pass'");
					
						if(mysql_num_rows($query) == 0)		
							{
					  			$query = mysql_query("SELECT * FROM emp_details WHERE user_id='$user' AND user_pass='$pass'");	
									if(mysql_num_rows($query) == 0)
									{
										echo '<b style="color:white; font-size:12px;">Incorrect Username or Password!!</b>';
									}
									 else
										{
											$query = mysql_query("UPDATE emp_details SET online='1' WHERE id='$user'");
											$_SESSION['user'] = $username;
											echo "<script>window.location='admin/indexHome.php'</script>";	
											
										}
									
							}
						else
						{
							$query = mysql_query("UPDATE stu_details SET online='1' WHERE id='$user'");
							$_SESSION['user'] = $username;
							echo "<script>window.location='admin/indexHome.php'</script>";	
							
						}
		}
		else{
			$_SESSION['user'] = $username;
			echo "<script>window.location='admin/indexHome.php'</script>";	
	    	}
			//ed
		
	}
?>