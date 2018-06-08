
  <div class="post"  >

				
			<?php include ('includeOthers/addPost.php');?>
			<?php echo "<br><center><h3> $msg </center></h3>";?>
<fieldset>
		<legend align="center" style="font-size:22px; color:#000000">New Post</legend>
		<form name="first" method="post" action="" enctype="multipart/form-data" >
			<table width="100%" align="center" cellpadding="3" class='t1' cellspacing="3">
				<tr>
					<th>Your ID</th>
					<th><input type="text" id="author" name="id" readonly  value="<?php echo $id; ?>"class="required input_field" size="30" /><img src="images/right.png" align="right"></th>
				</tr>
				
				<tr>
					<th>Your Name</th>
					<th>
						<input type="text" id="author" name="name" readonly   value="<?php echo $name; ?>"class="required input_field" size="30" /><img src="images/right.png" align="right">
					 </th>
				</tr>
				<tr>
					<th>Title</th>
					<th>
						<input type="text" id="author" name="title" placeholder="Enter Post Title" required="required" class="required input_field" size="30"/>
					</th>
				</tr>
				<tr>
					<th>Category</th>
					<th>
					<select name="cat"  class="required input_field" id="email" >
                  	<?php 
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
					<th>Content</th>
					<th>
						<textarea id="text" name="postcontent" cols="30" rows="6" placeholder="Enter Post Content" required="required" class="required"></textarea>
					</th>
				</tr>
             			<tr>
				<th>Photo 1</th>
				<th><input type="file"  name="file"   size="70" id="pass" /></th>
			</tr>
				<tr>
				<th>Photo 2</th>
				<th><input type="file"  name="file2"   size="70" id="pass" /></th>
			</tr><tr>
				<th>Photo 3</th>
				<th><input type="file"  name="file3"   size="70" id="pass" /></th>
			</tr>
			<tr>
				<th>Photo 4</th>
				<th><input type="file"  name="file4"   size="70" id="pass" /></th>
			</tr>
			<tr>
				<th>Photo 5</th>
				<th><input type="file"  name="file5"   size="70" id="pass" /></th>
			</tr>
			

				
                <tr>
					<td width="100%" >
						<input type="submit" name="btnPost" value="Submit" class="more" style="background:#006600; color:#FFFFFF" size="20" />
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
    