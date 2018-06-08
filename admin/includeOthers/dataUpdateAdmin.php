    <?php
if(isset($_POST['btnUpdate']))
{
			$nid=$_POST['id'];
		  $nname=$_POST['name'];;
		  $u_id=$_POST['u_id'];
		  $pass=$_POST['pass'];
		  $email=$_POST['email'];
		  $address=addslashes($_POST['address']);
		

	   if($fg==0)
	   {				
$q1=mysql_query("UPDATE admin SET e_id='$nid',name='$nname',user_id='$u_id',user_pass='$pass',email='$email',address='$address' WHERE e_id ='$id'");
if($q1)
{
 $msg="Record Successfully Updated";

}
else
{

$msg="Not Update Your Record" ;
}

		   
		}

}

?>

