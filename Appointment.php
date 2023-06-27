<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="header.css">
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
        </ul>
      </div>
    </div>
    <section class="py-5 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-4 p-lg-5">
                            <form class="register-form" action="data.php" method="post" >
                                <div class="row gy-3">
									<div class="col-lg-12">
										<input class="form-control rounded" 
                                            type="text" 
                                            name="barcode"
                                            placeholder="enter barcode" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <Button type="Submit" class="btn btn-dark">Submit</Button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </header>

</body>
</html>
