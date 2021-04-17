<?php
session_start();
session_destroy(); // destroy session
echo"<script>alert('sure! You want to exit?')</script>";
echo"<script>window.location.href='index.php'</script>";
?>