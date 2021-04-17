<?php 
			   if ($result['valid']=='' || $result['valid']== 1 )
			   {
				   ?>
					<a href="adminhome.php?userdisable=<?php echo htmlentities($result['acid']);?>" onclick="return confirm('Do you really want to Disable')"  ><span id=ll style='color:red;' disabled>Enabled </span></a>
			  <?php }
			   else
			   {
				   ?>
				   <a href="adminhome.php?userenable=<?php echo htmlentities($result['acid']);?>" onclick="return confirm('Do you really want to Enable')"  ><span style='color:red;' disabled> Disabled</span></a>
			   
			 </td>
			 <?php
			   }
			   ?>
			   
			    
			   
			//company
			 <?php 
			   if ($result['valid']=='' || $result['valid']== 1 )
			   {
				   ?>
					<a href="adminhome.php?compdisable=<?php echo htmlentities($result['compid']);?>" onclick="return confirm('Do you really want to Disable')"  ><span id=ll style='color:red;' disabled>Enabled </span></a>
			  <?php }
			   else
			   {
				   ?>
				   <a href="adminhome.php?compenable=<?php echo htmlentities($result['compid']);?>" onclick="return confirm('Do you really want to Enable')"  ><span style='color:red;' disabled> Disabled</span></a>
			   
			 </td>
			 <?php
			   }
			   ?>
			   
			   //group first
			    
				<?php
				if ($r1['stastus']=='valid' )
			   {
				   ?>
					<a href="adminhome.php?groupdisable=<?php echo htmlentities($result['grpid']);?>" onclick="return confirm('Do you really want to Disable')"  ><span id=ll style='color:red;' disabled>Enabled </span></a>
			  <?php }
			   else
			   {
				   ?>
				   <a href="adminhome.php?groupenable=<?php echo htmlentities($result['grpid']);?>" onclick="return confirm('Do you really want to Enable')"  ><span style='color:red;' disabled> Disabled</span></a>
			   
			 
			 <?php
			   }
			   ?></td>
			   
			   
			   //contact updaet
			   <?php 
			   if ($result['status']=='valid' )
			   {
				   ?>
					<a href="adminhome.php?contactdisable=<?php echo htmlentities($result['conid']);?>" onclick="return confirm('Do you really want to Disable')"  ><span id=ll style='color:red;' disabled>Disable </span></a>
			  <?php }
			   else
			   {
				   ?>
				   <a href="adminhome.php?contactenable=<?php echo htmlentities($result['conid']);?>" onclick="return confirm('Do you really want to Enable')"  ><span style='color:red;' disabled> Enable</span></a>
			   
			 </td>
			 <?php
			   }
			   ?>