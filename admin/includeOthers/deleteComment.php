    <?php 
	

	 
	$iid=$_REQUEST['commentiid'];

	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	  mysql_select_db("duetblogs",$link) or die ("Cannot select the database!");
	 
	 $query="DELETE FROM comments WHERE comment='".$iid."'";
	 
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		  {echo '<br /><center><h3 style="padding-left:200px;">Your Comment Delete Succesfully!!!!!</h3></center>';}
	
	 ?>