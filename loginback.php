<?php
	session_start();
	include('connection.php');
	//ini_set('session.cookie_lifetime');
	
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$sql="SELECT * FROM user_details WHERE  username = '$user' and password = '$pass'";    
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	$count = mysqli_num_rows($result);  
		
	if($count == 1){  
		$_SESSION["id"]=$row['id'];
		$_SESSION["username"]=$row['username'];
		header("location:Homepage.php");
	}  
	else{  
		$_SESSION["error"]="Username or password is wrong";
		header("location:login.php"); 
	}     

?>