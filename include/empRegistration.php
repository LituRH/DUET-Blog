  <div class="post">
  
	<pre style="font-size:14px; color:red">
	You Have Succesfully Varified That 
	You Are A Employee Of DUET.
	Please Fill Up Information For Complete Registration.
	</pre>

		<?php include "includeOthers/empRegistration.php"; ?>

	<fieldset>
			   		<legend align="center" style="font-size:18px; color:#000000"><b><h3>Employee Registration Form</b></h3></legend>

	<form id="login" name="login" method="post" >

		<table border="0" cellpadding="5" cellspacing="12" align="center">
			<tr>
				<td><label for="user"><b> Employee ID : &nbsp;</b></label></td>
				<td><input type="text" class="textbox" autofocus name="id" id="e_id"  readonly required="required" value="<?php echo $sm_id ?>" size="30"/></td>
                <td><img src="admin/images/right.png" align="right"></td>
			</tr>
			
			<tr>
				<td><label for="pass"><b>Employee Name : </b></label></td>
				<td><input type="text" class="textbox" placeholder="Enter Name" required="required" name="name" id="e_name"  size="30"/></td>
                <td></td>
			</tr>
            <tr>
				<td><label for="pass"><b>Department : </b></label></td>
				<td><input type="text" class="textbox" placeholder="Enter Your Department" required="required" name="dept" id="e_name"  size="30"/></td>
			</tr>
            <tr>
				<td><label for="pass"><b>Designation : </b></label></td>
				<td><input type="text" class="textbox" name="desig" placeholder="Enter Your Designation" required="required" id="e_name"  size="30"/></td>
			</tr>
          
            <tr>
				<td><label for="user"><b> User ID: &nbsp;</b></label></td>
				<td><input type="text" class="textbox" autofocus name="u_id" id="e_id"  readonly required="required" value="<?php echo $sm_id ?>" size="30"/></td>
                <td><img src="admin/images/right.png" align="right"></td>
			</tr>
			<tr>
				<td><label for="pass"><b>Password : </b></label></td>
				<td><input type="password" class="textbox" name="password"  placeholder="Enter Password" required="required" id="pass" size="30"/></td>
			</tr>
			<tr>
				<td><label for="pass"><b>Confirm Password :  </b></label></td>
				<td><input type="password" class="textbox" placeholder="Enter Password Again" required="required" name="cpassword" id="pass" size="30"/></td>
			</tr>
            <tr>
				<td><label for="pass"><b>Email:  </b></label></td>
				<td><input type="text" class="textbox" placeholder="Enter Your Email" required="required" name="email" id="pass" size="30"/></td>
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
				<td><label for="pass"><b>Photo:  </b></label></td>
				<td><input type="file" class="textbox" required="required" name="file" id="pass" /></td>
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