<?php include ('includeOthers/dataRetriveAdmin.php');?>
    
  <div class="post">
				<h1 class="title"><a href="#"></a></h1>
				
			
<fieldset>
  <legend align="center" style="font-size:22px; color:#000000">Profile Information</h3></b></legend>

	<form id="login" name="login" method="post"  >

		<table border="0" class='t1' cellpadding="5" cellspacing="12" align="center">
			<tr>
				<th>Employee ID</th><th><?php echo $id; ?></th>

			</tr>
			
			<tr>
				<th>Name</th><th><?php echo $name; ?></th>

			</tr>
			<?php if($id==$user_id)
			{?>
            <tr>
				<th>User ID</th><th><?php echo $u_id; ?></th>

			</tr>
			<tr>
				<th>Password</th><th><?php echo $pass; ?></th>
			</tr>
			<?php 
			}?>

				<tr>
				<th>Email</th><th><?php echo $email; ?></th>

			</tr>
			  <tr>
				<th>Address</th><th><?php echo $address; ?></th>

			</tr>
			<?php if($id!=$user_id)
			{?>
			<tr>
				<th>His Blogsite</th><th><?php echo "<a href='indexSelf.php?req=$id'>Click Here</a>"; ?></th>
			</tr>
			<?php 
			}?>
			
		</table></h3></pre>
	</form>

<br /><br />
</center>
					
			

    
 
 </div>
