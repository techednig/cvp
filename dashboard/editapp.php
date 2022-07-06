<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Application - CVP+</title>
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
                                            <h6 class="collapse-header" style="color: var(--red);">BATCHING CONFIG:</h6><a class="collapse-item" href="hallbatchconfig.html">Date/ Batch Config</a><a class="collapse-item" href="hallbatchconfig.php">Hall Capacity Config</a>
                                            <h6 class="collapse-header" style="color: var(--red);">USER CONFIG:</h6><a class="collapse-item" href="404.html">Add New User</a><a class="collapse-item" href="blank.html">Privilege Config</a>
                                        </div>
                                    </div>
                                </div>
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-5" href="#collapse-5" role="button"><i class="fas fa-envelope"></i>&nbsp;<span>Message Center</span></a>
                                    <div class="collapse" id="collapse-5">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header" style="color: var(--red);">messaging center:</h6><a class="collapse-item" href="#">Compose Message</a><a class="collapse-item" href="#">View Messages</a>
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
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Enter AppID to Search...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button" style="background: rgb(2,81,52);"><i class="fas fa-search"></i></button></div>
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
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="../config/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <p class="text-capitalize" style="color: var(--blue);font-family: Oswald, sans-serif;text-align: center;">LOGGED IN AS: <span style="color: var(--green);"><?php echo $role;?></span></p>
                <div class="container-fluid">
                    <div class="col text-center">
                        <h3 class="text-capitalize">Edit Existing application</h3>
                    </div>
                    <div class="col">
                        <div style="background: var(--secondary);height: 10px;border-radius: 11px;"></div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div style="height: 14px;"></div>
                                <div class="card m-auto" style="max-width:850px">
                                    <div class="card-body">
                                        <form method="GET" class="d-flex align-items-center"><i class="fas fa-search d-none d-sm-block h4 text-body m-0"></i><input class="form-control form-control-lg flex-shrink-1 form-control-borderless" type="search" placeholder="Search AppID, Name or Form no" name="searchbar"><button class="btn btn-success btn-lg" type="submit">Search</button></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 14px;"></div>
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Program Info</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col-md-5">
                                            <div class="form-group"><label for="email" style="color: var(--red);"><strong>Program Name</strong></label><select class="form-control form-control-lg" style="height: 37px;padding-top: 3px;padding-bottom: 3px;font-size: 12px;width: 100%;" required="" name="nationality" value="nationality">
                                                    <option value="BM" selected="">Basic Midwifery</option>
                                                    <option value="PBN">Post-Basic Nursing</option>
                                                    <option value="BN">Basic Nursing</option>
                                                </select></div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group"><label for="email" style="color: var(--red);"><strong>Year</strong></label><select class="form-control form-control-lg" style="height: 37px;padding-top: 3px;padding-bottom: 3px;font-size: 12px;width: 100%;" required="" name="nationality" value="nationality">
                                                    <option value="2022" selected="">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                </select></div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group"><label for="email" style="color: var(--red);"><strong>Stream</strong></label><select class="form-control form-control-lg" style="height: 37px;padding-top: 3px;padding-bottom: 3px;font-size: 12px;width: 100%;" required="" name="nationality" value="nationality">
                                                    <option value="A" selected="">A</option>
                                                    <option value="B">B</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Candidate Bio</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Surname*</strong><br></label><input class="form-control" type="text" name="username" autocomplete="off" required=""></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="email"><strong>First Name*</strong></label><input class="form-control" type="email" name="email" autocomplete="off" required=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Other Name</strong></label><input class="form-control" type="text" name="first_name" autocomplete="off"></div>
                                            <div class="form-group"><label for="first_name"><strong>Other Name</strong></label><input class="form-control" type="text" name="first_name"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="last_name"><strong>Date of Birth*</strong></label><input class="form-control" type="date" required=""></div>
                                        </div>
                                    </div>
                                    <div class="form-group"></div>
                                </form>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Contact Information</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group"><label for="address"><strong>Email Address*</strong><br></label><input class="form-control" type="text" name="address" inputmode="email" autocomplete="off" required=""></div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="city"><strong>Phone #</strong></label><input class="form-control" type="text" name="phone1" inputmode="tel" maxlength="11" minlength="11" required=""></div>
                                            <div class="form-group"><label for="city"><strong>State</strong></label><input class="form-control" type="text" name="phone1" inputmode="tel" maxlength="11" minlength="11" required=""></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="country"><strong>Alternate Phone #</strong></label><input class="form-control" type="text" name="phone2" inputmode="tel" maxlength="17"></div>
                                            <div class="form-group"><label for="country"><strong>Nationality</strong></label><select class="form-control form-control-lg" style="height: 37px;padding-top: 3px;padding-bottom: 3px;font-size: 12px;width: 100%;" required="" name="nationality" value="nationality">
                                                    <option value="Nigerian" selected="">Nigerian</option>
                                                    <option value="Non Nigerian">Non Nigerian</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col">
                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" required="" name="verification" value="1"><label class="form-check-label text-capitalize" for="formCheck-1" style="font-size: 12px;font-family: Nunito, sans-serif;">I have checked and confirmed that the selected program for this candidate is correct.</label></div>
                                        </div>
                                    </div><div class="bootstrap_img_upload">
<div class="container py-5">

    <header class="text-white text-center">
        <h1 class="display-4">Passport Upload</h1>
        <img src="https://res.cloudinary.com/mhmd/image/upload/v1564991372/image_pxlho1.svg" alt="" width="150" class="mb-4">
    </header>


    <div class="row py-4">
        <div class="col-lg-6 mx-auto">

            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                </div>
            </div>

            <!-- Uploaded image area-->
            <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

        </div>
    </div>
</div>
</div>
                                    <div class="form-group" id="formg3">
                                        <div style="width: 425.6px;height: 17px;margin: 0px;padding: 14px;"></div>
                                    </div>
                                    <div class="form-group" id="formg-1"><button class="btn btn-primary btn-sm" type="reset" style="background: var(--red);">Reset</button><button class="btn btn-primary btn-sm" type="submit" style="margin: 4px;">Save Record</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-5"></div>
                    <div class="row"></div>
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Vaccination Overview</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;2019&quot;,&quot;2020&quot;,&quot;2021&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;0&quot;,&quot;0&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Vaccination Actions</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Unvaccinated&quot;,&quot;Vaccinated&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Documentation&quot;,&quot;backgroundColor&quot;:[&quot;#e82020&quot;,&quot;#1cc88a&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;99&quot;,&quot;1&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;position&quot;:&quot;bottom&quot;,&quot;reverse&quot;:true,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-primary shadow"></div><a class="btn btn-primary" role="button" href="rebatch.php">Make New Payment</a>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-success shadow"></div>
                                    <div class="form-group"><a class="btn btn-primary" role="button" href="#">Upload File</a><input type="file"></div>
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