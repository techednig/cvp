<?php
include_once ("../../include/server.php");
include_once ("../../include/sessioncheck.php");
include_once ("../../include/p1checker.php");

//Recover Info From Session
$a_email = $_SESSION['a_email'];
$a_email = base64_decode($a_email);

$uid = base64_decode($_SESSION['uid']);
$role = $_SESSION['role'];
$a_fname  = $_SESSION['a_fname'];
$a_lname = $_SESSION['a_lname'];

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - PHERMC DASHBOARD</title>
    <meta property="og:image" content="../assets/img/FCTA%20NO%20BG.gif">
    <meta name="description" content="Capturing, Verification and Interviewing administration platform for FCT School of Nursing and Midwifery.">
    <meta name="" content="">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/gif" sizes="480x480" href="../assets/img/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="../assets/img/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="../assets/img/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="../assets/img/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="../assets/img/FCTA%20NO%20BG.gif">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../assets/css/Bootstrap-Image-Uploader.css">
    <link rel="stylesheet" href="../assets/css/NZDropdown---Muitlple.css">
    <link rel="stylesheet" href="../assets/css/NZDropdown-Singlee.css">
    <link rel="stylesheet" href="../assets/css/rotate-n-15.css">
    <link rel="stylesheet" href="../assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(2,81,52);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><img src="../assets/img/FCTA%20NO%20BG.gif" style="width: 50px;"></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-family: Oswald, sans-serif;">FCT-SOMN</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul><!-- Start: Sidebar -->
                <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #025134;">
                    <div class="container-fluid d-flex flex-column p-0">
                        <hr class="sidebar-divider my-0">
                        <ul class="navbar-nav text-light" id="accordionSidebar-1">
                            <li class="nav-item"><a class="nav-link text-muted" href="../welcome.php"><i class="fas fa-tachometer-alt"></i><span class="text-white">&nbsp;Dashboard</span></a></li>
                            <hr class="sidebar-divider">
                            <div class="sidebar-heading">
                                <p class="mb-0">INTERFACE</p>
                            </div>
                            <li class="nav-item">
                                <div><a class="btn btn-link text-light nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button"><i class="fas fa-users-cog"></i>&nbsp;<span>Application</span></a>
                                    <div class="collapse" id="collapse-1">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header" style="color: var(--blue);">CAPTURING SUB-MENU:</h6><a class="collapse-item" href="../application/newapp.php">New Application</a><a class="collapse-item" href="../application/search.php">Search/Edit Application</a><a class="collapse-item" href="../printphotocard.php">Print Photocard</a><a class="collapse-item" href="../application/activation.php">Activate Remita</a>
                                            <h6 class="collapse-header" style="color: var(--blue);">BATCHING SUB-MENU:</h6><a class="collapse-item" href="cards.html">Batch Summary</a><a class="collapse-item" href="../application/rebatch.php"><i class="fa fa-recycle"></i>Add/ Edit Batch Info</a><a class="collapse-item" href="../application/rebatch.php"><i class="fa fa-recycle"></i>Rebatch Candidate</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button"><i class="fas fa-binoculars"></i>&nbsp;<span>Verification</span></a>
                                    <div class="collapse" id="collapse-2">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header">VERIFCATION SUB-MENU:</h6><a class="collapse-item" href="../verification/versummary.php">Verification Summary</a><a class="collapse-item" href="utilities-border.html">Verify Candidate</a><a class="collapse-item" href="../verification/print_attend.php">Print Attendance</a><a class="collapse-item" href="utilities-other.html">Other</a>
                                        </div>
                                    </div>
                                </div>
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-4" href="#collapse-4" role="button"><i class="fas fa-microphone-alt"></i>&nbsp;<span>Interview</span></a>
                                    <div class="collapse" id="collapse-4">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header">INTERVIEW SUB-MENU:</h6><a class="collapse-item" href="accessdenied.html">New Interview</a><a class="collapse-item" href="accessdenied.php">My Dashboard</a><a class="collapse-item" href="utilities-animation.html">Print Interview Attendance</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <hr class="sidebar-divider">
                            <div class="sidebar-heading">
                                <p class="mb-0">Addons</p>
                            </div>
                            <li class="nav-item">
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button"><i class="fas fa-wrench"></i>&nbsp;<span>Configuration</span></a>
                                    <div class="collapse" id="collapse-3">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header" style="color: var(--red);">BATCHING CONFIG:</h6><a class="collapse-item" href="hallbatchconfig.php">Date/ Batch Config</a><a class="collapse-item" href="hallbatchconfig.php">Hall Capacity Config</a>
                                            <h6 class="collapse-header" style="color: var(--red);">USER CONFIG:</h6><a class="collapse-item" href="addons/addnewadmin.php">Add New User</a><a class="collapse-item" href="manageusers.php">Manage Users</a><a class="collapse-item" href="blank.html">Privilege Config</a>
                                        </div>
                                    </div>
                                </div>
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-5" href="#collapse-5" role="button"><i class="fas fa-envelope"></i>&nbsp;<span>Message Center</span></a>
                                    <div class="collapse" id="collapse-5">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header" style="color: var(--red);">messaging center:</h6><a class="collapse-item" href="accessdenied.html">Compose Message</a><a class="collapse-item" href="accessdenied.html">View Messages</a>
                                            <h6 class="collapse-header" style="color: var(--red);">CONFIG:</h6><a class="collapse-item" href="404.html">Message Center Config</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" aria-controls="collapsePages">
                                    <div class="bg-white border rounded py-2 collapse-inner">
                                        <h6 class="collapse-header">LOGIN SCREENS:</h6><a class="collapse-item" href="#">Login</a><a class="collapse-item" href="#">Register</a><a class="collapse-item" href="#">Forgot Password</a>
                                        <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="#">404 Page</a><a class="collapse-item" href="#">Blank Page</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item" style="font-size: 0px;">
                                <hr style="color: var(--white);border-radius: 0px;border-width: 6px;border-top-width: 1px;border-top-color: rgba(252,250,250,0.1);width: 200px;"><a class="nav-link" href="#"><i class="fas fa-chart-area"></i><span>&nbsp;Charts</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-table"></i><span>&nbsp;Tables</span></a></li>
                            <hr class="sidebar-divider">
                        </ul>
                        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle-1" type="button"></button></div>
                    </div>
                </nav><!-- End: Sidebar -->
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="../../dashboard/search.php">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" name="searchparam" placeholder="Enter AppID to Search...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="submit" name="searchbtn" value="1" style="background: rgb(2,81,52);"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="badge badge-danger badge-counter">0+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">0</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><br><?php echo $a_fname," ",$a_lname; ?><br><br></span><img class="border rounded-circle img-profile" src="../assets/img/avatars/jpeg1.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.html"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="../config/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <p class="text-capitalize" style="color: var(--blue);font-family: Oswald, sans-serif;text-align: center;">LOGGED IN AS: <span style="color: var(--green);"><?php echo $role; ?>&nbsp;</span></p>
                <div class="container-fluid">
                    <div class="col text-center">
                        <div class="toast fade hide" role="alert" id="toast-1">
                            <div class="toast-header text-white bg-info"><img class="mr-2" src="../assets/img/avatars/avatar5.jpeg"><strong class="mr-auto">Capture New Application</strong><small>1 min ago</small><button class="close ml-2 mb-1 close" data-dismiss="toast"><span aria-hidden="true">×</span></button></div>
                            <div class="toast-body" role="alert">
                                <p style="font-family: Oswald, sans-serif;">Entry Successful! Scroll to the bottom of page to view last entry.</p>
                            </div>
                        </div>
                        <h3 class="text-capitalize">capture new application</h3>
                    </div>
                    <div>
                        <div>
                    <small class="form-text text-danger" style="font-size: 14px;">&nbsp;</div><?php
    
            
    if(isset($_GET['msg'])){
    $msg = base64_decode($_GET['msg']);

        if($msg!=""){
            echo "<i class='fas fa-exclamation-triangle' style='color: var(--bs-red)'></i>"; echo $msg;
            //echo $_GET['msg'];
        }
        
        }
    
