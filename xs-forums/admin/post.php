<style>
.list-group{
    max-height: 300px;
    margin-bottom: 10px;
    overflow:scroll;
    -webkit-overflow-scrolling: touch;
}
</style>




<script>
$(document).ready(function(){

    // like and unlike click
    $(".like, .unlike").click(function(){
        var id = this.id;	// Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid

        // Finding click type
        var type = 0;
        if(text == "like"){
            type = 1;
        }else{
            type = 0;
        }

        // AJAX Request
        $.ajax({
            url: 'likeunlike.php',
            type: 'post',
            data: {postid:postid,type:type},
            dataType: 'json',
            success: function(data){
                var likes = data['likes'];
                var unlikes = data['unlikes'];

                $("#likes_"+postid).text(likes);        // setting likes
                $("#unlikes_"+postid).text(unlikes);    // setting unlikes

                if(type == 1){
                    $("#like_"+postid).css("color","#ffa449");
                    $("#unlike_"+postid).css("color","lightseagreen");
                }

                if(type == 0){
                    $("#unlike_"+postid).css("color","#ffa449");
                    $("#like_"+postid).css("color","lightseagreen");
                }


            }
            
        });

    });
	
	
	
	 $(".check, .ucheck").click(function(){
        var id = this.id;	// Getting Button id
        var split_id = id.split("_");
alert(id);
        var text = split_id[0];
        var postid = split_id[1];  // postid

        // Finding click type
        var type = 0;
        if(text == "check"){
            type = 0;
        }else{
            type = 1;
        }

        // AJAX Request
        $.ajax({
            url: 'checkuncheck.php',
            type: 'post',
            data: {postid:postid,type:type},
            dataType: 'json',
            success: function(data){

                if(type == 0){
                    $("#check_"+postid).attr("value",data);
					
                }

                if(type == 0){
                    $("#uncheck_"+postid).attr("value",data);
					$("#uncheck_"+postid).css("color","green");
                   
                }


            }
            
        });

    });
	
	
	


});
</script>
<script>
$(document).ready(function(){

    // like and unlike click
    $(".like1, .unlike1").click(function(){
        var id1 = this.id;   // Getting Button id
        var split_id1 = id1.split("_");

        var text1 = split_id1[0];
        var postid1 = split_id1[1];  // postid

        // Finding click type
        var type1 = 0;
		
        if(text1 == "like1"){
            type1 = 1;
        }else{
            type1 = 0;
        }

        // AJAX Request
        $.ajax({
            url: 'likeunlikeans.php',
            type: 'post',
            data: {postid1:postid1,type1:type1},
            dataType: 'json',
            success: function(data1){
                var likes1 = data1['likes2'];
                var unlikes1 = data1['unlikes2'];

                $("#likes1_"+postid1).text(likes1);        // setting likes
                $("#unlikes1_"+postid1).text(unlikes1);    // setting unlikes
				
                if(type1 == 1){
					
                    $("#like1_"+postid1).css("color","#ffa449");
                    $("#unlike1_"+postid1).css("color","lightseagreen");
                }

                else if(type1 == 0){
                    $("#unlike1_"+postid1).css("color","#ffa449");
                    $("#like1_"+postid1).css("color","lightseagreen");
                }
				
            }          
        });
    });
	
	
	$('#replay').click(function(){
		$('#rplybox').prop('disabled',false);
		
	});
});
</script>


<div class='bg-dark'>
<?php
include('database.php');
$sql = "select * from tbl_post where status = '1' order by postid DESC";
$a = mysqli_query($con,$sql);
 $type = -1;
  $type1 = -1;
