	<div id="logo">
			<?php if ($menus==1){ ?>
			<div  style="float:right;padding-top:2px;">
						<?php   include ('includeOthers/login.php') ;?>
                       <form name="srch" action="" method="post">
					    
                        <h3>User ID &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="text" class="textbox" placeholder="Put Your ID Here" required="required" autofocus name="user" id="user" size="20" /> </h3><br />
   					 	<h3>Password&nbsp;: <input type="password" class="textbox" name="pass" id="pass" size="20" placeholder="Give Password" required="required"/></h3>
     					<br /><input type="submit"  name="login" value="Login" style="background:green; color:#FFFFFF" size="20" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="verifyUser.php" style="font-size:16px;">Join The Blog?</a> 
						<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="verifyPassword.php" style="font-size:12px;">Forget Your Password?</a>
                        </form>
						</div>
                    <?php } ?>	
					<h2><pre><img src="admin/images/logo.png" height="100" width="110"/>DUET Online Blog</a></pre></h2>
	</div>
	<div id="menu">
		<ul id="main" style="padding-left:325px;float:right">
			<li><a href="index.php" >Home</a></li>
			<li><?php echo "<a href='#' onclick='login()'>New Post</a>"; ?></li>
			<li><?php echo "<a href='#' onclick='login()'>Your Profile</a>"; ?></li>

			 <li><a href="rulesRegulation.php">Notice Board</a></li>
            <li><a href="about.php" >About</a></li>
             <li><a href="#" >Contact</a></li>
		</ul>
		<ul id="feed">
			
		</ul>
	</div>



















































































