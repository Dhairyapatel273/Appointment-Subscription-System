<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php 

session_start();
include('connection.php');

$barcode = $_REQUEST['barcode'];
$sql = "select * from patient_details:family_details where barcode = '$barcode'";
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
?>

<section class="py-5 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-4 p-lg-5">
                            <form class="register-form" action="data.php" method="post" >
                                <div class="row gy-3">
                                <form class="register-form" action="find.php" method="post" >
									<div class="col-lg-12">
										<input class="form-control rounded" 
                                            type="text" 
                                            name="barcode"
                                            placeholder="enter barcode" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <Button type="Submit" class="btn btn-dark">find</Button>
                                    </div>
                                    <div class="col-lg-12">
                                        <h3><label class="form-label"> Patient Name:-</label>
										<label class="form-label"><?php echo $row['username']; ?></label></h3>
                                    </div>
                                </form>
                                    <div class="col-lg-6">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												Services
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">scaling 50% off</a></li>
												<li><a class="dropdown-item" href="#">root canal 10% off</a></li>
												<li><a class="dropdown-item" href="#">tooth extraction 10% off</a></li>
												<li><a class="dropdown-item" href="#">disimplantion 10% off</a></li>
												<li><a class="dropdown-item" href="#">restorals 10% off</a></li>
												<li><a class="dropdown-item" href="#">xray (OPG) 10% off</a></li>
												<li><a class="dropdown-item" href="#">implants 5% off</a></li>
												<li><a class="dropdown-item" href="#">full mouth rehabiliton 5% off</a></li>
												<li><a class="dropdown-item" href="#">trauma cases 5% off</a></li>
												<li><a class="dropdown-item" href="#">smile dentistry 5% off</a></li>
											</ul>
										</div>
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

</body>
</html>
