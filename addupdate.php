<?php 

	session_start();
	include('connection.php');

	$barcode = $_REQUEST['barcode'];
    $username = $_REQUEST['Name'];
    $email =  $_REQUEST['email'];
    $contact = $_REQUEST['Contact'];
    $dob =  $_REQUEST['dateofbirth'];
    $address = $_REQUEST['address'];
    $sql = "UPDATE patient_details SET username = '$username', email = '$email' , contact = '$contact' , dob = '$dob' , address = '$address' WHERE barcode = '$barcode'";
    if(mysqli_query($con, $sql)){
        echo "successfully.";
        header("location: modify.php");
    }     
?>