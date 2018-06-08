
<?php 
		$id=$_REQUEST['id'];
		$result ="SELECT type FROM members where id='$id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$type=$row['type'];
        }
//[end]
if($type==1)
{
		$result ="SELECT e_name FROM emp_details where id='$id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$name=$row['e_name'];
        }	
}
else if($type==2)
{
	    $result ="SELECT s_name FROM stu_details where id='$id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$name=$row['s_name'];
        }	
}
else
{$name="Admin";}
?>
