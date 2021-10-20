<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="customer.css">
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
    <h1><span>T</span>ransaction <span>H</span>istory</h1>
<div class="box1">

<table class="styled-table">
    <thead>
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Email</th>
            <th>Account Number</th>
            <th>Receiver's Account Number</th>
            <th>Amount</th>
        </tr>
    </thead>
    <?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection failed due to".mysqli_connect_eror());
}

// echo "connected";

$sql = "SELECT * FROM bank.transfer";

$results = mysqli_query($con, $sql);

if(mysqli_num_rows($results)>0) {

    while($row=mysqli_fetch_array($results)){
      echo "   <tbody>
        <tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>

        </tr>
       ";
        // echo $row[0]. " ".$row[1]. " ".$row[2]. " ".$row[3]. " ".$row[4]. " " ;
// echo"<br>";
    }

}

mysqli_close($con);


?>
    
        
</table>




</div>





</body>
</html>