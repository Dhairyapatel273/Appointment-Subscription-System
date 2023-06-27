<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>
<body>

<header>
	<div class="header_menu">
		<div class="menu_list">
			<ul>
				<li><a href="Homepage.php">home</a></li>
				<li><a href="addpatient.php">Add Patient</a></li>
				<li><a href="modify.php">Modify Patient</a></li>
				<li><a href="appoipment.php">Appoinment(add data)</a></li>
				<li><a href="Appointment.php">Appointment(view)</a></li>
				<?php 
					if(isset($_SESSION["username"])){
						echo "<li><a href=\"Logout.php\">Logout</a></li>";
					}else{ 
						echo "<li><a href=\"Sign up.php\">login/sign in</a></li>";
					}
				?>  
			</ul>
		</div>
	</div>

	<div class="header_content">
		</br></br></br></br></br></br></br>
	</div>

</header>
<style>
	*{
	padding: 0;
	margin: 0;
}

header{
	width: 100%;
	height: 100vh;
	background-image: url('jdcc.jpg');
	background-size: 100%;
	background-position: center;
	font-family: 'Dosis', sans-serif;
}

.header_menu{
	width: 100%;
	height: 100px;
	display: flex;
	flex-direction: row;
	align-items: center;
}


.menu_list{
	width: 100%;
	text-align: right;
	padding-right: 50px;
}

.menu_list li{
	display: inline-block;
	text-transform: uppercase;
	list-style: none;
	letter-spacing: 2px;
	padding-left: 50px;
}

.menu_list li a{
	color:rgba(255, 255, 255, .8);
	text-decoration: none;
}

.menu_list li a:hover{
	color:orange;
}

.header_content{
	text-transform: uppercase;
	width: 100%;
	height: 200px;
	position: absolute;
	top: 50%;
	left: 50%;
	color:rgba(255, 255, 255, .8);
	transform: translate(-50%, -50%);
	text-align: center;
}

.header_Start{
	text-transform: uppercase;
	width: 100%;
	height: 200px;
	position: absolute;
	top: 40%;
	left: 50%;
	color:rgba(255, 255, 255, .8);
	transform: translate(-50%, -50%);
	text-align: center;	
}

.header_content h1{
	margin-bottom: 50px;
	font-size: 70px;
	font-weight: 700;
	letter-spacing: 0.8em;
}

.header_content button{
	height: auto;
	padding:8px 37px;
	color:#fff;
	font-size: 14px;
	background-color: transparent;
	margin-right: 20px;
}
 
.header_Start button{
	height: auto;
	padding:8px 37px;
	color:#fff;
	font-size: 14px;
	background-color: transparent;
	margin-right: 20px;	
}

.header_content button a{
	text-transform: uppercase;
	text-decoration: none;
	color: white;
	letter-spacing: 1px;
}

.header_content button:hover{
	background-color: rgb(255, 187, 0);
	border:1px solid white;
}

.header_Start button:hover{
	background-color: rgb(255, 187, 0);
	border:1px solid white;	
}

.header_Start input{
	height: auto;
	padding:8px 37px;
	color:#fff;
	font-size: 14px;
	background-color: transparent;
	margin-right: 20px;	
}

.header_Start input:hover{
	background-color: rgb(255, 187, 0);
	border:1px solid white;	
}
</style>
</body>
</html>