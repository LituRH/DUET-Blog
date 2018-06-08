		
		
			<ul>


                
				<li>
					<h2>Categories</h2>
					<ul>
 <?php

$result = mysql_query("select * from post_catagory ") or die(mysql_error());
 while($row = mysql_fetch_array($result))
 
 {$mm=$row[1];
 ?> 
 <li><?php echo "<a href='indexSelf.php?catid=$row[0]'>$mm</a>"; ?></li>

<?php } ?>
                    
						
					</ul>
				</li>
				
	
								<li>
					<h2>Latest Members</h2>
					<ul>
						     <?php

$result = mysql_query("select * from stu_details LIMIT 5") or die(mysql_error());
 while($row = mysql_fetch_array($result))
 {
 ?> 
<li><?php  echo $row[1]; ?> 
                        </a></li>
<?php } ?>
						
						
						 <?php

$result = mysql_query("select * from emp_details LIMIT 5") or die(mysql_error());
 while($row = mysql_fetch_array($result))
 {
 ?> 
<li><?php  echo $row[1]; ?> 
                        </a></li>
<?php } ?>
					</ul>
				</li>

				
				
			</ul>