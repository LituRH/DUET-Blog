<?php 
session_start(); 
include ('includeOthers/connection.php');
$id=$_SESSION['user'];
?>
<?php
if($id == '12345'){
?>
<div id="header">
	<div id="logo" >
	<?php if ($menus==1){?>
	<form name="srch" action="" method="post" style="float:right;padding-top:2px;">
	<input type="text" class="textbox" placeholder="Put The Blogger Name" autofocus name="name"/><br>
	<input type="submit" name="sname" value="Search"  size="8px" required="required" style="background:#006600; color:#FFFFFF" size="20"/></form>
    <?php } ?>
		<h2><pre><img src="images/logo.png" height="90" width="100"/>DUET Online Blog</a></pre></h2>
	</div>
	<div id="menus">
		<ul id="main" style="float:right;>
			<li class="current_page_item"><a href="indexHome.php" title="Home" target="_parent">Home</a></li>
			<li><a href="IndexSelf.php">Your Post</a></li>
			<li><?php echo "<a href='createPost.php?id=$id'>New Post</a>";?></li>
			<li><?php echo "<a href='checkProfile.php?id=$id'>Your Profile</a>";?></li>
			<li><?php echo "<a href='updateProfile.php?id=$id'>Update Profile</a>";?></li>
			<li><a href="catagoryAdd.php">Add Catagory</a></li>
			<li><a href="memberAdd.php">Add Member</a></li>
			<li><a href="viewMembers.php">View Members</a></li>
			<li><a href="logOff.php">LogOut</a></li>
		</ul>
		<ul id="feed">
			
		</ul>
	</div>
	
</div>
<?php 
}else {
?>
<div id="header">
	<div id="logo">
	<?php if ($menus==1){?>
	<form name="srch" action="" method="post" style="float:right;padding-top:2px;">
	<input type="text" class="textbox" placeholder="Put The Blogger Name" autofocus name="name"/><br>
	<input type="submit" name="sname" value="Search"  size="8px" required="required" style="background:#006600; color:#FFFFFF" size="20"/></form>
    <?php } ?>
		<h2><pre><img src="images/logo.png" height="100" width="110"/>DUET Online Blog</a></pre></h2>
	</div>
	<div id="menu">
		<ul id="main" style="padding-left:325px;float:right;>
			<li class="current_page_item"><a href="indexHome.php" title="Home" target="_parent">Home</a></li>
			<li><a href="indexSelf.php">Your Post</a></li>
			<li><?php echo "<a href='createPost.php?id=$id'>New Post</a>";?></li>
			<li><?php echo "<a href='checkProfile.php?id=$id'>Your Profile</a>";?></li>
			<li><?php echo "<a href='updateProfile.php?id=$id'>Update Profile</a>";?></li>
			<li><a href="logOff.php">LogOut</a></li>
		</ul>
		<ul id="feed">
			
		</ul>
	</div>
	
</div>
	 
<?php 
}
?>