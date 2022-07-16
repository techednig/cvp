<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - FCTSONM CVP+</title>
    <meta name="description" content="FCT School of Nursing and Midwifery Capturing, Verification and Interviewing Platform for CBT Entrance Examination.">
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/dogs/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/dogs/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/dogs/FCTA%20NO%20BG.gif">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antonio&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-primary" style="background: rgb(14,115,31);">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/image2.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <form class="user" action="processsignup.php" method="POST">
                            <small class="form-text text-danger" style="font-size: 14px;">&nbsp;</div><?php
    
            
                                        if(isset($_GET['msg'])){
                                        $msg = base64_decode($_GET['msg']);
                            
                                            if($msg!=""){
                                                echo "<i class='fas fa-exclamation-triangle' style='color: var(--bs-red)'></i>"; echo $msg;
                                                //echo $_GET['msg'];
                                            }
                                            
                                            }
                                        
                            ?></small> 
                               
                            <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="a_fname"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Surname" name="a_lname"></div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="a_email" inputmode="email" autocomplete="off"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="a_password"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="repassword"></div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit" name="submit">Register Account</button>
                                <hr><a class="btn btn-primary disabled d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Register with Google</a><a class="btn btn-primary disabled d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Register with Facebook</a>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="#">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="index.php">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>