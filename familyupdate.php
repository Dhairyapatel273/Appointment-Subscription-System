<?php
    session_start();
    include('connection.php');
    $barcode = $_REQUEST['barcode'];
    $name = $_REQUEST['name'];
    $contact = $_REQUEST['Contact'];
    $dob = $_REQUEST['dateofbirth'];

    $sql = "UPDATE family_details SET name = '$name' , contact = '$contact' , dob = '$dob' where barcode = '$barcode'";
    if(mysqli_query($con, $sql)){
        echo "successfully.";
        header("location: modify.php");
    }
?>