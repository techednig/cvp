<?php
include_once ("../include/server.php");
include_once ("../include/sessioncheck.php");
include_once ("../include/p1checker.php");

if (isset($_GET['searchbtn'])) {
    $searchparam = mysqli_real_escape_string($db, $_GET['searchparam']);
    $query = "SELECT * FROM 'candidates' INNER JOIN 'batchinfo' ON candidates.batchid = batchinfo.batchid WHERE candidates.appid OR candidates.sname OR candidates.form_no OR candidates.phone1 = %$searchparam% ORDER BY candidates.appid DESC";
   $i=1;
   if($result = mysqli_query($db, $query)){
       if (mysqli_num_rows($result) > 0){
           echo "
           <table class='table my-0' id='dataTable'>
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>AppID</th>
                                            <th>FormNo</th>
                                            <th>State</th>
                                            <th>Program</th>
                                            <th>Batch</th>
                                            <th>Exdate</th>
                                            <th>EntryBy</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>"
                                    ;
                                    while ($row = mysqli_fetch_array($result)){
                                        
                                        echo "
                                    <tbody>
                                        <tr>
                                            <td><img class='rounded-circle mr-2' width='30' height='30' src=''.$row['candidates.photolink'].''>'.$row['candidate.sname'].'' '''.$row['candidate.fname'].'' '''.$row['candidate.oname'].'</td>
                                            <td>".$row['candidates.appid']."</td>
                                            <td>".$row['candidates.form_no']."</td>
                                            <td>".$row['candidates.state']."</td>
                                            <td>".$row['candidates.progname']."</td>
                                            <td>".$row['batchinfo.bcode']."</td>
                                            <td>".$row['batchinfo.edate']."</td>
                                            <td>".$row['candidates.entryby']."</td>
                                            <td>
                                                <div>
                                                    <div class='btn-toolbar'>
                                                        <div class='btn-group' role='group'><button class='btn btn-primary' type='button' style='border-radius: 17px;'><i class='fa fa-edit'></i></button><button class='btn btn-primary' type='button' style='border-radius: 26px;'><i class='fa fa-recycle'></i></button></div>
                                                        <div class='btn-group' role='group' style='width: 14.667px;height: 60px;'><button class='btn btn-primary' type='button' style='border-radius: 40px;background: var(--red);'><i class='fa fa-trash-o'></i></button><button class='btn btn-primary' type='button' style='border-radius: 31px;width: 121.1354px;background: var(--success);'><span><i class='fa fa-user-plus'></i><i class='fas fa-microphone-alt'></i></span></button></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>"
                                    
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
       }
   } 
}