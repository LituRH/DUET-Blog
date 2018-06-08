<?php include ('includeOthers/dataRetrievePost.php');?> 
<?php include ('includeOthers/dataUpdatePost.php');?> 
    <div class="post">
<?php echo "<br><center><h3> $msg </center></h3>";?>
 <fieldset>
			<legend align="center" style="font-size:22px; color:#000000">Update Post</b>&nbsp;&nbsp;</legend>

	<form id="login" name="login" method="post" enctype="multipart/form-data" >
		<table border="0" cellpadding="5" cellspacing="12" class='t1' align="center">
			<tr>
				<th>Post ID</th>
				<th><input type="text" class="textbox" autofocus name="n_no" readonly value="<?php echo $id; ?>"  readonly/><img src="images/right.png" align="right"></th>
			</tr>
			<tr>
				<th>Posted By </th>
				<th><input type="text" class="textbox" readonly autofocus readonly  name="n_by" value="<?php echo $p_by; ?>"  readonly/><img src="images/right.png" align="right"></th>
			</tr>
			
			<tr>
				<th>Post Title</th>
				<th><input type="text" class="textbox" name="title" value="<?php echo $title; ?>" /></th>
			</tr>
			<tr>
            <th>Catagory </th>
	    	<th><select class="textbox" name="cat_no" id="pass">
             
            <?php 
			echo "<option value='$cat_no'>$cat_name</option>";
			 $result ="SELECT *FROM post_catagory ";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {			
			$cat_no=$row['cat_id'];
			$cat_name=$row['cat_name'];	
	    	echo "<option value='$cat_no'>$cat_name</option>";
			}
		
			?>
           
            </select>
		</th>
			</tr>

		
            <tr>
				<th>Contents</th>
				<th>
                <textarea cols="30" rows="6" name="texts"/><?php echo $texts; ?></textarea>
              </th>
			</tr>

			
						<tr>
				<td colspan="2">
            </select>
					<hr />
					<br />
					<center>
					<input type="submit" class="btnLogin" name="btnUpdate" value="Submit" /><br/><br/><input type="submit" class="btnLogin" name="btnCancel" value="Cancel" />
					</center>
				</td>
			</tr>
		</table>
	</form>
	 </fieldset>
<br /><br />
</center>
					
			
			
    
 
 </div>