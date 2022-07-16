<?php

session_start();
// Destroy Any Existing Session
session_destroy();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - FCTSONM CVP+</title>
    <meta name="description" content="FCT School of Nursing and Midwifery Capturing, Verification and Interviewing Platform for CBT Entrance Examination.">
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/dogs/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/dogs/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/dogs/FCTA%20NO%20BG.gif">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antonio&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-primary" style="background: #066d48;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <h1 class="text-white" style="text-align: center;">FCTSONM Capturing and Verification Platform</h1>
                <h2 class="text-center" style="font-family: Antonio, sans-serif;color: var(--bs-light);">CVP+</h2>
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex"><img src="assets/img/dogs/FCTA%20NO%20BG.gif"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    <small class="form-text text-danger" style="font-size: 14px;">&nbsp;</div><?php
    
            
                                        if(isset($_GET['msg'])){
                                        $msg = base64_decode($_GET['msg']);
                            
                                            if($msg!=""){
                                                echo "<i class='fas fa-exclamation-triangle' style='color: var(--bs-red)'></i>"; echo $msg;
                                                //echo $_GET['msg'];
                                            }
                                            
                                            }
                                        
                            ?></small>
                                    <form class="user" method="POST" action="processlogin.php">
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" placeholder="Enter Email Address..." name="a_email" autocomplete="on" inputmode="email" required=""></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="a_password" required="" minlength="6"><small class="form-text text-danger" style="font-size: 11px;">Alphanumeric with at least an uppercase letter. No spaces</small></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit" name="loginbtn">Login</button>
                                        <hr><a class="btn btn-primary disabled d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Login with Google</a><a class="btn btn-primary disabled d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="#">Forgot Password?</a></div>
                                    <div class="text-center"><a class="small" href="register.php">Create an Account!</a></div>
                                </div>
                            </div>
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