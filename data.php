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
    $sql = "SELECT * FROM patient_details where barcode = '$barcode'";
    $result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
    $sql3 = "SELECT * FROM family_details where barcode = '$barcode'";
    $result3= $con->query($sql3); 

    $query1 = "SELECT * FROM services where barcode = '$barcode'";
    $result1= $con->query($query1); 
?>
<section class="py-5 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-4 p-lg-5">
                            <form class="register-form" action="#" method="post" >
                                <div class="row gy-3">
									<div class="col-lg-12">
										<input class="form-control rounded" 
                                            type="text" 
                                            name="barcode"
                                            placeholder="enter barcode" />
                                    </div>
                                    <div class="col-lg-12">
                                        <h3><label class="form-label"> Patient Name:-</label>
										<label class="form-label"><?php echo $row['username']; ?></label></h3>
                                        <h3><label class="form-label"> Patient's Family Name:-</label>
										<label class="form-label">
                                            <?php  while($row3=$result3->fetch_assoc()){
                                            echo $row3['name']. "," ;
                                        }?></label></h3>
                                    </div>
                                    <h3> Display Services Data </h3>
                                        <table>
                                        <tr>
                                            <th> barcode </th>
                                            <th> name </th>
                                            <th> catogery </th>
                                            <th> date </th>
                                        </tr>

                                        <?php while($row1=$result1->fetch_assoc()){
                                            echo "<tr><td>".$row1["barcode"]."</td><td>".$row1["f_name"]."</td><td>".$row1["services"]."</td><td>".$row1["date"]."</td></tr>";
                                        }?>

                                        <?php mysqli_free_result($result1); ?>
                                        <?php mysqli_close($con); ?>
                                    </table>
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