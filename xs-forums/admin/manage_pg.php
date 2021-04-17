<?php
		  include('database.php');
		  $ch = $_POST['val1'];
		  $val = $_POST['val'];
		if($ch == 'update')
		{
			$up = $_POST['up'];
			$sql1 ="update tblpages set detail = '$up' where PageName = '$val'";
			$query1=mysqli_query($con,$sql1);
			echo"The Resourse updated sucessfully !!!!</span>";
		}
		else
		{
			
			$sql ="SELECT detail from tblpages where PageName = '$val'";
			$query=mysqli_query($con,$sql);
			if(mysqli_num_rows($query) > 0)
			{
				$res = mysqli_fetch_array($query);
				echo $res['detail'];
				
			}
		}?>