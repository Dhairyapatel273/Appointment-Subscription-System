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

	<div class="header_content">
		</br></br></br></br></br></br></br>
	</div>    
<section class="py-5 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-4 p-lg-5">
                            <form class="register-form" action="insert-script.php" method="post" >
                                <div class="row gy-3">
									<div class="col-lg-12">
										<input class="form-control rounded" 
                                            type="text" 
                                            name="barcode"
                                            placeholder="enter barcode" />
                                    </div>
                                    <div class="col-lg-12">
										<input class="form-control rounded" 
                                            type="text" 
                                            name="fname"
                                            placeholder="enter patitent name" />
                                    </div>
                                    <div class="col-lg-6">
                                        <select name="courseName">
                                        <option value="">Select Course</option>
                                        <option value="scaling ">scaling </option>
                                        <option value="root_canal ">root_canal </option>
                                        <option value="tooth_extraction">tooth_extraction</option>
                                        <option value="restorals">restorals</option>
                                        <option value="xray(OPG)">xray(OPG)</option>
                                        <option value="implants ">implants </option>
                                        <option value="full_mouth_rehabiliton">full_mouth_rehabiliton</option>
                                        <option value="trauma_cases">trauma_cases </option>
                                        <option value="smil_dentistry ">smil_dentistry </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
										<input class="form-control rounded" 
                                            type="date" 
                                            name="date"
                                            placeholder="enter date" />
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
</header>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
