<script type="text/JavaScript">
<!--
function change(val)
	{
		$('#lb').html(val);
		var val1 = 'no';
		var val = val;
		$.ajax
		({
			type:"POST",
			url:"manage_pg.php",
			data : {val:val,val1:val1},	
			success:function(data){
				$('#pgedetails').html(data);
			
			}
		})
	}
  $('document').ready(function(){
	$('#submit').click(function(){
	var up = $('#pgedetails').val();
		var val1 = $('#submit').val();
		alert(val1);
		var val = $('#ddw').val();
		$.ajax
		({
			type:"POST",
			url:"manage_pg.php",
			data : {val1:val1,up:up,val:val},	
			success:function(data){
				alert(data);				
			}
		})
	
});
	});
//-->
</script>
				<div class="row " style="color:black;">
				<span id='stst'></span>
					<div class="col-md-12">
					
						<h2 class="page-title" style="color:red; margin-top:10px;">Update Policy </h2>

						<div class="row">
							<div class="col-lg-12 ">
								<div class="panel panel-default">
									<div class="panel-heading">Form fields</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" class="form-horizontal">
										
				
											<div class="form-group">
												<label class="col-sm-4 control-label">select Page</label>
												<div class="col-sm-8">
															   <select name="menu1" id='ddw' onChange="change(this.value)">
                  <option value="" selected="selected" class="form-control" >***Select One***</option>
                  <option >Terms and Conditions</option>
                  <option>Privacy Policy</option>
                  <option >About Us</option> 
                  <option >FAQs</option>
                </select>
												</div>
											</div>
											<div class="hr-dashed"></div>
											
											<div class="form-group">
												<label class="col-sm-4 control-label">selected Page</label>
					<div class="col-sm-8">
					<label class="control-label" id='lb' style="color:red;"></label>
					</div>
			
												</div>
											
								
									<div class="form-group">
												<label class="col-sm-4 control-label">Page Details </label>
												<div class="col-sm-8">
			<textarea class="form-control" rows="8" cols="54" name="wpgedetails" id="pgedetails" placeholder="Package Details" required>

										</textarea> 
												</div>
											</div>
											
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
								
												<button name="submit" value="update" id="submit" class="btn-primary btn" >Update</button>
												</div>
											</div>
									</div>
										</form>

									</div>
								</div>
							</div>
							
						</div>
					</div>
			
				
			
