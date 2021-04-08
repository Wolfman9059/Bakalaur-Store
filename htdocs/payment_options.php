<?php
session_start();
$db = mysqli_connect("localhost","root","root","bakalaur-store");
?>   
   <?php 
    
    $session_email = $_SESSION['cus_email'];
    $select_customer = "select * from customer where cus_email='$session_email'";
    $run_customer = mysqli_query($db,$select_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_id = $row_customer['cus_id'];
    ?>
    <div class="box">
    <h1 class="text-center">Payment Options For You</h1>  
     <p class="lead text-center"><!-- lead text-center Begin --> 
         <a href="../order.php?cus_id=<?php echo $customer_id ?>"> Offline Payment </a> 
     </p>
     <center>
        <p class="lead">
            <a href="#">
                Paypall Payment
                <img class="img-responsive" src="images/paypall_img.png" alt="img-paypall">
            </a>
        </p> 
     </center>
</div>