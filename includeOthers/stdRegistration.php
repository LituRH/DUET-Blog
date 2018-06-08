


<?php
	if(isset($_POST['btnSave']))
	{
		  $id=$_POST['id'];
		  $name=$_POST['name'];
		  $dept=$_POST['dept'];
		  $year=$_POST['year'];
		  $sem=$_POST['sem'];
		  $sec=$_POST['sec'];
		  $u_id=$_POST['u_id'];
		  $email=$_POST['email'];
		  $address=$_POST['address'];
		  $u_name=$_POST['u_name'];
		  $t_name=$_POST['t_name'];
		  $password=$_POST['password'];
		  $cpassword=$_POST['cpassword'];
		   $file=$_POST['file'];
		if($password!=$cpassword)
			{
			echo '<br /><center><h3>Missmatch Password!!!!!</h3></center>';
			}
			else
			{
						 include('photoUpload.php');
						 $query = "INSERT INTO stu_details VALUES ('$id', '$name','$dept','$year','$sem','$sec','$u_id','$cpassword','$newfilename','$email','$address','$u_name','$t_name','1')";
           				  mysql_query($query);
						  $_SESSION['user'] = $id;
						  echo "<script>window.location='admin/indexHome.php'</script>";
			}
			
}
		
?>