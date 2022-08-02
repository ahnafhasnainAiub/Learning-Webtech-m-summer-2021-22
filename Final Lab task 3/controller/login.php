<?php 
	session_start();

	if(isset($_POST["submit"])){
	$name = $_POST['username'];
	$pass = $_POST['password'];


	if($name == null || $pass == null){
		echo "null username/password";
	}else{
		$file = fopen('user.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($name == $user[2] && $pass == $user[3]){
				if($user[5]== "admin"){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: adminhome.php');
				}
				if($user[5]=="farmer"){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: farmerdashboard.html');
				}
				if($user[5]=="buyer"){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../view/buyerdashboard.php');
				}
				if($user[5]=="deliveryman"){
					$_SESSION['status'] = true;
					setcookie('status', 'true', time()+3600, '/');
					header('location:dashboarddeliveryman.html');
					}
			}
			else{
				echo "Username or password name is incorrect";
			}
		}
		echo "invalid user";
	}
	}
	/*$_POST 
	$_REQUEST
	$_SESSION 
	$_SERVER 
	$GLOBALS 
	$_COOKIE*/


?>