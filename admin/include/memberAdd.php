<?php include ('includeOthers/memberInsert.php');?> 
    
 
  <div class="post">
				<h1 class="title"><a href="#"></a></h1>
				
			

		<div id="formlogin">
    <label><?php echo "<br /><center><h3> $msg </center></h3>";?></label>
	<fieldset>
			   <legend align="center" style="font-size:22px; color:#000000">Add New Member</h3></b>&nbsp;&nbsp;</legend>
	<form method="POST" action="">
		<table border="0" cellpadding="5" cellspacing="12" class='t1' align="center">
			<tr>
				<th>User ID</th>
				<th><input type="text" placeholder="Enter User ID" required="required" class="textbox" autofocus name="m_id" id="user" /></th>
			</tr>
			<tr>
				<th>Type</th>
				<th><select name="m_type" class="required input_field" id="email">
                  	<option value="1">Employee</option>
                    <option value="2">Student</option>
                   </select></th>
			</tr>
			<tr>
				<td colspan="2">
					<hr />
					<br />
					<center>
					<input type="submit" class="btnLogin" name="btnsave" value="Submit" />
				
					</center>
					<br /><br />
					<center></center>
				</td>
			</tr>
		</table>
	</form>
	</fieldset>
	</div> <!--#denied-->
		</fieldset>
<br /><br />
</center>
					
			
			</div>