<?php 

session_start();
include('connection.php');


  $barcode = $_REQUEST['barcode'];
  $f_name = $_REQUEST['fname'];
  $category = $_REQUEST['courseName'];
  $date = $_REQUEST['date'];
  $sql3 = "SELECT * FROM family_details where barcode = '$barcode'";
  $result3= $con->query($sql3);
  $query = "INSERT INTO services VALUES('$barcode','$f_name', '$category','$date')";
  while($row3=$result3->fetch_assoc())
  {
    if($f_name == $row3['name'])
    {
      $result = $con->query($query);
      if($result){
        echo "successfully.";
        header("location: appoipment.php");
        break;
      }
    }
    else
    {
      header("location: homepage.php");
    }
  }
?>