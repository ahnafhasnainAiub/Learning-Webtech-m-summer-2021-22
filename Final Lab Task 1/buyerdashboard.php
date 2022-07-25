<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Dashboard</title>
</head>
<body>
    <h1 align="center">Welcome to Buyer's Dashboard</h1>
    <h2><a href="orderproduct.html">Order Product</a></h2>
    <h2><a href="showorderlist.php">Order List</a></h2>
    <h2><a href="farmerprofile.html">View Farmer's Info</a></h2>
    <h2><a href="buyerComplain.html">Complain to Admin</a></h2>
    <h2><a href="buyercomment.html">Comment on any product and Rate product</a></h2>
    <h2><a href="payment.html">Make Payment </a></h2>
    <h2><a href="deleteorder.php">Delete Order </a></h2>
    <h2><a align ="right" href="logout.php">Log Out</a></h2>
    <hr>
    
</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>