<?php include ('includeOthers/dataRetriveEMP.php');?>
<?php include ('includeOthers/dataUpdateEMP.php');?>
    
  <div class="post">
  <?php echo "<br><center><h3> $msg </center></h3>";?>
<fieldset>
  <legend align="center" style="font-size:22px; color:#000000">Update Profile</h3></b></legend>
	<form id="login" name="login" method="post"  >

		<table border="0" cellpadding="5" class='t1' cellspacing="12" align="center">
			<tr>
				<th>Employee ID</th>
				<th><input type="text" class="textbox" autofocus name="id" id="e_id"  readonly  required="required" value="<?php echo $id;?>"/><img src="images/right.png" align="right"></th>
			</tr>
			
			<tr>
				<th>Name</th>
				<th><input type="text" class="textbox" name="name" id="e_name"  value="<?php echo $name ?>"/></th>
              
			</tr>
            <tr>
				<th>Department</th>
				<th><input type="text" class="textbox" name="dept" id="e_name"  value="<?php echo $dept ?>"/></th>
				
			</tr>
            
           
             <tr>
			<th>Designation</th>
			<th><input type="text" class="textbox" name="desig" id="e_name"  value="<?php echo $desig ?>"/></th>
			</tr>
            <tr>
				<th>User ID</th>
				<th><input type="text" class="textbox" autofocus name="u_id" id="e_id"  readonly required="required" value="<?php echo $id ?>"/><img src="images/right.png" align="right"></th>
              
			</tr>
			<tr>
				<th>Password</th>
				<th><input type="text" class="textbox" autofocus name="pass" id="e_id" value="<?php echo $pass ?>"/></th>
              
			</tr>

				<th>Email</th>
				<th><input type="email" class="textbox" required="required" name="email" id="pass" value="<?php echo $email ?>"/></th>
			</tr>
			  <tr>
				<th>Address</th>
				<th><textarea name="address" cols="20" rows="5" style="text-align:left;"><?php echo $address;?></textarea></th>
			</tr>
			<tr>
				<th>Favourite Uncle</th>
				<th><input type="text" class="textbox" name="u_name" id="e_name"  value="<?php echo $ans1 ?>"/></th>
              
			</tr>
			<tr>
				<th>Favourite Teacher</th>
				<th><input type="text" class="textbox" name="t_name" id="e_name"  value="<?php echo $ans2 ?>"/></th>
              
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
	