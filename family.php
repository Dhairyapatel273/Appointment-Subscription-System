<?php
    session_start();
    include('connection.php');
    $barcode = $_REQUEST['barcode'];
    $name = $_REQUEST['name'];
    $contact = $_REQUEST['Contact'];
    $dob = $_REQUEST['dateofbirth'];

    $sql = "INSERT INTO family_details  VALUES ('$barcode','$name','$contact','$dob')";
    if(mysqli_query($con, $sql)){
        echo "successfully.";
        header("location: addpatient.php");
    }
?>