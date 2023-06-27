<?php
    session_start();
    include('connection.php');
 
    $barcode =  $_REQUEST['barcode'];
    $username = $_REQUEST['Name'];
    $email =  $_REQUEST['email'];
    $contact = $_REQUEST['Contact'];
    $dob = $_REQUEST['dateofbirth'];
    $address = $_REQUEST['address'];
    $name = $_REQUEST['Name'];

    if (isset($_POST['upload'])) {
        
        $sql = "INSERT INTO patient_details  VALUES ('$barcode','$username','$email','$contact','$dob','$address')";
        $sql1 = "INSERT INTO family_details  VALUES ('$barcode','$name','$contact','$dob')";
        if(mysqli_query($con, $sql)){
            echo "successfully.";
            header("location: addpatient.php");
        }
        if(mysqli_query($con, $sql1)){
            echo "successfully.";
            header("location: addpatient.php");
        }
    }
?>