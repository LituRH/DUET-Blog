<?php 
session_start(); 

include ('includeOthers/connection.php');
$u_id=$_SESSION['user'];
?>

<?php
	if(isset($_POST['btnSave']))
	{
		  $id=$_POST['id'];
		  $name=$_POST['name'];
		  $dept=$_POST['dept'];
		  $desig=$_POST['desig'];
		  $u_id=$_POST['u_id'];
		  $email=$_POST['email'];
		  $address=$_POST['address'];
		  $file=$_POST['file'];
		  $u_name=$_POST['u_name'];
		  $t_name=$_POST['t_name'];
		  $password=$_POST['password'];
		  $cpassword=$_POST['cpassword'];
		   include ('photoUpload.php');
		if($password!=$cpassword)
			{
			echo '<br /><center><h3>Missmatch Password!!!!!</h3></center>';
			}
			else
			{
			//check duplicate start
			       $query = mysql_query("SELECT * FROM emp_details WHERE id='$id'");
					if(mysql_num_rows($query) == 0){
						 $query = "INSERT INTO emp_details VALUES ('$id', '$name','$dept','$desig','$u_id','$cpassword','$newfilename','$email','$address','$u_name','$t_name','1')";
           				  mysql_query($query);
						 echo '<br /><center><h3>Succesfully Added</h3></center>';
						  	$_SESSION['user'] = $id;
						echo "<script>window.location='admin/indexHome.php'</script>";
					}
					else
					{
						 echo '<br /><center><h3>You Have Already Registered!!!!!</h3></center>';
					}
			}
			//check duplicate end
			
}
		
?>