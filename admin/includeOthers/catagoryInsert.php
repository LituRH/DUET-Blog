<?php
$result ="SELECT *FROM post_catagory ";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {			
			$cat_noo=$row['cat_id'];
        }
	$cat_noo=$cat_noo+1;
if(isset($_POST['btnSave']))
{
	
	        $cat_type=$_POST['cat_name'];  
			$query = "INSERT INTO post_catagory VALUES ('$cat_no', '$cat_type')";
             mysql_query($query);
			 $msg= $cat_type. " Succesfully Added In Category List!!";
			  $result ="SELECT *FROM post_catagory ";
		     $tt=mysql_query($result);
		       while($row = mysql_fetch_array($tt))
               {			
			    $cat_noo=$row['cat_id'];
                }
	             $cat_noo=$cat_noo+1;
}

?>
   