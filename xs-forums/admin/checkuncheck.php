<?php

include ("database.php");

$userid = $_SESSION['adminid'];
$postid = $_POST['postid'];
$type = $_POST['type'];


if($type == 0){
    $insertquery = "update tbl_post_ans set ad_check = '1' where ansid = '$postid' ";
    mysqli_query($con,$insertquery);
	echo "uncheck";
}else {
    $updatequery = "update tbl_post_ans set ad_check = '0' where ansid = '$postid'";
    mysqli_query($con,$updatequery);
	echo "check";
}
?>