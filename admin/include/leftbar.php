        <ul>
 
			<li>
					<h2>Recent Posts</h2>
					<ul>
                               <?php

$result = mysql_query("select * from posts ORDER BY post_id DESC LIMIT 7") or die(mysql_error());
?>
<?php 
 while($row = mysql_fetch_array($result))
 {
 ?> 

 
						<li><?php  echo "<a href='fullPostRead.php?id=$row[0]'>$row[1]</a>"; ?> 
                        </a></li>
					    <?php } ?>
                    </ul>
				</li>
                
	
				<li>
					<h2>Recent Comments</h2>
					<ul>
						     <?php

$result = mysql_query("select * from comments ORDER BY comment DESC LIMIT 7") or die(mysql_error());
 while($row = mysql_fetch_array($result))
 {
 ?> 

<li><?php  echo "<a href='fullPostRead.php?id=$row[1]'>$row[3]</a>"; ?> 
                        </li>
  
<?php } ?>
						
				
				
				</ul>
				
				</li>
								<li>
					<h2>Online Students</h2>
					<ul>
						     <?php
							 

$result = mysql_query("select * from stu_details WHERE online='1'") or die(mysql_error());
 while($row = mysql_fetch_array($result))
 {

 ?> 
<li><?php echo "<b>$row[1] </b><br/>($row[2]-$row[3] Year/$row[4] Semester)"; ?> 
                       </li>
<?php  } ?>
						
					</ul>
				</li>
				
				
											<li>
					<h2>Online Employees</h2>
					<ul>
						     <?php

$result = mysql_query("select * from emp_details WHERE online='1'") or die(mysql_error());
 while($row = mysql_fetch_array($result))
 {
 ?> 
<li><?php  echo "<b>$row[1] </b><br/>($row[3], $row[2])"; ?> </li>
<?php } ?>
						
					</ul>
				</li>
			</ul>