?></small>
</div>
                    <div class="col">
                        <div style="background: var(--secondary);height: 10px;border-radius: 11px;"></div>
                    </div>
                    <div style="height: 46px;"></div>
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Program Information</p>
                            </div>
                            <div class="card-body">
                                <form action="process_newapp.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="col-md-5">
                                            <div class="form-group"><label for="Program Name" style="color: var(--red);"><strong>Program Name</strong></label><!-- Start: NZDropdown-Singlee --><select class="form-control form-control-lg" style="height: 37px;padding-top: 3px;padding-bottom: 3px;font-size: 12px;width: 100%;" required="" name="progname" value="">
                                                    <option value="BM" selected="">Basic Midwifery</option>
                                                    <option value="PBN">Post-Basic Nursing</option>
                                                    <option value="BN">Basic Nursing</option>
                                                </select><!-- End: NZDropdown-Singlee -->
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group"><label for="Program Year" style="color: var(--red);"><strong>Year</strong></label><!-- Start: NZDropdown-Singlee --><select class="form-control form-control-lg" style="height: 37px;padding-top: 3px;padding-bottom: 3px;font-size: 12px;width: 100%;" required="" name="progyr" value="">
                                                    <option value="2022" selected="">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                </select><!-- End: NZDropdown-Singlee -->
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group"><label for="Stream" style="color: var(--red);"><strong>Stream</strong></label><!-- Start: NZDropdown-Singlee --><select class="form-control form-control-lg" style="height: 37px;padding-top: 3px;padding-bottom: 3px;font-size: 12px;width: 100%;" required="" name="stream" value="">
                                                    <option value="A" selected="">A</option>
                                                    <option value="B">B</option>
                                                </select><!-- End: NZDropdown-Singlee -->
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="Formno" style="color: var(--red);"><strong>Form Number*</strong><br></label><input class="form-control" type="number" inputmode="numeric" minlength="5" maxlength="5" name="form_no" autocomplete="off" required=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"></div>
                                    </div>
                                
                            </div>
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Candidate Bio</p>
                            </div>
                            <div class="card-body">
                                
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="Surname"><strong>Surname*</strong><br></label><input class="form-control" type="text" name="sname" autocomplete="off" required=""></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="fname"><strong>First Name*</strong></label><input class="form-control" type="text" name="fname" autocomplete="off" required=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="Other_name"><strong>Other Name</strong></label><input class="form-control" type="text" name="oname" autocomplete="off"></div>
                                            <div class="form-group"><label for="Gender"><strong>Gender</strong></label><!-- Start: NZDropdown-Singlee --><select class="form-control form-control-lg" style="height: 37px;padding-top: 3px;padding-bottom: 3px;font-size: 12px;width: 100%;" required="" name="gender">
                                                    <option value="Female" selected="">Female</option>
                                                    <option value="Male">Male</option>
                                                </select><!-- End: NZDropdown-Singlee -->
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="DOB"><strong>Date of Birth*</strong></label><input class="form-control" type="date" required="" name="dob"></div>
                                        </div>
                                    </div>
                                    <div class="form-group"></div>
                                
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Contact Information</p>
                            </div>
                            <div class="card-body">
                                
                                    <div class="form-group"><label for="Email"><strong>Email Address*</strong><br></label><input class="form-control" type="email" name="email" inputmode="email" autocomplete="off" required=""></div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="phone1"><strong>Phone #</strong></label><input class="form-control" type="text" name="phone1" inputmode="tel" maxlength="11" minlength="11" required=""></div>
                                            <div class="form-group"><label for="state"><strong>State</strong></label><!-- Start: NZDropdown-Singlee --><select class="form-control form-control-lg" style="height: 37px;padding-top: 3px;padding-bottom: 3px;font-size: 12px;width: 100%;" required="" name="state">
                                                    <option value="Non Nigerian" selected="">Non Nigerian</option>
                                                    <option value="Abia">Abia</option>
                                                    <option value="Adamawa">Adamawa</option>
                                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                                    <option value="Anambra">Anambra</option>
                                                    <option value="Bauchi">Bauchi</option>
                                                    <option value="Bayelsa">Bayelsa</option>
                                                    <option value="Benue">Benue</option>
                                                    <option value="Borno">Borno</option>
                                                    <option value="Cross River">Cross River</option>
                                                    <option value="Delta">Delta</option>
                                                    <option value="Ebonyi">Ebonyi</option>
                                                    <option value="Edo">Edo</option>
                                                    <option value="Ekiti">Ekiti</option>
                                                    <option value="Enugu">Enugu</option>
                                                    <option value="FCT">FCT</option>
                                                    <option value="Gombe">Gombe</option>
                                                    <option value="Imo">Imo</option>
                                                    <option value="Jigawa">Jigawa</option>
                                                    <option value="Kaduna">Kaduna</option>
                                                    <option value="Kano">Kano</option>
                                                    <option value="Katsina">Katsina</option>
                                                    <option value="Kebbi">Kebbi</option>
                                                    <option value="Kogi">Kogi</option>
                                                    <option value="Kwara">Kwara</option>
                                                    <option value="Lagos">Lagos</option>
                                                    <option value="Nasarawa">Nasarawa</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Ogun">Ogun</option>
                                                    <option value="Ondo">Ondo</option>
                                                    <option value="Osun">Osun</option>
                                                    <option value="Oyo">Oyo</option>
                                                    <option value="Plateau">Plateau</option>
                                                    <option value="Rivers">Rivers</option>
                                                    <option value="Sokoto">Sokoto</option>
                                                    <option value="Taraba">Taraba</option>
                                                    <option value="Yobe">Yobe</option>
                                                    <option value="Zamfara">Zamfara</option>
                                                </select><!-- End: NZDropdown-Singlee -->
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="Phone2"><strong>Alternate Phone #</strong></label><input class="form-control" type="text" name="phone2" inputmode="tel" maxlength="17"></div>
                                            <div class="form-group"><label for="Nationality"><strong>Nationality</strong></label><!-- Start: NZDropdown-Singlee --><select class="form-control form-control-lg" style="height: 37px;padding-top: 3px;padding-bottom: 3px;font-size: 12px;width: 100%;" required="" name="nationality">
                                                    <option value="Nigerian" selected="">Nigerian</option>
                                                    <option value="Non Nigerian">Non Nigerian</option>
                                                </select><!-- End: NZDropdown-Singlee -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col">
                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" required="" name="verification" value="1"><label class="form-check-label text-capitalize" for="formCheck-1" style="font-size: 12px;font-family: Nunito, sans-serif;">I have checked and confirmed that the selected program for this candidate is correct.</label></div>
                                        </div>
                                    </div><!-- Start: Bootstrap Image Uploader --><div class="bootstrap_img_upload">
