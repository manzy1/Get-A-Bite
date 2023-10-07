<?php
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Orders = $_POST['Orders'];


//Database connection
include 'dbconnect.php';

    $stmt = $conn->prepare("insert into orders(Name, Address, Orders) values(?, ?, ?)");
    $stmt->bind_param("sss", $Name, $Address, $Orders);
    $execval = $stmt->execute();
    echo"<h2>Order placed Successfully, Thank You!...</h2>";
    $stmt->close();
    $conn->close();
    echo"You will be redirected back in 5 seconds..";
    

    header("refresh: 5;url=http://localhost/Get-A-Bite/order.html");
    exit;

?>
