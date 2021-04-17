

<script>

$(document).ready(function(){
	
$('.bl').click(function(){
	var id = this.id;
	var replay = $('#replay').val();
	 $.ajax({
            url: 'enquirycomplaintresponse.php',
            type: 'post',
            data: {id:id,replay:replay},
            dataType: 'json',
            success: function(data){
				$('#replay').html('');
           $('#t').load('adminhome.php');
                }
          
        })

});
});


</script>




<?php
include('database.php');
$sql = "select * from tbl_enq_cmp where status = '1'";
$a = mysqli_query($con,$sql);
if(mysqli_num_rows($a) > 0)
{
	?>
	<div class="list-group" style="padding:8px 8px 8px 8px;" id='t' border=1>
	<?php
	while($res = mysqli_fetch_array($a))
	{
	?>
  <div class="list-group-item list-group-item-action flex-column align-items-start ">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">@<?php echo $res['regid']?></h5>
      <small><?php echo $res['date']?></small>
    </div>
    <p class="mb-1"><?php echo $res['about']?></p>
    <small>Answer</small>
	<div class="form-row" id='fm'>
	<textarea class="form-control"  id='replay'  aria-label="With textarea"></textarea>
	<input class='bl' type="button" style="margin-top:3px;" id="<?php echo $res['enqid']; ?>" value='Replay'></input>
	
	</div>	
  </div>	
	<?php
	}
	?>
	</div>
	<?php
}
else
{
	?>
	<div class="alert alert-primary" id='msg' role="alert">
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
