<?php
if(isset($_POST['phone']))
{
	$phone = $_POST['phone'];
	if(preg_match("/^[6-9]{1}[0-9]{9}$/", $phone)) 
	{
		
	}
	else
	{
		echo "error : <span style='color:red'>  Invalid Phone Number. </span>";
		echo "<script>$('#pid').val('');</script>";
		echo "<script>$('#pid').focus();</script>";
	}
	}


?>