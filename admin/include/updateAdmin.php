<?php include ('includeOthers/dataRetriveAdmin.php');?>
<?php include ('includeOthers/dataUpdateAdmin.php');?>

    
   
  <div class="post">
<?php echo "<br><center><h3> $msg </center></h3>";?>
<fieldset>
 <legend align="center" style="font-size:22px; color:#000000">Update Profile</h3></b></legend>
	<div id="nform">
	<form id="login" name="login" method="post"  >

		<table border="0" cellpadding="5" class='t1' cellspacing="12" align="center">
			<tr>
				<th>Admin ID</th>
				<th><input type="text" class="textbox" autofocus name="id" id="e_id"  readonly  required="required" value="<?php echo $id;?>"/><img src="images/right.png" align="right"></th>
			</tr>
			
			<tr>
				<th>Admin Name</th>
				<th><input type="text" class="textbox" name="name" id="e_name"  value="<?php echo $name ?>"/></th>
              
			</tr>
            
            
           
            
            <tr>
				<th>Admin User ID</th>
				<th><input type="text" class="textbox" autofocus name="u_id" id="e_id" readonly required="required" value="<?php echo $id ?>"/><img src="images/right.png" align="right"></th>
              
			</tr>
			<tr>
				<th>Admin Password</th>
				<td><input type="text" class="textbox" autofocus name="pass" id="e_id" value="<?php echo $pass ?>"/></th>
              
			</tr>

				<th>Admin Email</th>
				<th><input type="email" class="textbox" required="required" name="email" id="pass" value="<?php echo $email ?>"/></th>
			</tr>
			  <tr>
				<th>Admin Address</th>
				<th><textarea name="address" cols="20" rows="5"><?php echo $address;?></textarea></th>
			</tr>
			<tr>
				<td colspan="2">
					<hr />
					<br />
					<center>
					<input type="submit" class="btnLogin" name="btnUpdate" value="Submit" />		
				</td>
			</tr>
		</table>
	</form>
	</fieldset>
<br /><br />
</center>
					
			
			
    
 
 </div>
		