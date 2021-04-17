<?php
include('db.php');
$id=mysqli_real_escape_string($con,$_GET['id']);
mysqli_query($con,"update user set verification_status='1' where verification_id='$id'");
echo "<script>Your account is verified....<br></br>Please login to Continue </script>";\
header('location:index.php');
?>

