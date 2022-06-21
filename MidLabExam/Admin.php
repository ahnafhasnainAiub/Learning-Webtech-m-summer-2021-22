<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome to Admin home Page</h1>
</body>
</html>


<?php 
	}else{
		echo "invalid request";
	}  
?>