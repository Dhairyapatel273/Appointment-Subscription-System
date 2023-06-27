<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	<div class="header_content">
		</br></br></br></br></br></br></br>
	</div>

    <section class="py-5 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-4 p-lg-5">
                        <form class="register-form" action="addupdate.php" method="post" >
                                <div class="row gy-3">
                                    <div class="col-lg-">
                                    <h3>Patient Details</h3>
                                        <label class="form-label"> Barcode</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="text" 
                                            name="barcode"
                                            placeholder="Barcode" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label"> Name</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="text" 
                                            name="Name"
                                            placeholder="Enter Name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label"> Email address</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="email"
                                            name="email"
                                            placeholder="Enter your email address" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label"> Contact</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="text" 
                                            name="Contact"
                                            placeholder="Enter your Contact no" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label"> Date Of Birth</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="date" 
                                            name="dateofbirth"
                                            placeholder="Enter your Date Of Birth" />
                                        </div>
                                    </div>
                                    <div class="col-lg3">
                                        <label class="form-label"> Address</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="textarea" 
                                            name="address"
                                            placeholder="Enter your Address" />
                                        </div>
                                    </div>
                                    <div class="col-lg3">
                                        <label class="form-label"> CHOOSE IMAGE</label>
                                        <div class="input-group">
                                        <input class="form-control" type="file" name="uploadfile" value="" />
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <Button type="Submit" class="btn btn-dark" name="upload">Submit</Button>
                                    </div>
                                </div>
                            </form>    
                            <form class="detais-form" action="familyupdate.php" method="post" >
                                <div class="row gy-3">
                                    <h3>Family Details</h3>
                                    <div class="col-lg-6">
                                        <label class="form-label"> Name</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="text" 
                                            name="name"
                                            placeholder="Name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <label class="form-label"> Barcode</label>
                                            <div class="input-group">
                                                <input class="form-control rounded" 
                                                type="text" 
                                                name="barcode"
                                                placeholder="Barcode" />
                                            </div>
                                        </div>
                                    <div class="col-lg-6">
                                        <label class="form-label"> Contact</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="text" 
                                            name="Contact"
                                            placeholder="Enter your Contact no" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label"> Date Of Birth</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="date" 
                                            name="dateofbirth"
                                            placeholder="Enter your Date Of Birth" />
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <Button type="Submit" class="btn btn-dark">Add</Button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>