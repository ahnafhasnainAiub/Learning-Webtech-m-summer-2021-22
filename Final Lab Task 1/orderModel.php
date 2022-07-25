<?php 
    require_once "db.php";

    function orderproduct($p_name, $p_quantity, $p_price, $total){
        $conn = getConnection();

        $sql = "insert into orderlist (p_name,p_quantity,p_price,total) values ('{$p_name}','{$p_quantity}','{$p_price}','{$total}')";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }

  
?>