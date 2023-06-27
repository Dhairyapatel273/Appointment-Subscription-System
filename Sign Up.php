<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َSign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
<section class="py-5 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-4 p-lg-5">
                            <form class="register-form" action="signupback.php" method="post" >
                                <div class="row gy-3">
                                    <div class="col-lg-">
                                    <h3>Register Details</h3>
                                        <label class="form-label"> user_ID</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="text" 
                                            name="user_ID"
                                            placeholder="user_ID" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label"> UserName</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="text" 
                                            name="username"
                                            placeholder="Enter Username" />
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
                                            name="contact"
                                            placeholder="Enter your Contact no" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label"> password</label>
                                        <div class="input-group">
                                            <input class="form-control rounded" 
                                            type="pwd" 
                                            name="password"
                                            placeholder="Enter your password" />
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <Button type="Submit" class="btn btn-dark" name="upload">Submit</Button>
                                    </div>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

              
  </body>
</html>
<?php
	unset($_SESSION["error"]);  
?>