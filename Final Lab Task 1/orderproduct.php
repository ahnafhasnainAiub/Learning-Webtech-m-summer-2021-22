<?php 
	session_start();
    
	require_once "orderModel.php";

	$p_name = $_POST['p_name'];
	$p_quantity = $_POST['p_quantity'];
    $p_price= $_POST['p_price'];
    $total = $p_quantity * $p_price;
 
    
    
	if($p_name == null || $p_quantity == null ||  $p_price== null){
		echo "Null items";
	}
    else{   
		$status = orderproduct($p_name, $p_quantity, $p_price, $total);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			header('location: showorderlist.php');
		}else{
			echo "invalid user";
		}
		

        }
     
	
?>