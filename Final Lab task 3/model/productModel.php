<?php
    require_once "DB.php";

  
    function OrderInsert($p_name, $p_quantity, $p_price){
        $conn = getConnection();
		$sql = "INSERT INTO  `orderlist`(`p_name`, `p_quantity`, `p_price`) VALUES ('{$p_name}','{$p_quantity}','{$p_price}')";
		mysqli_query($conn, $sql);

    }


?>