<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َLogin</title>
    <link rel="stylesheet" href="loginsignup.css">
  </head>
  <body>
<form class="box" action="loginback.php" method="post">
  <?php
    if(isset($_SESSION["error"])){
      echo "<p style='color:red'>".$_SESSION["error"]."</p>";
    }
  ?>
  <h1>Login</h1>
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" id="pwd" name="password" placeholder="Password" onfocusout="document.getElementById('eyeicon').style.visibility = 'hidden';" onfocus="document.getElementById('eyeicon').style.visibility = 'visible';" / required>
  <img id="eyeicon" class="pwd-eye" src="pwdeye.png" style="margin: -59px 225px;" onmouseenter="document.getElementById('pwd').setAttribute('type', 'text');" onmouseleave="document.getElementById('pwd').setAttribute('type', 'password');" />
  <a href="Sign Up.php">New account</a>&nbsp;&nbsp;&nbsp;
  <input type="submit" name="" value="Login">
  
</form>
</body>
</html>
<?php
	unset($_SESSION["error"]);  
?>