if(mysqli_num_rows($a) > 0)
{
	?>
	
	<?php
	while($res = mysqli_fetch_array($a))
	{
		$pid = $res['postid'];	
		$badWords = array("ban","strike against amaljyothi","strike","html");
		$string = $res['about'];
		$matches = array();
		$matchFound = preg_match_all( "/\b(" . implode($badWords,"|") . ")\b/i", 
                $string, 
                $matches
              );
		if ($matchFound)
		{
			continue;
		}
		$s = "update tbl_post set viwed = '1' where postid = '$pid' ";
		mysqli_query($con,$s);
		
		// Count post total likes and unlikes
    $like_query = "SELECT COUNT(*) AS cntLikes FROM like_unlike WHERE type=1 and postid=".$pid;
    $like_result = mysqli_query($con,$like_query);
    $like_row = mysqli_fetch_array($like_result);
    $total_likes = $like_row['cntLikes'];

    $unlike_query = "SELECT COUNT(*) AS cntUnlikes FROM like_unlike WHERE type=0 and postid=".$pid;
    $unlike_result = mysqli_query($con,$unlike_query);
    $unlike_row = mysqli_fetch_array($unlike_result);
    $total_unlikes = $unlike_row['cntUnlikes'];	
	?>
	<div class="list-group" style="padding:8px 8px 8px 8px;" border=1>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">@<?php echo $res['regid']?></h5>
      <small><?php echo $res['date']?></small>
    </div>
    <p class="mb-1"><?php echo $res['about']?></p>
	<div class="post-action">
      <input type="button" value="Like" id="like_<?php echo $pid; ?>" class="like" style="<?php if($type == 1){ echo "color: #ffa449;"; } ?>" />&nbsp;(<span id="likes_<?php echo $pid; ?>"><?php echo $total_likes; ?></span>)&nbsp;

      <input type="button" value="Unlike" id="unlike_<?php echo $pid; ?>" class="unlike" style="<?php if($type == 0){ echo "color: #ffa449;"; } ?>" />&nbsp;(<span id="unlikes_<?php echo $pid; ?>"><?php echo $total_unlikes; ?></span>)

     </div>
    <small>Answer</small>
	<div class="form-row">
	<textarea class="form-control" id='rplybox' aria-label="With textarea" disabled ></textarea>
	<button type="button" id='replay' class="btn btn-success" style="margin-top:3px;">Replay</button>
	<button class='btn btn-primary'type="button" style="margin-top:3px; margin-left:3px;">Submit</button>
	<button type="button" class="btn btn-danger" style="margin-top:3px; margin-left:3px;">Disable</button>
	</div>
	<?php
	$postid = $res['postid'];
	$sql1 = "select * from tbl_post_ans where postid = '$postid' and status = '1' order by date DESC";
$a1= mysqli_query($con,$sql1);

if(mysqli_num_rows($a1) > 0)
{
	?>
	<small style="color:red;">Answer</small>
	<?php
	while($res1 = mysqli_fetch_array($a1))
	{
		$ansid = $res1['ansid'];			
		$like_query1 = "SELECT COUNT(*) AS cntLikes1 FROM like_unlike_ans WHERE type=1 and postid=".$ansid;
    $like_result1 = mysqli_query($con,$like_query1);
    $like_row1 = mysqli_fetch_array($like_result1);
    $total_likes1 = $like_row1['cntLikes1'];

    $unlike_query1 = "SELECT COUNT(*) AS cntUnlikes1 FROM like_unlike_ans WHERE type=0 and postid=".$ansid;
    $unlike_result1 = mysqli_query($con,$unlike_query1);
    $unlike_row1 = mysqli_fetch_array($unlike_result1);
    $total_unlikes1 = $unlike_row1['cntUnlikes1'];
	
		
		
	?>
	<div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">@<?php echo $res1['regid']?></h5>
      <small><?php echo $res1['date']?></small>
    </div>
	<?php
	if ($res1['ad_check'] == 1)
	{
		?>
    <p class="mb-1" style="color:green;"><?php echo $res1['about']?></p>
	<?php
	}
	else
	{
	?>
	<p class="mb-1"><?php echo $res1['about']?></p>
	<?php
	}
	?> 
	<div class="post-action">
      <input type="button" value="Like" id="like1_<?php echo $ansid; ?>" class="like1" style="<?php if($type1 == 1){ echo "color: #ffa449;"; } ?>" />&nbsp;(<span id="likes1_<?php echo $ansid; ?>"><?php echo $total_likes1; ?></span>)&nbsp;

      <input type="button" value="Unlike" id="unlike1_<?php echo $ansid; ?>" class="unlike1" style="<?php if($type1 == 0){ echo "color: #ffa449;"; } ?>" />&nbsp;(<span id="unlikes1_<?php echo $ansid; ?>"><?php echo $total_unlikes1; ?></span>)

     </div>
	<div class="form-row" >
	<?php
	if ($res1['ad_check'] == 1)
	{
		?>
	<button type="button" class="ucheck btn btn-success" id='uncheck_<?php echo $ansid; ?>' style="margin-top:3px;">Uncheck</button>
	<?php
	}
	else
	{
	?>
	<button type="button" class="check btn btn-success" id='check_<?php echo $ansid; ?>' style="margin-top:3px;">Check</button>
	<?php
	}
	?> 
	<button type="button" class="btn btn-danger" style="margin-top:3px; margin-left:3px;">Disable</button>
	</div>
	
	
	<?php
	}
}?>
</a>
</div>
<?php
}
	?>

	<?php
}
else
{
	?>
	
	<div class="alert alert-primary" role="alert">
  NO NEW MESSAGE IS AVAILABLE !!
</div>
	<?php
	
}


?>
<!--
<div class="list-group" style="padding:5px 5px 5px 5px;">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"></h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small>Donec id elit non mi porta.</small>
	<div>
	<textarea class="form-control" aria-label="With textarea"></textarea>
	</div>
	
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
</div>-->
</div>