<?php include ('includeOthers/catagoryInsert.php');?> 
   <div class="post">


		<div id="formlogin">
		<label><?php echo "<br /><center><h3> $msg </center></h3>";?></label>
       <fieldset>
			 <legend align="center" style="font-size:22px; color:#000000">Adding Category Form</h3></b>&nbsp;&nbsp;</legend>
		 
	<div id="nform">
	<form id="login" name="login" method="post" >
		<table border="0" cellpadding="5" cellspacing="12" class='t1' align="center">
			<tr>
				<th>Catagory No</th>
				<th><input type="text" class="textbox"  size="10" autofocus name="e_id" id="e_id"  readonly disabled  value="<?php echo $cat_noo;?>" /><img src="images/right.png" align="right"></th>
			</tr>
			
			<tr>
				<th>Catagory Name</th>
				<th><input type="text" class="textbox" name="cat_name" id="e_name"  placeholder="Enter Catagory Name" required="required" size="30" placeholder="Enter Catagory Name" required="required" /></th>
			</tr>
			<tr>
				<td colspan="2">
					<hr />
					<br />
					<center>
					<input type="submit" class="btnLogin" name="btnSave" value="Submit" /></center>
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
    
 
 
		