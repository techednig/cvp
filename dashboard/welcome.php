<?php
include ("../include/server.php");
include ("../include/sessioncheck.php");
include ("../include/p1checker.php");

//Recover Info From Session
$a_email = $_SESSION['a_email'];
$a_email = base64_decode($a_email);

$uid = base64_decode($_SESSION['uid']);
$privilege = $_SESSION['privilege'];

//print_r ($privilege); 
//Fetch Registration & User Info of Associated user_id
$queryuser = "SELECT adminusers.a_fname, adminusers.a_lname, roles.role FROM adminusers, roles WHERE adminusers.user_id = $uid AND roles.roleid = $privilege";
$user_row = mysqli_query($db, $queryuser);
$row_user = mysqli_fetch_array($user_row, MYSQLI_ASSOC);

$a_fname = $row_user["a_fname"] ;
$a_lname = $row_user["a_lname"] ;
$role = $row_user["role"] ;

$_SESSION['a_fname'] = $a_fname;
$_SESSION['a_lname'] = $a_lname;
$_SESSION['role'] = $role;


//mysqli_close($db);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - CVP+</title>
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
                            <li class="nav-item"><a class="nav-link text-muted" href="../welcome.php"><i class="fas fa-tachometer-alt"></i><span class="text-white">&nbsp;Dashboard</span></a></li>
                            <hr class="sidebar-divider">
                            <div class="sidebar-heading">
                                <p class="mb-0">INTERFACE</p>
                            </div>
                            <li class="nav-item">
                                <div><a class="btn btn-link text-light nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button"><i class="fas fa-users-cog"></i>&nbsp;<span>Application</span></a>
                                    <div class="collapse" id="collapse-1">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header" style="color: var(--blue);">CAPTURING SUB-MENU:</h6><a class="collapse-item" href="../dashboard/application/newapp.php">New Application</a><a class="collapse-item" href="../dashboard/search.php">Search/Edit Application</a><a class="collapse-item" href="../../printphotocard.php">Print Photocard</a><a class="collapse-item" href="../application/activation.php">Activate Remita</a>
                                            <h6 class="collapse-header" style="color: var(--blue);">BATCHING SUB-MENU:</h6><a class="collapse-item" href="#">Batch Summary</a><a class="collapse-item" href="rebatch.php"><i class="fa fa-recycle"></i>Add/ Edit Batch Info</a><a class="collapse-item" href="rebatch.php"><i class="fa fa-recycle"></i>Rebatch Candidate</a>
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
                                            <h6 class="collapse-header">INTERVIEW SUB-MENU:</h6><a class="collapse-item" href="accessdeniedphp">New Interview</a><a class="collapse-item" href="accessdenied.php">My Dashboard</a><a class="collapse-item" href="utilities-animation.html">Print Interview Attendance</a>
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
                                            <h6 class="collapse-header" style="color: var(--red);">USER CONFIG:</h6><a class="collapse-item" href="addons/addnewadmin.php">Add New User</a><a class="collapse-item" href="manageusers.php">Manage Users</a><a class="collapse-item" href="#">Privilege Config</a>
                                        </div>
                                    </div>
                                </div>
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-5" href="#collapse-5" role="button"><i class="fas fa-envelope"></i>&nbsp;<span>Message Center</span></a>
                                    <div class="collapse" id="collapse-5">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header" style="color: var(--red);">messaging center:</h6><a class="collapse-item" href="accessdenied.php">Compose Message</a><a class="collapse-item" href="accessdenied.php">View Messages</a>
                                            <h6 class="collapse-header" style="color: var(--red);">CONFIG:</h6><a class="collapse-item" href="#">Message Center Config</a>
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
                        <form action="search.php" method="GET" class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" name="searchparam" type="text" placeholder="Enter AppID to Search...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" name="searchbtn" type="submit" style="background: rgb(2,81,52);"><i class="fas fa-search"></i></button></div>
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><br><?Php Echo $a_fname, " ", $a_lname; ?><br><br></span><img class="border rounded-circle img-profile" src="assets/img/avatars/jpeg1.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="../config/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4"><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
                    <div class="col text-center">
                        <h1 class="text-capitalize">Administrator Dashboard</h1>
                    </div>
                    <div class="col">
                        <p class="text-capitalize" style="color: var(--blue);font-family: Oswald, sans-serif;text-align: center;">LOGGED IN AS: <span style="color: var(--green);"><?php echo $role;?>&nbsp;</span></p>
                        <div style="background: var(--secondary);height: 10px;border-radius: 11px;"></div>
                    </div>
                    <div style="height: 46px;"></div><!-- Start: Chart -->
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="font-weight-bold m-0" style="color: var(--indigo);">All Batches Population Overview</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;1A&quot;,&quot;1B&quot;,&quot;1C&quot;,&quot;2A&quot;,&quot;2B&quot;,&quot;3C&quot;,&quot;3D&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Population&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;180&quot;,&quot;180&quot;,&quot;180&quot;,&quot;182&quot;,&quot;180&quot;,&quot;185&quot;,&quot;50&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;,&quot;display&quot;:false},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;1&quot;],&quot;zeroLineBorderDash&quot;:[&quot;1&quot;],&quot;drawOnChartArea&quot;:true},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;1&quot;],&quot;zeroLineBorderDash&quot;:[&quot;1&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:20}}]}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="font-weight-bold m-0" style="color: var(--red);">Total Candidate Overview</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Midwifery&quot;,&quot;Nursing&quot;,&quot;Post Basic&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Total Capture&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;<?php
$sql = "SELECT * FROM `candidates` WHERE `progname` LIKE 'BM' ";
$result = mysqli_query($db,$sql);
$countBM = mysqli_num_rows($result);
echo "$countBM";
?>&quot;,&quot;<?php
$sql = "SELECT * FROM `candidates` WHERE `progname` LIKE 'BN' ";
$result = mysqli_query($db,$sql);
$countBM = mysqli_num_rows($result);
echo "$countBM";
?>&quot;,&quot;<?php
$sql = "SELECT * FROM `candidates` WHERE `progname` LIKE 'PBN' ";
$result = mysqli_query($db,$sql);
$countBM = mysqli_num_rows($result);
echo "$countBM";
?>&quot;],&quot;borderColor&quot;:&quot;#e42626&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;position&quot;:&quot;bottom&quot;,&quot;reverse&quot;:true,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-8">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="font-weight-bold m-0" style="color: rgb(116,223,78);">Today's Hall Population&nbsp; Overview</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;bar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Hall A&quot;,&quot;Hall B&quot;,&quot;Hall C&quot;,&quot;Hall D&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Computers&quot;,&quot;backgroundColor&quot;:&quot;rgb(78,115,223)&quot;,&quot;borderColor&quot;:&quot;rgba(116,223,78,0.51)&quot;,&quot;data&quot;:[&quot;45&quot;,&quot;55&quot;,&quot;45&quot;,&quot;28&quot;]},{&quot;label&quot;:&quot;Backup&quot;,&quot;backgroundColor&quot;:&quot;rgba(222,20,20,0.76)&quot;,&quot;data&quot;:[&quot;5&quot;,&quot;7&quot;,&quot;4&quot;,&quot;3&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;reverse&quot;:false},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;,&quot;display&quot;:false},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;1&quot;],&quot;zeroLineBorderDash&quot;:[&quot;1&quot;],&quot;drawOnChartArea&quot;:true},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#74778f&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;1&quot;],&quot;zeroLineBorderDash&quot;:[&quot;1&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#74778f&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;beginAtZero&quot;:true,&quot;padding&quot;:20}}]}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End: Chart -->
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
                                            <p class="m-0">Grand Total Entries</p>
                                            <p class="text-white-50 small m-0"><?php
