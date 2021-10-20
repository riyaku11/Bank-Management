<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="customer.css">
    <link rel="stylesheet" href="transfer.css">
</head>
<body>
<nav>
        <a href="index.html">Home</a>
        <a href="">Contact</a>
        <a href="">About</a>
    </nav>
    <div class="logo">
        <span id="logo">D F B</span>
    </div>
<h1><span>M</span>oney <span>T</span>ransfer</h1>
<div class="box2">
    <form  method="post">
        <h3>Name</h3>
        <input type="text" name="name" id="name" placeholder="Enter your Name">
        <h3>Email ID</h3>
<input type="email" name="email" id="email" placeholder="Enter your email id">
<h3>Account Number</h3>
<input type="number" name="account_no" id="account_no" placeholder= "Enter your account_no">
<h3>Reciever's Account Number</h3>
<input type="number" name="rec_account_no" id="rec_account_no" placeholder= "Enter reciever's account_no">
<h3>Amount</h3>
<input type="number" name="amount" id="amount" placeholder= "Enter amount">    
<br>
<br>
<button class="submit">Proceed to Checkout</button>
</form>
</div>


<?php
error_reporting(0);
ini_set('display errors',0);
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

// if(!$con){
//     die("connection failed due to".mysqli_connect_eror());

   
// }
// echo "connecting to the db";
$name = $_POST['name'];
$email = $_POST['email'];
$account_no = $_POST['account_no'];
$rec_account_no = $_POST['rec_account_no'];
$amount = $_POST['amount'];
$sql = "INSERT INTO `bank`. `transfer` (`name`, `email`, `account_no`, `rec_account_no`, `amount`) VALUES ('$name', '$email', '$account_no', '$rec_account_no', $amount)";
$sql1 = "UPDATE `bank`. `user` SET `balance`= $amount+ `balance` WHERE `account_no`='$rec_account_no' ";
$sql2 = "UPDATE `bank`. `user` SET `balance`= `balance`-$amount WHERE `account_no`='$account_no' ";
// echo $sql1;
$con->query($sql1);
$con->query($sql2);
if($con->query($sql)==true){
   // echo "successfully inserted";
}
else {
   // echo " ERROR :$sql <br> $con->error";
}

if($con->query($sql1)==true){
    // echo "successfully inserted";
 }
 else {
    // echo " ERROR :$sql <br> $con->error";
 }
?>



</body>
</html>