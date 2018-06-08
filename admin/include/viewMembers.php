<?php include ('includeOthers/deleteMembers.php');?> 
     <div class="post">

			

		<div id="formlogin">
<form method="post" action="">
      
                      <?php 
					  $uid=$_POST['name'];
					  
		include ('config.php');			           
$page_name="viewMembers.php";
$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}


$eu = ($start - 0); 
$limit = 10;                                
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 
$nume = $dbo->query("select count(id) from members")->fetchColumn();
echo "<TABLE class='t1'>";

echo '&nbsp;<form name="srch" action="viewMembers.php" method="post"><input type="text" class="textbox" placeholder="Put The User ID" autofocus name="name"/><input type="submit" name="sname" value="Search"  size="8px" required="required" /></form>';


$query=" SELECT * FROM members limit $eu, $limit ";
if($uid=="")
{
echo  "<tr><th>Member ID</th><th>Member Type</th><th>Member Name (Click For Details)</th><th>Take Action</th></tr>";
foreach ($dbo->query($query) as $row) {
$m=$i%2; // required for alternate color of rows matching to style class 
$i=$i+1;   //  increment for alternate color of rows
$iid=$row[0];
$ttype=$row[1];
if($ttype==1)
{
		$result ="SELECT e_name FROM emp_details where id='$iid'";
		$tt=mysql_query($result);
		
		if(mysql_num_rows($tt) == 0){
		$name="Unregistered";
			$tttype="Employee"; }
		
		while($row = mysql_fetch_array($tt))
        {
			$name=$row['e_name'];
			$tttype="Employee";
        }	
echo "<tr class='r$m'><td>$iid</td><td>$tttype</td><td><a href=checkProfile.php?id=$iid>$name</td><td><a href=viewMembers.php?id=$iid>Delete</a></td></tr>";
}
else
{
	    $result ="SELECT s_name FROM stu_details where id='$iid='";
		$tt=mysql_query($result);
		if(mysql_num_rows($tt) == 0){
		$name="Unregistered";
			$tttype="Student"; }
		while($row = mysql_fetch_array($tt))
        {
			$name=$row['s_name'];
			$tttype="Student";
        }	
echo "<tr class='r$m'><td>$iid</td><td>$tttype</td><td><a href=checkProfile.php?id=$iid>$name</td><td><a href=viewMembers.php?id=$iid>Delete</a></td></tr>";
}
}

}
else
{
$result ="SELECT type FROM members where id='$uid'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$ttype=$row['type'];
        }
if($ttype==1)
{
echo  "<tr><th>Member ID</th><th>Member Type</th><th>Member Name (Click For Details)</th><th>Take Action</th></tr>";
		$result ="SELECT e_name FROM emp_details where id='$uid'";
		$tt=mysql_query($result);
		
		if(mysql_num_rows($tt) == 0){
		$name="Unregistered";
			$tttype="Employee"; }
		
		while($row = mysql_fetch_array($tt))
        {
			$name=$row['e_name'];
			$tttype="Employee";
        }	
echo "<tr class='r$m'><td>$uid</td><td>$tttype</td><td><a href=checkProfile.php?id=$uid>$name</td><td><a href=viewMembers.php?id=$uid>Delete</a></td></tr>";
}
else if($ttype==2)
{
echo  "<tr><th>Member ID</th><th>Member Type</th><th>Member Name (Click For Details)</th><th>Take Action</th></tr>";
	    $result ="SELECT s_name FROM stu_details where id='$uid='";
		$tt=mysql_query($result);
		if(mysql_num_rows($tt) == 0){
		$name="Unregistered";
			$tttype="Student"; }
		while($row = mysql_fetch_array($tt))
        {
			$name=$row['s_name'];
			$tttype="Student";
        }	
echo "<tr class='r$m'><td>$uid</td><td>$tttype</td><td><a href=checkProfile.php?id=$uid>$name</td><td><a href=viewMembers.php?id=$uid>Delete</a></td></tr>";
}
else
{

echo "<br/><br/><h3><b>The Member Is Not Found In The List.</h3></b>";
}
}
echo "</table>";

if($nume > $limit ){ 
echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>";
if($back >=0) { 
print "<a href='$page_name?start=$back'><font face='Verdana' size='2'>PREV</font></a>"; 
} 
echo "</td><td align=center width='30%'>";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start=$i'><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}       
$l=$l+1;
}

echo "</td><td  align='right' width='30%'>";
if($this1 < $nume) { 
print "<a href='$page_name?start=$next'><font face='Verdana' size='2'>NEXT</font></a>";} 
echo "</td></tr></table>";

}	
		?>
</form>
		  
         
		

<br /><br />
</center>
			
		
			</div>
    </div>