<?php 
	session_start();
 
	$username = $_POST['gender'];

	if($gender != null)
    {
		echo " At least one of them must be selected";
	}
    else{
			$_SESSION['status'] = true;
			header('location: home1.php');
            echo "Valid Gender";
	 }


?>