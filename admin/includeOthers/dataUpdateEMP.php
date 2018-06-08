    <?php
if(isset($_POST['btnUpdate']))
{
			$nid=$_POST['id'];
		  $nname=$_POST['name'];
		  $ddept=$_POST['dept'];
		  $desig=$_POST['desig'];
		  $u_id=$_POST['u_id'];
		   $pass=$_POST['pass'];
		  $email=$_POST['email'];
		  $address=addslashes($_POST['address']);
		$u_name=$_POST['u_name'];
		    $t_name=$_POST['t_name'];

	   if($fg==0)
	   {				
$q1=mysql_query("UPDATE emp_details SET e_name='$nname',dept='$ddept',desig='$desig',user_id='$u_id',user_pass='$pass',email='$email',address='$address',u_name='$u_name',t_name='$t_name' WHERE id ='$id'");
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