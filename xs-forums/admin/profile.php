<?php
session_start();
include('database.php');
$id = $_SESSION['adminid'];
?>
<script>

function getState(val) {
	$.ajax({
		type: "POST",
		url: "districtonchange.php",
		data:'state='+val,
		beforeSend: function() {
			$("#inputCity").addClass("loader");
		},
		success: function(data){
			$("#inputCity").html(data);
			$("#inputCity").removeClass("loader");
		}
	})
}

</script>
<script>
$('document').ready(function(){
	
	$('#inputfirstname').change(function(){
		
		var name = $('#inputfirstname').val();
	$.ajax({
		type: "POST",
		url: "names.php",
		data:{name:name},
		beforeSend: function() {
			$("#inputCity").addClass("loader");
		},
		success: function(data){
			$("#name").html(data);
			$("#inputCity").removeClass("loader");
		}
	})
	});
	$('#inputsecondname').change(function(){
		
		var name = $('#inputsecondname').val();
	$.ajax({
		type: "POST",
		url: "names.php",
		data:{name:name},
		beforeSend: function() {
			$("#inputCity").addClass("loader");
		},
		success: function(data){
			$("#name").html(data);
			$("#inputCity").removeClass("loader");
		}
	})
	});
	
	$('#inputphone').change(function(){
		
		var phone = $('#inputphone').val();
	$.ajax({
		type: "POST",
		url: "phonenumber1.php",
		data:{phone:phone},
		beforeSend: function() {
			$("#inputCity").addClass("loader");
		},
		success: function(data){
			$("#phone").html(data);
			$("#inputCity").removeClass("loader");
		}
	})
	});
	
	$('#inputalterphone').change(function(){
		
		var phone = $('#inputalterphone').val();
	$.ajax({
		type: "POST",
		url: "phonenumber2.php",
		data:{phone:phone},
		success: function(data){
			$("#phone").html(data);
		}
	})
	});
	$('#inputZip').change(function(){
		
		var phone = $('#inputZip').val();
	$.ajax({
		type: "POST",
		url: "zipcodevalidation.php",
		data:{phone:phone},
		success: function(data){
			$("#zip").html(data);
		}
	})
	});
	
});
</script>

<script>
$('document').ready(function(){
	
	$('#edit').click(function(){
		
		var state = $('#hai').val();
		var city = $('#h').val();
		//alert(city);
	$.ajax({
		type: "POST",
		url: "district.php",
		data:{state:state,city:city},
		beforeSend: function() {
			$("#inputCity").addClass("loader");
		},
		success: function(data){
			$("#inputCity").html(data);
			
		}
	})
		
		
		$('.form-control').prop('disabled', false);
		$('#inputPassword4').prop('disabled',true);
		$('#submit').prop('disabled', false);
		$('#edit').prop('disabled', true);
	});
	$('#submit').click(function(){
		var email = $('#inputEmail4').val();
		var firstname = $('#inputfirstname').val();
		var secondname = $('#inputsecondname').val();
		var address1 = $('#inputAddress').val();
		var address2 = $('#inputAddress2').val();
		var phone = $('#inputphone').val();
		var alternateno = $('#inputalterphone').val();
		var city = $('#inputCity').val();
		var state = $('#inputState').val();
		$('#hai').val(state);
		var zipcode = $('#inputZip').val();
		$.ajax({
			type:"POST",
			url: "updateprofile.php",
			data:{email:email ,firstname:firstname, secondname:secondname, address1:address1, address2:address2,  phone:phone, alternateno:alternateno, city:city, state:state, zipcode:zipcode },
			success: function(result)
			{	
				$('#successspan').html(result);
				
			}
			
		})
		$('#edit').prop('disabled', false);
		$('.form-control').prop('disabled', true);
		$('#submit').prop('disabled', true);
		
	});
});
</script>

<h3 style=' color:red; margin-left:7%;' >Profile Settings </h3>
<form style='width:80%;margin:30px 1px 0px 75px; color:#8a8383;'id='formload' class='align-items-center'>
<div class="form-row">
    <div class="form-group col-md-10">
      <span id='successspan' style='float:left; padding-top:10px; color:green; font-size:15px;'></span>
    </div>
    <div class="form-group col-md-2" style='float:right;'>
      <button style="font-size:16px;"  type="button" class="btn btn-outline-success" id='edit'>Edit</button>
		<button style="font-size:16px;" type="button" class="btn btn-outline-danger" id='submit' disabled >Save</button>
    </div>
  </div>
<!--<div style='margin:20px 0px 0px 710px;'>
<span id='successspan'></span>
		<button style="font-size:16px;"  type="button" class="btn btn-outline-success" id='edit'>Edit</button>
		<button style="font-size:16px;" type="button" class="btn btn-outline-danger" id='submit' disabled >Save</button>

</div>-->
<?php

$sql = "select * from admin_details where regid = '$id'";
$query = mysqli_query($con,$sql);
while($res = mysqli_fetch_array($query))
{
	
?>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" value='<?php echo $res['email']; ?>' disabled required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" value='<?php echo $res['password']; ?>' disabled required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control"  onBlur='name()'id="inputfirstname" value='<?php echo $res['firstname']; ?>' disabled required>
    </div>
	
    <div class="form-group col-md-6">
      <label for="inputPassword4">Second Name</label>
      <input type="text" class="form-control" id="inputsecondname" value='<?php echo $res['secondname']; ?>' disabled required>
    </div>
  </div>
  <span id='name'></span>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" value='<?php echo $res['address1']; ?>' placeholder="1234 Main St" disabled required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" value='<?php echo $res['address2']; ?>' placeholder="Apartment, studio, or floor" disabled required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mobile No</label>
      <input type="number_format" class="form-control phone" id="inputphone" value='<?php echo $res['phone']; ?>' disabled required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Alternate no</label>
      <input type="number_format" class="form-control phone" id="inputalterphone"  value='<?php echo $res['alternateno']; ?>' disabled required>
    </div>
  </div>
  
  <span id='phone' style="font-size:14px;"></span>
  
  
  
  <div class="form-row">
   <div class="form-group col-md-5">
      <label for="inputState">State</label>
	  	  <?php
		  $a = $res['state'];
$sql2 = "select * from tbl_state where stateid='$a'";
$query2 = mysqli_query($con,$sql2);
$res2 = mysqli_fetch_array($query2)
?>
      <select id="inputState" class="form-control" onChange='getState(this.value);' disabled required>
	  <option id='hai' value="<?php echo $res2['stateid']; ?>" selected disabled>
	  <?php echo $res2["name"]; ?>
	  </option>
	  <?php
$sql1 = "select * from tbl_state ";
$query1 = mysqli_query($con,$sql1);
while($res1 = mysqli_fetch_array($query1))
{
?>
<option  value="<?php echo $res1["stateid"]; ?>"><?php echo $res1["name"]; ?></option>
<?php
}
?>
</select>


    </div>
    <div class="form-group col-md-5">
      <label for="inputCity">District</label>
	   <?php
		  $b = $res['city'];
$sql3 = "select * from tbl_dist where distid='$b'";
$query3 = mysqli_query($con,$sql3);
$res3 = mysqli_fetch_array($query3)
?>
      <select id="inputCity"  class="form-control" disabled  required='true'>
	  <option  selected disabled id='h' value="<?php echo $res3["distid"]; ?>" ><?php echo $res3["name"]; ?> </option>
      </select>
    </div>
   
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" value='<?php echo $res['zipcode']; ?>' disabled required>
	    <span id=zip style="font-size:14px;"></span>
    </div>
  </div>
<?php } ?>
</form>

