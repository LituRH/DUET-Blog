  <div class="post">
	<pre style="font-size:14px; color:red">
	You Have Succesfully Varified That 
	You Are A Student Of DUET.
	Please Fill Up Information For Complete Registration.
	</pre>

		<?php include "includeOthers/stdRegistration.php" ;?>

	<fieldset>
			   		<legend align="center" style="font-size:18px; color:#000000"><b><h3>Student Registration Form</b></h3></legend>
	<div id="nform">
	<form id="login" name="login" method="post" >

		<table border="0" cellpadding="5" cellspacing="12" align="center">
			<tr>
				<td><label for="user"><b> Student ID : &nbsp;</b></label></td>
				<td><input type="text" class="textbox" autofocus name="id" id="e_id"  readonly required="required" value="<?php echo $sm_id ?>" size="30" /></td>
                <td><img src="admin/images/right.png" align="right"></td>
			</tr>
			
			<tr>
				<td><label for="pass"><b>Student Name : </b></label></td>
				<td><input type="text" class="textbox" placeholder="Enter Name" required="required" name="name" id="e_name"  size="30" /></td>
            
			</tr>
            <tr>
				<td><label for="pass"><b>Department : </b></label></td>
				<td><select class="textbox" name="dept" id="pass" >
				<option value="">Select Department</option>
		<option value="CSE">CSE</option>
		<option value="EEE">EEE</option>
		<option value="ME">ME</option>
		<option value="CE">CE</option>
        <option value="TE">TE</option>
          <option value="IPE">IPE</option>
            <option value="ARCH">ARCH</option>
		</select></td>
			</tr>
            <tr>
				<td><label for="pass"><b>Year : </b></label></td>
				<td><select class="textbox" name="year" id="pass">
				<option value="">Select Year</option>
		<option value="First">First</option>
		<option value="Second">Second</option>
		<option value="Third">Third</option>
		<option value="Fourth">Fourth</option>
        <option value="Fifth">Fifth</option>
		</select></td>
			</tr>
            <tr>
				<td><label for="pass"><b>Semester : </b></label></td>
				<td><select class="textbox" name="sem" id="pass">
				<option value="">Select Semester</option>
		<option value="1st">1st</option>
		<option value="2nd">2nd</option>

		</select></td>
			</tr>
             <tr>
			<td><label for="pass"><b>Section : </b></label></td>
			<td><select class="textbox" name="sec" id="pass">
		<option value="">Select Section</option>
		<option value="A">Section-A</option>
		<option value="B">Section-B</option>
        <option value="Single">Section-Single</option>
		</select></td>
			</tr>
            <tr>
				<td><label for="user"><b> User ID: &nbsp;</b></label></td>
				<td><input type="text" class="textbox" autofocus name="u_id" id="e_id"  readonly required="required" value="<?php echo $sm_id ?>" size="30" /></td>
                <td><img src="admin/images/right.png" align="right"></td>
			</tr>
			<tr>
				<td><label for="pass"><b>Password : </b></label></td>
				<td><input type="password" class="textbox" name="password"  placeholder="Enter Password" required="required"id="pass" size="30" /></td>
			</tr>
			<tr>
				<td><label for="pass"><b>Confirm Password :  </b></label></td>
				<td><input type="password" class="textbox" placeholder="Enter Password Again" required="required" name="cpassword" id="pass" size="30" /></td>
			</tr>
            <tr>
				<td><label for="pass"><b>Email:  </b></label></td>
				<td><input type="email" class="textbox" required="required" placeholder="Enter Your Email" name="email" id="pass" size="30" /></td>
			</tr>
			  <tr>
				<td><label for="pass"><b>Address:  </b></label></td>
				<td><textarea name="address" cols="24" rows="5" placeholder="Put Your Address" required="required"></textarea></td>
			</tr>
			
             
			<tr>
				<td><label for="pass"><b>Whats The Name of Your Favourite Uncle? </b></label></td>
				<td><input type="text" class="textbox" placeholder="Required If Forget Password" required="required" name="u_name" id="e_name" size="30"  /></td>
            
			</tr>
			<tr>
				<td><label for="pass"><b>Whats The Name of Your Favourite Teacher? </b></label></td>
				<td><input type="text" class="textbox" placeholder="Required If Forget Password" required="required" name="t_name" id="e_name"  size="30" /></td>
            
			</tr>
			<tr>
				<td><label for="pass"><b>Photo: </b></label></td>
				<td><input type="file"  name="file"   size="70" id="pass" /></td>
			</tr>
      <tr>
					<td width="100%" >
						<input type="submit" class="btnLogin" name="btnSave" value="Submit" style="background:#006600; color:#FFFFFF" size="20" />
					</td></tr>
					<tr><td >
						<input type="button" name="back"  value="Cancel" style="background:#FF0000; color:#FFFFFF" onclick="back_button()">
					</td>

				</tr>
		</table>
	</form>
	</fieldset>
<br /><br />
</center>
					
			
			
    
 
 
		</div>