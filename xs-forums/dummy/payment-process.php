<?php
    
 $data = [ 
         'user_id' => '1',
         'payment_id' => $_POST['razorpay_payment_id'],
         'amount' => $_POST['totalAmount'],
         'product_id' => $_POST['product_id'],
         'regid' => $_POST['regid'],
        ];

        $sql1 ="INSERT into tbl_payment(folderid,regid,amount) values('$data['product_id']','$data['regid']','$data['amount']')";
        if($query1=mysqli_query($con,$sql1))
        {
                $arr = array('msg' => 'Payment successfully credited', 'status' => true);  
        }
        else
        {
                $arr = array('msg' => 'Payment Failed Due Some errorsr', 'status' => true);  
        }
        // you can write your database insertation code here
        // after successfully insert transaction in database, pass the response accordingly
        echo json_encode($arr);
?>

