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
    <title>Rebatch Candidate - CVP+</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Image-Uploader.css">
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
                </ul>
                <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #025134;">
                    <div class="container-fluid d-flex flex-column p-0">
                        <hr class="sidebar-divider my-0">
                        <ul class="navbar-nav text-light" id="accordionSidebar-1">
                            <li class="nav-item"><a class="nav-link text-muted" href="welcome.php"><i class="fas fa-tachometer-alt"></i><span class="text-white">&nbsp;Dashboard</span></a></li>
                            <hr class="sidebar-divider">
                            <div class="sidebar-heading">
                                <p class="mb-0">INTERFACE</p>
                            </div>
                            <li class="nav-item">
                                <div><a class="btn btn-link text-light nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button"><i class="fas fa-users-cog"></i>&nbsp;<span>Application</span></a>
                                    <div class="collapse" id="collapse-1">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header" style="color: var(--blue);">CAPTURING SUB-MENU:</h6><a class="collapse-item" href="newapp.php">New Application</a><a class="collapse-item" href="editapp.php">Search/Edit Application</a><a class="collapse-item" href="printphotocard.php">Print Photocard</a>
                                            <h6 class="collapse-header" style="color: var(--blue);">BATCHING SUB-MENU:</h6><a class="collapse-item" href="cards.html">Batch Summary</a><a class="collapse-item" href="rebatch.php"><i class="fa fa-recycle"></i>Add/ Edit Batch Info</a><a class="collapse-item" href="rebatch.php"><i class="fa fa-recycle"></i>Rebatch Candidate</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button"><i class="fas fa-binoculars"></i>&nbsp;<span>Verification</span></a>
                                    <div class="collapse" id="collapse-2">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header">VERIFCATION SUB-MENU:</h6><a class="collapse-item" href="utilities-color.html">Verification Summary</a><a class="collapse-item" href="utilities-border.html">Verify Candidate</a><a class="collapse-item" href="utilities-animation.html">Print Attendance</a><a class="collapse-item" href="utilities-other.html">Other</a>
                                        </div>
                                    </div>
                                </div>
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-4" href="#collapse-4" role="button"><i class="fas fa-microphone-alt"></i>&nbsp;<span>Interview</span></a>
                                    <div class="collapse" id="collapse-4">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header">INTERVIEW SUB-MENU:</h6><a class="collapse-item" href="utilities-color.html">New Interview</a><a class="collapse-item" href="utilities-border.html">My Dashboard</a><a class="collapse-item" href="utilities-animation.html">Print Attendance</a>
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
                                            <h6 class="collapse-header" style="color: var(--red);">USER CONFIG:</h6><a class="collapse-item" href="#">Add New User</a><a class="collapse-item" href="#">Privilege Config</a>
                                        </div>
                                    </div>
                                </div>
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-5" href="#collapse-5" role="button"><i class="fas fa-envelope"></i>&nbsp;<span>Message Center</span></a>
                                    <div class="collapse" id="collapse-5">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header" style="color: var(--red);">messaging center:</h6><a class="collapse-item" href="#">Compose Message</a><a class="collapse-item" href="#">View Messages</a>
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
                                <hr style="color: var(--white);border-radius: 0px;border-width: 6px;border-top-width: 1px;border-top-color: rgba(252,250,250,0.1);width: 200px;"><a class="nav-link" href="charts.html"><i class="fas fa-chart-area"></i><span>&nbsp;Charts</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="tables.html"><i class="fas fa-table"></i><span>&nbsp;Tables</span></a></li>
                            <hr class="sidebar-divider">
                        </ul>
                        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle-1" type="button"></button></div>
                    </div>
                </nav>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" name="searchparam" placeholder="Enter AppID to Search...">
                                <div class="input-group-append"><button name="searchbtn" class="btn btn-primary py-0" type="button" style="background: rgb(2,81,52);"><i class="fas fa-search"></i></button></div>
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><br><?Php Echo $a_fname, " ", $a_lname; ?><img class="border rounded-circle img-profile" src="assets/img/avatars/jpeg1.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="../config/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Batch/ Re-batch Candidate</h3>

                    <?php 
                           if (isset($_GET['rebatchbtn'])) {
    $search = $_GET['searchparam'];
    $sql = "SELECT * FROM candidates INNER JOIN batchinfo ON candidates.batchid = batchinfo.batchid WHERE candidates.form_no LIKE '%{$search}%' OR candidates.appid LIKE '%{$search}%' LIMIT 1";
    $result = mysqli_query($db, $sql);
         if (mysqli_num_rows($result) == 1)
       {
        $row = mysqli_fetch_assoc($result);
           echo "
                 <div class='row mb-3'>
                        <div class='col-lg-4'>
                            <div class='card mb-3'>
                                <div class='card-body text-center shadow'><img class='rounded-circle mb-3 mt-4' src=application/".$row['photolink']." width='160' height='160'>
                                    <div class='mb-3'><button class='btn btn-primary btn-sm' type='button'>Change Photo</button></div>
                                </div>
                            </div>
                            <div class='card shadow mb-4'>
                                <div class='card-header py-3'>
                                    <h6 class='text-primary font-weight-bold m-0'>Candidate Name:</h6>
                                    <h5 class='text-capitalize'>".$row['sname']." ".$row['fname']." ".$row['oname']."</h5>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6 col-lg-4'>
                            <div class='card shadow mb-4'>
                                <div class='card-header py-3'>
                                    <h6 class='text-primary font-weight-bold m-0'>Application Number:</h6>
                                    <h5 class='text-capitalize'>".$row['appid']."</h5>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6 col-lg-4'>
                            <div class='card shadow mb-4'>
                                <div class='card-header py-3'>
                                    <h6 class='text-primary font-weight-bold m-0'>Form Number:</h6>
                                    <h5 class='text-capitalize'>".$row['form_no']."</h5>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6 col-lg-4'>
                            <div class='card shadow mb-4'>
                                <div class='card-header py-3'>
                                    <h6 class='text-primary font-weight-bold m-0'>Program:</h6>
                                    <h5 class='text-capitalize'>".$row['progname']."</h5>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6 col-lg-4'>
                            <div class='card shadow mb-4'>
                                <div class='card-header py-3'>
                                    <h6 class='text-primary font-weight-bold m-0'>State:</h6>
                                    <h5 class='text-capitalize'>".$row['state']."</h5>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-8>'
                            <div class='row mb-3 d-none'>
                                <div class='col'>
                                    <div class='card text-white bg-primary shadow'>
                                        <div class='card-body'>
                                            <div class='row mb-2'>
                                                
                                                <div class='col-auto'><i class='fas fa-rocket fa-2x'></i></div>
                                            </div>
                                            <p class='text-white-50 small m-0'><i class='fas fa-arrow-up'></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col'>
                                    <div class='card text-white bg-success shadow'>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col'>
                                    <div class='card shadow mb-3'>
                                        <div class='card-header py-3'>
                                            <p class='text-primary m-0 font-weight-bold'>Batch Information</p>
                                        </div>
                                        <div class='card-body'>
                                            <form action='process_rebatch.php' method='POST' enctype='multipart/form-data'>
                                                <div class='form-row'>
                                                    <div class='col-md-4'>
                                                        <div class='form-group'><label for='currbcode'><strong>Current Batch Number</strong></label><span>(e.g 3D)</span><input class='form-control' type='text' name='currbcode' value=".$row['bcode']." readonly=''></div>
                                                    </div>
                                                    <div class='col-md-5'>
                                                        <div class='form-group' style='margin: 8px;'><label for='purpose'><strong>Exam Date</strong></label><label for='amount' style='margin: -1px;'><input class='form-control' type='date' name='curredate' value=".$row['edate']." readonly='' style='margin: -6px;'><br></label></div>
                                                    </div>
                                                </div>
                                                <div class='form-row'>
                                                    <div class='col'>
                                                        <div class='form-group'><label for='comment'><strong>Enter New Batch</strong></label><span>e.g 4A, 1C</span><input class='form-control' type='text' name='newbcode' maxlenght='2' required=''></div>
                                                    </div>
                                                    <div class='col'>
                                                        <div class='form-group'><label for='comment'><strong>Hall</strong></label><span>(e.g A, B)</span><input class='form-control' type='text' name='hall' maxlenght='2' required=''></div>
                                                    </div>
                                                    <div class='col'>
                                                        <div class='form-group'><label for='eid'><strong>Batch ID</strong><br></label><input class='form-control' type='text' name='batchid' value=".$row['batchid']." readonly='' style='width: 100px;'></div>
                                                    </div>
                                                </div>
                                                <div class='form-group'><button class='btn btn-primary btn-sm' type='submit' name='rebatchbtn'>Change Batch</button></div>
                                            </form>
                                        </div>
                                    </div>";
                                     
       }else{mysqli_free_result($result);
       }
                                echo "Sorry! No Result Found.";
                                }else{
                                echo "ERROR: Could not Execute $sql. Search for Candidate First " .mysqli_error($db);
                                
                                // Close connection
                            
                                mysqli_close($db);
                            }       
                        
                ?>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Contact Settings</p>
                                        </div>
                                        <div class="card-body"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Settings</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form>
                                        <div class="form-group"></div>
                                    </form>
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