<?php 
	session_start();

	$id = $_POST['id'];
	$password = $_POST['password'];
    $match_password= $_POST['match_password'];
    $name = $_POST['username'];
    $usertype = $_POST['usertype'];
    
	if($id == null || $password == null ||  $match_password == null||  $name == null||  $usertype== null){
		echo "null username/password/email";
	}
    else{
		$user = $id."|".$password."|".$match_password."|". $name."|". $usertype."\r\n";
        if($user[1]==$user[2]){
            $file = fopen('user.txt', 'a');
		    fwrite($file, $user);
		    header('location: SignIn.html');

        }
        else{

            echo "Passwords does not match";

        }	
	}
?>