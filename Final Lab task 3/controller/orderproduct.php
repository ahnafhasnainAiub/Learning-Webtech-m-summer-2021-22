<?php 
	session_start();
    require_once "../model/productModel.php";

	//$p_name = $_POST['p_name'];
	//$p_quantity = $_POST['p_quantity'];
    //$p_price= $_POST['p_price'];
    //$total = $p_quantity * $p_price;
    
    
	if($p_name == null || $p_quantity == null ||  $p_price== null){
		echo "Null items";
	}
    
    else {
        OrderInsert($p_name, $p_quantity, $p_price);
        header('location: ../view/orderproduct.html');
        echo("Order Taken");
    }
    
     
	
?>

<html>
<head>
	<title>Ordering Product</title>
</head>
<body>
	<table>
		<fieldset>
		<legend><h1>Order Now</h1></legend>
        <form action="" onsubmit="return validList()" method="post"> 
        
         
        Name <br> <input type="text" name="p_name" id="p_name" value=""><br>
        Quantity <br><input type="number" name="p_quantity" id="p_quantity"  value=""><br>
        Price <br><input type="number" name="p_price" id="p_price" value=""><br>
		<p id="show" > </p>
        <br>
		<input type="submit" name="submit" value="Confirm Order">
	</form>
    </fieldset>
    </table>
    <script> 

      function validList(){


        let name = document.getElementById('p_name').value;
        let quantity = document.getElementById('p_quantity').value;
        let price = document.getElementById('p_price').value;
        
       if(name== "" || quantity=="" || price==""){
        document.getElementById("show").innerHTML = "Choose product, Quantity and Price";
        return false;
    }
    else{
        document.getElementById("show").innerHTML = "Submitted";
        return true;
        
    }
 }

   </script>
   

</body>
</html>