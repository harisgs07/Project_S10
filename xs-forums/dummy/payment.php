<?php
     include('database.php');
     session_start();
     $s = $_SESSION['id'];	
     //$folderid=$_GET['x'];
     $sql ="SELECT * from tbl_reg_users r, tbl_account a where r.regid='$s' and a.regid=r.regid";
     $query=mysqli_query($con,$sql);
     $r=mysqli_fetch_array($query);
     $n = $r['name'];
     $e = $r['email'];
     $m = $r['phone'];

    if(isset($_REQUEST['x']))
    {
       
        
        $folderid=$_GET['x'];
        $sql1 ="SELECT * from tbl_folder where folderid='$folderid'";
        $query1=mysqli_query($con,$sql1);
        $r1=mysqli_fetch_array($query1);
        $r11 = $r1['price'];
        //echo "<script>alert('".$prjctid."')</script>";
      
        	
    }
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$(document).ready(function(e){
    var totalAmount = '<?php echo $r11;?>';
    var product_id =  '<?php echo $folderid;?>';
    var regid = '<?php echo $s;?>'
    var options = {
    "key": "rzp_live_ILgsfZCZoFIKMb",
    "amount": <?php echo $r11 * 100 ;?>, // 2000 paise = INR 20
    "name": "XS_FORUM",
    "description": "Payment",
    //"image": "https://www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
    "prefill": {
        "name": "<?php echo $n;?>",
        "email": "<?php echo $e;?>",
        "contact": "<?php echo $m;?>"
    },
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id, regid : regid
            }, 
            success: function (msg) {
                alert('msg');
                window.location.href = "download_details.php?x='<?php echo $folderid;?>'";
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    },
    "modal": {
      "ondismiss": function () {
        if (confirm("Are you sure, you want to close the form?")) {
          window.location.href = "download_details.php?x='<?php echo $folderid;?>'";
        } else {
          txt = "You pressed Cancel!";
          console.log("Complete the Payment")
        }
      }
    },

  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script>