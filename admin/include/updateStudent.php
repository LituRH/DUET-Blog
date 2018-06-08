<?php include ('includeOthers/dataRetriveSTD.php');?>
<?php include ('includeOthers/dataUpdateSTD.php');?>

    
   
  <div class="post">
<?php echo "<br><center><h3> $msg </center></h3>";?>
<fieldset>
<legend align="center" style="font-size:22px; color:#000000">Update Profile</h3></b></legend>

	<form id="login" name="login" method="post"  >

		<table border="0" cellpadding="5" class='t1' cellspacing="12" align="left ">
			<tr>
				<th>Student ID</th>
				<th><input type="text" class="textbox" autofocus name="id" id="e_id"  readonly  required="required" value="<?php echo $id;?>"/><img src="images/right.png" align="right"></th>
			</tr>
			
			<tr>
				<th>Name</th>
				<th><input type="text" class="textbox" name="name" id="e_name"  value="<?php echo $name ?>"/></th>
              
			</tr>
            <tr>
				<th>Department</th>
				<th><select class="textbox" name="dept" id="pass">
				<option value="<?php echo $dept; ?>"><?php echo $dept; ?></option>
		
		<option value="EEE">EEE</option>
		<option value="ME">ME</option>
		<option value="CE">CE</option>
		<option value="CSE">CSE</option>
        <option value="TE">TE</option>
          <option value="IPE">IPE</option>
            <option value="ARCH">ARCH</option>
		</select></th>
			</tr>
            <tr>
				<th>Year</th>
				<th><select class="textbox" name="year" id="pass">
				<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
		<option value="First">First</option>
		<option value="Second">Second</option>
		<option value="Third">Third</option>
		<option value="Fourth">Fourth</option>
        <option value="Fifth">Fifth</option>
		</select></th>
			</tr>
            <tr>
				<th>Semester</th>
				<th><select class="textbox" name="sem" id="pass">
				<option value="<?php echo $sem; ?>"><?php echo $sem; ?></option>
		<option value="1st">1st</option>
		<option value="2nd">2nd</option>
		</select></th>
			</tr>
             <tr>
			<th>Section </th>
			<th><select class="textbox" name="sec" id="pass">
		<option value="<?php echo $sec; ?>"><?php echo $sec; ?></option>
		<option value="A">Section A</option>
		<option value="B">Section B</option>
        <option value="Single">Single Section</option>
		</select></th>
			</tr>
            <tr>
				<th>User ID</th>
				<th><input type="text" class="textbox" autofocus name="u_id" id="e_id" readonly required="required" value="<?php echo $id ?>"/><img src="images/right.png" align="right"></th>
              
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
				<th><textarea name="address" cols="20" rows="5"><?php echo $address;?></textarea></th>
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