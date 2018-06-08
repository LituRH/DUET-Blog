<?php
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	   $id=$_REQUEST['id']; 
	   $result ="SELECT post_id,title,cat_id,post_by,content FROM posts WHERE post_id='".$id."'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$id=$row['post_id'];
			$title=$row['title'];
			$cat_no=$row['cat_id'];
			$p_by=$row['post_by'];
			$texts=$row['content'];
			$result ="SELECT cat_name FROM post_catagory WHERE cat_id='$cat_no' ";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {			
			$cat_name=$row['cat_name'];	
		   }
			
        }	
		
	?>