$sql = "SELECT * FROM `candidates` ";
$result = mysqli_query($db,$sql);
$countBM = mysqli_num_rows($result);
echo "$countBM";
?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-warning shadow">
                                        <div class="card-body">
                                            <p class="m-0">Total Entries Today</p>
                                            <p class="text-white-50 small m-0"><?php
$tdate = date("Y-m-d");
$sql = "SELECT * FROM `candidates` WHERE `entrydate` LIKE '$tdate%'";
$result = mysqli_query($db,$sql);
$count_today = mysqli_num_rows($result);
echo "$count_today";
?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-danger shadow">
                                        <div class="card-body">
                                            <p class="m-0"><?php echo "$a_fname's "; ?>Total Entries</p>
                                            <p class="text-white-50 small m-0"><?php
//$tdate = date("Y-m-d");
$sql = "SELECT * FROM `candidates` WHERE `entryby` = '$uid'";
$result = mysqli_query($db,$sql);
$count_today = mysqli_num_rows($result);
echo "$count_today";
?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-secondary shadow">
                                        <div class="card-body">
                                            <p class="m-0"><?php echo "$a_fname's "; ?>Total Entries Today</p>
                                            <p class="text-white-50 small m-0"><?php
//$tdate = date("Y-m-d");
$sql = "SELECT * FROM `candidates` WHERE `entrydate` LIKE '$tdate%' AND `entryby` = '$uid'";
$result = mysqli_query($db,$sql);
$count_today = mysqli_num_rows($result);
echo "$count_today";
?></p>
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
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Bootstrap-Image-Uploader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>