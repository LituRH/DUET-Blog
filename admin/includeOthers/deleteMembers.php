<?php 
	
	
	 $id=$_REQUEST['id']; 

	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("duetblogs",$link) or die ("Cannot select the database!");
	 $query="DELETE FROM members WHERE id='".$id."'";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		 {
		  
		  }
	 ?>