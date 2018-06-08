
<?php
	if(isset($_POST['btnPost']))
	{
		  $id=$_POST['id'];
		  $title=$_POST['title'];
		  $name=$_POST['name'];
		  $cat=$_POST['cat'];
		  $content=addslashes($_POST['postcontent']);
		  $file=$_POST['file'];
		  $file=$_POST['file2'];
		  $file=$_POST['file3'];
		   $file=$_POST['file4'];
		    $file=$_POST['file5'];
		  $month =  date("n");
include('datetime.php');

include('photoUpload.php');
include('photoUpload1.php');
include('photoUpload2.php');
include('photoUpload3.php');
include('photoUpload4.php');
          $query = "INSERT INTO posts VALUES ('','$title', '$cat', '$date','$time','$id','$name','$content','$newfilename','$newfilename1','$newfilename2','$newfilename3','$newfilename4')";
           mysql_query($query);
		   echo '<br /><center><label class="error"><b><h3>Your Have Succesfully Post.!!!</h3></b></label></center>';
			
}
		
?>