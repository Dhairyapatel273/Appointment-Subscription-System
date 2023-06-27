<?php
   require_once 'core.php';
?>
<?php
    $user_ID=$_POST['user_ID'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $query = "INSERT INTO users VALUES('$user_ID','$username','$password')";
    $result = $con->query($query);
    if($result){
        echo "successfully.";
        header("location: login.php");
    }
?>