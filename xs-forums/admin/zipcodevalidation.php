<?php
if(isset($_POST['phone']))
{
	$phone = $_POST['phone'];
	if(preg_match("/^[0-9]{6}$/", $phone)) 
	{
		
	}
	else
	{
		echo "<span style='color:red'>  Invalid Zip-Code. </span>";
		echo "<script>$('.inputphone').val('');</script>";
	}
}

?>