<div class="flower"></div>

 <?php

	$u_id=$_SESSION['user'];
   $postid=$_REQUEST['id'];
   $iid=$_REQUEST['commentiid'];
  


		$result ="SELECT type FROM members where id='$u_id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$type=$row['type'];
        }
//[end]
if($type==1)
{
		$result ="SELECT e_name FROM emp_details where id='$u_id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$name=$row['e_name'];
        }	
}
else if($type==2)
{
	    $result ="SELECT s_name FROM stu_details where id='$u_id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$name=$row['s_name'];	
        }	
}

else
{
$name=Admin;
}
if(isset($_POST['btncom']))
{

$content=$_POST['comment'];
 $month =  date("n");
$day = date("d");
$year = date("Y");
$date = $month."/".$day."/".$year;
$hour = date("g");
$min = date("i"); 
$format = date("a");
$time = $hour.":".$min." ".$format;
$photo='NULL';
$userid=$id;

$sql="INSERT INTO comments VALUES ('','$postid','$userid','$content','$photo','$date','$time','$name')";
if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}
else
{
	echo "<script>window.location='fullPostRead.php?id=$postid'</script>";	
}
}
?>

   		    <div id="tooplate_main">
   		<div id="tooplate_content" class="left">
        <?php 
			if($iid!="")
	{ 
	include('includeOthers/deleteComment.php');
	
	}
  
    $result = mysql_query("SELECT * FROM posts WHERE post_id='$postid' ");	

	while($row = mysql_fetch_array($result))
	{

   ?>
        	 	  <div class="post">
   <form name="first" method="post" action="fullpost.php">
				<h1 style="color:#8C0209" class="byline2"><?php echo $row['title']; ?></a></h1>  </form>
				<p class="byline">Posted on <?php echo $row['date']; ?> &nbsp; <?php echo $row['time']; ?>&nbsp;by <b style="color:#8C0209";><?php echo $row['post_by']; ?></b> </a></p>
				<div class="entry">
                <?php if ($row['file']!=""){ ?><p style="margin:auto;"><img src="upload/<?php echo $row['file']; ?>" width="400" height="300" alt="" class="byline1" longdesc="<?php echo $row['file']; ?>" /></p></br><?php } ?>
				 <?php if ($row['file2']!=""){ ?><p style="margin:auto;"><img src="upload/<?php echo $row['file2']; ?>" width="500" height="300" alt="" class="byline1" longdesc="<?php echo $row['file2']; ?>" /></p></br><?php } ?>
				 <?php if ($row['file3']!=""){ ?><p style="margin:auto;"><img src="upload/<?php echo $row['file3']; ?>" width="500" height="300" alt="" class="byline1" longdesc="<?php echo $row['file3']; ?>" /></p></br><?php } ?>
				  <?php if ($row['file4']!=""){ ?><p style="margin:auto;"><img src="upload/<?php echo $row['file4']; ?>" width="500" height="300" alt="" class="byline1" longdesc="<?php echo $row['file4']; ?>" /></p></br><?php } ?>
				   <?php if ($row['file5']!=""){ ?><p style="margin:auto;"><img src="upload/<?php echo $row['file5']; ?>" width="500" height="300" alt="" class="byline1" longdesc="<?php echo $row['file5']; ?>" /></p></br><?php } ?>
            <p class="byline1" readonly style="background-color:#FFF; color:#000000;  backface-visibility:hidden; text-justify:auto; text-decoration:none; font-size:16px" wrap="physical"> <?php echo $row['content'] ?> </p><br/>
                        <p class="byline1"  style="border-bottom: 2px #BBBBBB dashed;"> </p>
         
           
            </div>
                           
  
                  
</div>
        <?php } ?>   
            <h4></h4>
            
            
            <ol class="comment_list">

			
   <?php
   

  $result = mysql_query("SELECT * FROM comments WHERE post_id='$postid' ORDER BY comment DESC ");

	while($row = mysql_fetch_array($result))
	{
		?>
    <table width="400" border="0" cellspacing="0" cellpadding="5">

  <tr>
   <td><h4>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['content'];?> </h4><h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Commented By:&nbsp;&nbsp;<?php echo $row['comment_by'];?> &nbsp;&nbsp;&nbsp;&nbsp;</h6> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($u_id==$row[2] ||$u_id==12345){ echo "<a href='fullPostRead.php?commentiid=$row[0]'  style='color:red; text-decoration:none;'>Delete</a>"; } ?></td>
  </tr>

</table>
<?php
	
	}

//



?>  
                       <!--  comment--->
                   
                </div>



        </ol>
        
        <div class="clear"></div>
            
			<?php if($iid=="")
			{?>
        
            <div id="comment_form">
            
            <b style="color:black;">Leave Your Comment</b>
            <form action="" method="post">
                <textarea  name="comment" rows="" cols="" required="required" ></textarea>
                <input type="submit" name="btncom" value="Submit" class="" />
            </form> 

      </div>
	 <?php }
   
        ?>
      </div>
 
		