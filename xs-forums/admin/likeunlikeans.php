<?php
session_start();
include ("database.php");

$userid = $_SESSION['adminid'];
$postid = $_POST['postid1'];
$type = $_POST['type1'];

// Check entry within table
$query = "SELECT COUNT(*) AS cntpost1 FROM like_unlike_ans WHERE postid=".$postid." and userid=".$userid;
$result = mysqli_query($con,$query);
$fetchdata = mysqli_fetch_array($result);
$count = $fetchdata['cntpost1'];


if($count == 0){
    $insertquery = "INSERT INTO like_unlike_ans (userid,postid,type) values(".$userid.",".$postid.",".$type.")";
    mysqli_query($con,$insertquery);
}else {
    $updatequery = "UPDATE like_unlike_ans SET type=" . $type . " where userid=" . $userid . " and postid=" . $postid;
    mysqli_query($con,$updatequery);
}


// count numbers of like and unlike in post
$query = "SELECT COUNT(*) AS cntLike1 FROM like_unlike_ans WHERE type=1 and postid=".$postid;
$result = mysqli_query($con,$query);
$fetchlikes1 = mysqli_fetch_array($result);
$totalLikes1 = $fetchlikes1['cntLike1'];

$query = "SELECT COUNT(*) AS cntUnlike1 FROM like_unlike_ans WHERE type=0 and postid=".$postid;
$result = mysqli_query($con,$query);
$fetchunlikes1 = mysqli_fetch_array($result);
$totalUnlikes1 = $fetchunlikes1['cntUnlike1'];

// initalizing array
$return_arr1 = array("likes2"=>$totalLikes1,"unlikes2"=>$totalUnlikes1);
echo json_encode($return_arr1);
?>