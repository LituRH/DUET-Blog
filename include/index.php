			<div class="flower"></div>
 

 <?php

//5. records shown amount
$per_page = 7;

//7. current page
if(!isset($_GET['page']))
{
$page = 1;
}
else
{
$page = $_GET['page'];
}


//4. mysql start possistion
if ($page<=1)
$start = 0;
else
$start = $page * $per_page - $per_page;


//1.connecting to server


//2. main sql query
$sql = "select* from posts ORDER BY post_id DESC";

//7.how much records are in database
$num_rows = mysql_num_rows(mysql_query($sql));

//7.how much pages are at all
$num_pages = ceil($num_rows / $per_page);

//6. appends limit for shown records
$sql .=" LIMIT $start, $per_page";


//3. shows all records
$result = mysql_query($sql);
?>

<?php 
 while($row = mysql_fetch_array($result))
 {
 	$name=$row[6];
	$id=$row[5];
	$title=$row['title'];
	$string=$row[7];
	$psot=$row[0];
    $string = strip_tags($string);
    if (strlen($string) > 100) {
    // truncate string
	$cutst=substr($string,0,80);
    $stringCut = substr($string,0,80);
    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).$cutst;
    }
	else
	{
	$string=$string;
	}
 
 ?> 
  <div class="post">
 
   
   <form name="first" method="post" action="recentpost.php">
				<h1 class="title"><?php echo "<a href='#' onclick='login()'>$title</a>";?></h1>  </form>
				<p class="byline">Posted on <?php echo $row['date']; ?> &nbsp; <?php echo $row['time']; ?>&nbsp; by <?php echo "<a href='#' onclick='login()'>$name</a>";?> </a></p>
				<div class="entry">
                <p style="margin:auto;"><img src="admin/upload/<?php echo $row['file']; ?>" width="300" height="200" alt="" class="byline1" longdesc="<?php echo $row['file']; ?>" /></p>
            <p class="byline1" readonly style="background-color:#FFF; color:#000000; border:0px; backface-visibility:hidden; text-justify:auto; text-decoration:none; font-size:16px" wrap="physical"> <?php echo $string ?> <?php echo "<a href='#' onclick='login()'>......Read More</a>";?></p>
            
         
           
            </div>
                           
  
                  
</div>
    
  <?php } ?>


 <?php
//8. prev, numbers, next links.
$prev = $page - 1;
$next = $page + 1;

echo "<hr>";

//prev
?> 
<ul class='pagination'><li><?php 
if($prev > 0)
echo "<a href='?page=$prev'>Prev</a>";?></li>
<?php
//numbers
$number = 1;
for($number; $number <= $num_pages; $number +=1)
{
	if ($page == $number){?>
	<li></li>
	<?php
	}else{?>
	<li></li>
	<?php 
}
}
//next?>
<li><?php
if($page < ceil($num_rows/$per_page))
echo " <a href='#' onclick='login()'>Next</a>";?></li></ul>
<?php
//3.page
if(!isset($_GET['page']))
{
	$page = 1;
}
else
{
	$page = $_GET['page'];
}

//5.shown records amount
$per_page = 7;

//6.start on mysql
if($page<=1)
   $start = 0;
else
   $start = $page * $per_page - $per_page;
?>

 