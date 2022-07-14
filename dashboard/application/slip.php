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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Print Photocard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="row">
        <div class="col-sm-2" style="text-align: center;"><img src="assets/img/FCTA%20NO%20BG.gif" width="80" height="80" style="text-align: right;"></div>
        <div class="col offset-0">
            <h3 class="fs-5 text-center">Federal Capital Territory Administration</h3>
            <h6 class="display-1 fs-5 text-center">Health and Human Services Secretariat</h6>
            <h1 class="display-1 fs-4 fw-normal text-center">FCT College of Nursing Sciences</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="border-bottom-style: solid;">
                        <h1 class="fs-3 text-center" style="padding: 0px;">Candidate Application Slip For Computer Based Entrance Examination</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
                          if (isset($_GET['app_id'])) {
    $search = $_GET['app_id'];
    $sql = "SELECT * FROM candidates INNER JOIN batchinfo ON candidates.batchid = batchinfo.batchid WHERE candidates.form_no LIKE '$search' OR candidates.appid LIKE '$search' OR candidates.sname LIKE '$search' OR candidates.phone1 LIKE '$search' LIMIT 1";
    $result = mysqli_query($db, $sql);
       if (mysqli_num_rows($result) == 0){
           echo "<h4 class='display-1 fs-4 fw-light'>Sorry! No Record Found Matching the Information you Entered</h4>";
        }
       
    else
    {
    $row = mysqli_fetch_assoc($result);
    echo "<div class='row'>
        <div class='col'>
            <div class='table-responsive text-capitalize border rounded-0 border-1'>
                <table class='table'>
                    <tbody>
                        <tr>
                            <td><label class='form-label'>Program Name:</label>
                                <h4 class='display-1 fs-4 fw-light'>".$row['progname']."</h4>
                            </td>
                            <td><label class='form-label'>Program Year:</label>
                                <h4 class='display-1 fs-4 fw-light'>".$row['progyr']." - ".$row['stream']."</h4>
                            </td>
                            <td><img class='rounded-circle placeholder border' width='120' height='120' alt='Passport' src=".$row['photolink']."></td>
                        </tr>
                        <tr>
                            <td><label class='form-label'>Candidate's Name:</label>
                                <h4 class='text-capitalize'>".$row['fname']." ".$row['oname']." ".$row['sname']." (".$age = (date('Y') - date('Y',strtotime($row['dob']))).")</h4>
                            </td>
                            <td><label class='form-label'>Form Number:</label>
                                <h4 class='display-1 fs-4 fw-light'>".$row['form_no']."</h4>
                            </td>
                            <td><label class='form-label'>Application Number:</label>
                                <h3>".$row['appid']."</h3>
                            </td>
                        </tr>
                        <tr class='float-start'>
                            <td class='float-start'><label class='form-label fs-6 fw-light'>DoB:</label>
                                <h4 class='display-1 fw-normal' style='font-size: 14px;'>".$row['dob']."</h4>
                            </td>
                            <td class='float-start'><label class='form-label fs-6 fw-light'>Sex:</label>
                                <h4 class='display-1 fw-normal' style='font-size: 14px;'>".$row['gender']."</h4>
                            </td>
                            <td class='float-start'><label class='form-label fs-6 fw-light'>State:</label>
                                <h4 class='display-1 fw-bold' style='font-size: 14px;'>".$row['state']."</h4>
                            </td>
                            <td class='float-start'><label class='form-label fs-6 fw-light'>Primary Phone:</label>
                                <h4 class='display-1 fw-bold' style='font-size: 14px;'>".$row['phone1']."</h4>
                            </td>
                            <td class='float-start'><label class='form-label fs-6 fw-light'>Alt. Phone:</label>
                                <h4 class='display-1 fw-bold' style='font-size: 14px;'>".$row['phone2']."</h4>
                            </td>
                        </tr>
                        <tr>
                            <td class='text-start'><label class='form-label fs-6 fw-light'>Batch Number:</label>
                                <h4 class='display-1 fs-6 fw-bold'>".$row['bcode']."</h4>
                            </td>
                            <td><label class='form-label fs-6 fw-light'>Exam Date:</label>
                                <h4 class='display-1 fs-6 fw-normal'>".$row['edate']."</h4>
                            </td>
                            <td><label class='form-label fs-6 fw-light'>Exam Time:</label>
                                <h4 class='display-1 fs-6 fw-normal'>".$row['etime']."</h4>
                            </td>
                        </tr>
                        <tr>
                            <td class='text-start' style='text-align: right;'><label class='form-label fs-6 fw-bolder'>Verification Officer's Signature &amp; Date:</label></td>
                            <td></td>
                            <td rowspan='2'><label class='form-label fs-6 fw-bolder'>Stamp:</label></td>
                        </tr>
                        <tr style='border-bottom-style: none;'></tr>
                        <tr>
                            <td colspan='3'><label class='form-label fs-6 fw-light'>ICT Comment (Optional):</label></td>
                        </tr>
                        <tr>
                            <td colspan='3' rowspan='0'>
                                <h4 class='display-1 fw-normal' style='font-size: 17.64px;'>Instruction to all candidates:</h4>
                                <ul style='font-size: 12px;'>
                                    <li>Arrive on time. do not miss your exam date/ time.</li>
                                    <li>come with this slip and your payment receipt to the examination venue</li>
                                    <li>do not pay money to anybody</li>
                                    <li class='text-lowercase'>often Visit our official website after the examination for list of shortlisted candidates - www.fcthhss.abj.gov.ng</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><label class='form-label fw-light' style='font-size: 14px;'>Print Date:</label><label class='form-label fw-light' style='font-size: 14px;'>&nbsp;07/07/2022</label>
        </div>
    </div>
    ";
}
                          }
                           mysqli_close($db);
    ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>