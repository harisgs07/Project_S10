<?php
if (!empty($_POST['name']))
{
	$password = $_POST['name'];
	$lcase = preg_match('@[a-z]@', $password);
	$ucase = preg_match('@[A-Z]@', $password);
	$number = preg_match('@[0-9]@', $password);
	$schar = preg_match('@[^\w]@', $password);
	if ($number || $schar)
	{
		echo"<span style='color:red; font-size:13px;'> Name Should Not contain any special char .</span>";
		echo "<script>$('#inputfirstname').val('');</script>";
	}
	else
	{	
	}
}
?>