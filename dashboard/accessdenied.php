<?php
include ("../include/server.php");
include ("../include/sessioncheck.php");
//include ("../include/p1checker.php");

//Recover Info From Session
$a_email = $_SESSION['a_email'];
$a_email = base64_decode($a_email);

$uid = base64_decode($_SESSION['uid']);
$privilege = $_SESSION['privilege'];
$a_fname = $_SESSION['a_fname'];
$a_lname = $_SESSION['a_lname'];
$role = $_SESSION['role'];

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
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/FCTA%20NO%20BG.gif">
    <link rel="icon" type="image/gif" sizes="480x480" href="assets/img/FCTA%20NO%20BG.gif">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Image-Uploader.css">
    <link rel="stylesheet" href="assets/css/NZDropdown---Muitlple.css">
    <link rel="stylesheet" href="assets/css/NZDropdown-Singlee.css">
    <link rel="stylesheet" href="assets/css/rotate-n-15.css">
    <link rel="stylesheet" href="assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(2,81,52);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><img src="assets/img/FCTA%20NO%20BG.gif" style="width: 50px;"></div>
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
                            <li class="nav-item"><a class="nav-link text-muted" href="../dashboard/welcome.php"><i class="fas fa-tachometer-alt"></i><span class="text-white">&nbsp;Dashboard</span></a></li>
                            <hr class="sidebar-divider">
                            <div class="sidebar-heading">
                                <p class="mb-0">INTERFACE</p>
                            </div>
                            <li class="nav-item">
                                <div><a class="btn btn-link text-light nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button"><i class="fas fa-users-cog"></i>&nbsp;<span>Application</span></a>
                                    <div class="collapse" id="collapse-1">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header" style="color: var(--blue);">CAPTURING SUB-MENU:</h6><a class="collapse-item" href="../dashboard/application/newapp.php">New Application</a><a class="collapse-item" href="../dashboard/search.php">Search/Edit Application</a><a class="collapse-item" href="../printphotocard.html">Print Photocard</a><a class="collapse-item" href="../dashboard/application/activation.php">Activate Remita</a>
                                            <h6 class="collapse-header" style="color: var(--blue);">BATCHING SUB-MENU:</h6><a class="collapse-item" href="cards.html">Batch Summary</a><a class="collapse-item" href="../dashboard/rebatch.php"><i class="fa fa-recycle"></i>Add/ Edit Batch Info</a><a class="collapse-item" href="../dashboard/rebatch.php"><i class="fa fa-recycle"></i>Rebatch Candidate</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button"><i class="fas fa-binoculars"></i>&nbsp;<span>Verification</span></a>
                                    <div class="collapse" id="collapse-2">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header">VERIFCATION SUB-MENU:</h6><a class="collapse-item" href="../verification/versummary.html">Verification Summary</a><a class="collapse-item" href="utilities-border.html">Verify Candidate</a><a class="collapse-item" href="../verification/print_attend.html">Print Attendance</a><a class="collapse-item" href="utilities-other.html">Other</a>
                                        </div>
                                    </div>
                                </div>
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-4" href="#collapse-4" role="button"><i class="fas fa-microphone-alt"></i>&nbsp;<span>Interview</span></a>
                                    <div class="collapse" id="collapse-4">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header">INTERVIEW SUB-MENU:</h6><a class="collapse-item" href="accessdenied.html">New Interview</a><a class="collapse-item" href="accessdenied.html">My Dashboard</a><a class="collapse-item" href="utilities-animation.html">Print Interview Attendance</a>
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
                                            <h6 class="collapse-header" style="color: var(--red);">BATCHING CONFIG:</h6><a class="collapse-item" href="hallbatchconfig.html">Date/ Batch Config</a><a class="collapse-item" href="hallbatchconfig.html">Hall Capacity Config</a>
                                            <h6 class="collapse-header" style="color: var(--red);">USER CONFIG:</h6><a class="collapse-item" href="addons/addnewadmin.html">Add New User</a><a class="collapse-item" href="manageusers.html">Manage Users</a><a class="collapse-item" href="blank.html">Privilege Config</a>
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
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Enter AppID to Search...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="submit" style="background: rgb(2,81,52);"><i class="fas fa-search"></i></button></div>
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
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><br><?php echo $a_fname," ",$a_lname; ?><br><br></span><img class="border rounded-circle img-profile" src="assets/img/avatars/jpeg1.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.html"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="../config/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
                    <div class="col text-center">
                        <h1 class="text-capitalize">Restricted Area</h1>
                    </div>
                    <div class="col">
                        <p class="text-capitalize" style="color: var(--blue);font-family: Oswald, sans-serif;text-align: center;">LOGGED IN AS: <span style="color: var(--green);"><?php echo $role; ?></span></p>
                    </div><!-- Start: Chart -->
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                    </div><!-- End: Chart -->
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <div class="card text-white bg-warning shadow">
                                        <div class="card-body"><i class="fa fa-warning" style="font-size: 27px;"></i>
                                            <p class="d-inline m-0" style="font-size: 32px;color: rgb(10,0,0);">Warning</p>
                                            <p class="text-capitalize small m-0" style="font-size: 16.8px;color: var(--dark);">You do not have the privilege to access the requested resource. Contact the Portal Administrator.</p>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Bootstrap-Image-Uploader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>