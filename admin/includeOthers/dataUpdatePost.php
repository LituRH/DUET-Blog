<?php
if(isset($_POST['btnUpdate']))
{
	    $pid=$_POST['n_no'];
		$pby=$_POST['n_by'];
		$title=$_POST['title'];
		$cat_no=$_POST['cat_no'];
		
		$texts=addslashes($_POST['texts']);
			
$q1=mysql_query("UPDATE posts SET post_id='$pid',post_by='$pby',title='$title',cat_id='$cat_no',content='$texts' WHERE post_id ='$pid'");
if($q1)
{
 $msg="Record Successfully Updated";

}
else
{

$msg="Not Update Your Record" ;
}

		   
		

}

?>