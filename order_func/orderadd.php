<?php
require_once 'pdo.php';
session_start();

if (isset($_POST['customerID'])) {
    // $stmt = $pdo->prepare("INSERT INTO `orders` (bill_id,order_id,customer_id) VALUES(:bill_id,:order_id,:customer_id)");
    // $stmt->execute(array(
    //     ':bill_id' => $_POST['bill_id'],
    //     ':order_id' => $_POST['order_id'], 
    //     ':customer_id' => $_POST['customer_id']
    // ));
    // $_SESSION['success'] = 'Record Added';
    // header("Location: showorder.php");
    return;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Orders</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="images/order-icon-png-22.jpg" alt="IMG">
            </div>

            <form method="post" action="order.php" class="contact1-form validate-form">
                <span class="contact1-form-title">
                   ORDERS
                </span>
                
                <div class="wrap-input1 validate-input" data-validate="Required">
                    <input class="input1" type="text" name="customerID" placeholder="Customer ID">
                    <span class="shadow-input1"></span>
                    
                        
                </div>
                <div class="container-contact1-form-btn">
                    
                    <button class="contact1-form-btn">       
                        <span>
                            ADD ORDER
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </span>
                    </button>    
                </div>
            </form>
           
        </div>
    </div>
    <script src="main.js"></script>
</body>