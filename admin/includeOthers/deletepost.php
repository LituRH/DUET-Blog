    <?php 
	
	
	 $iid=$_REQUEST['id']; 

	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("duetblogs",$link) or die ("Cannot select the database!");
	 
		$result ="SELECT * FROM posts WHERE post_id='".$iid."'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$file1=$row[8];
			if($file1!="")
			{unlink("upload/".$file1);}
			$file2=$row[9];
			if($file2!="")
			{unlink("upload/".$file2);}
			$file3=$row[10];
			if($file3!="")
			{unlink("upload/".$file3);}
			$file4=$row[11];
			if($file4!="")
			{unlink("upload/".$file4);}
			$file5=$row[12];
			if($file5!="")
			{unlink("upload/".$file5);}
        }	
		
	 
	 $query="DELETE FROM posts WHERE post_id='".$iid."'";
	 
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		 {
		 // echo "Record ".$id." removed successfully!";
		 }
	 ?>