<div class="container py-5">

    <header class="text-white text-center">
        <h1 class="display-4">Passport Upload</h1>
        <img src="https://res.cloudinary.com/mhmd/image/upload/v1564991372/image_pxlho1.svg" alt="" width="150" class="mb-4">
    </header>


    <div class="row py-4">
        <div class="col-lg-6 mx-auto">

            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="fileToUploadd" type="file" name="fileToUpload" onchange="readURL(this);" class="form-controll border-0">
                
                
            </div>

            <!-- Uploaded image area-->
            <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

        </div>
    </div>
</div>
</div><!-- End: Bootstrap Image Uploader -->
                                    <div class="form-group" id="formg3">
                                        <div style="width: 425.6px;height: 17px;margin: 0px;padding: 14px;"></div>
                                    </div>
                                    <div class="form-group" id="formg-1"><button class="btn btn-primary btn-sm" type="reset" style="background: var(--red);">Reset</button><button class="btn btn-primary btn-sm" type="submit" name="formsubmit" style="margin: 4px;" >Save Record</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-5"></div>
                    <div class="col">
                        <h4>Your List of Recently Captured (3)</h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive table-bordered text-capitalize">
                            <?php
                  $i=1;
                  				$sql = "SELECT * FROM candidates WHERE updatedby= '".$uid."' ORDER BY lastupdated DESC LIMIT 3";
                
                if($result = mysqli_query($db, $sql)){
                if(mysqli_num_rows($result) > 0){
                echo "
                                <table class='table table-striped table-bordered table-sm'>
                                    <thead>
                                        <tr>
                                            <th class='text-dark bg-info'>S/N</th>
                                            <th class='text-dark bg-info'>AppID</th>
                                            <th class='text-dark bg-info'>Surname</th>
                                            <th class='text-dark bg-info'>First Name</th>
                                            <th class='text-dark bg-info'>State</th>
                                            <th class='text-dark bg-info'>Phone 1</th>
                                            <th class='text-dark bg-info border rounded'>Entry Date/Time</th>
                                        </tr>
                                    </thead>";
                                    while ($row = mysqli_fetch_array($result)){
                                        
                                        echo "
                                    <tbody>
                                        <tr>
                                            <td>".$i++."</td>
                                            <td>".$row['appid']."</td>
                                            <td>".$row['sname']."</td>
                                            <td>".$row['fname']."</td>
                                            <td>".$row['state']."</td>
                                            <td>".$row['phone1']."</td>
                                            <td>".$row['lastupdated']."</td>
                                        </tr>
                                        
                                    </tbody>";
                                }
                                echo "</table>";
                               // echo              "</div>";
                 
     // Free result set
                    mysqli_free_result($result);
                    }
                    else{
                    echo "Sorry! You Have Not Captured any Candidate";
                    }
                    } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                    }
                    // Close connection
    
                    mysqli_close($db);
    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-primary shadow"></div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-success shadow"></div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-info shadow">
                                        <div class="card-body">
                                            <p class="m-0">Info</p>
                                            <p class="text-white-50 small m-0">#36b9cc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-warning shadow">
                                        <div class="card-body">
                                            <p class="m-0">Warning</p>
                                            <p class="text-white-50 small m-0">#f6c23e</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-danger shadow">
                                        <div class="card-body">
                                            <p class="m-0">Danger</p>
                                            <p class="text-white-50 small m-0">#e74a3b</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-secondary shadow">
                                        <div class="card-body">
                                            <p class="m-0">Secondary</p>
                                            <p class="text-white-50 small m-0">#858796</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © FCTA SOMN 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Bootstrap-Image-Uploader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/Table-With-Search.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>