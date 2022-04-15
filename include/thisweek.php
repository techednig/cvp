<?php
	
//$upcoming = "SELECT event_name, event_status, host, venue, from_date, start_time FROM events WHERE event_status = 'Active' && from_date = curdate()";

$upcoming = "SELECT event_name, event_status, host, venue, from_date, to_date, start_time FROM events WHERE from_date >= DATE_SUB(NOW(), INTERVAL 1 WEEK) && event_status = 'Active' ORDER BY from_date DES";

if($result = mysqli_query($db, $upcoming)){
                if(mysqli_num_rows($result) > 0){
  // output data of each row
  while ($row = mysqli_fetch_array($result)) {

$d1 = strtotime(".$row[from_date].");
$td = strtotime(".$row[to_date].");
// Countdown to Date
$d2 = ceil(($d1-time())/60/60/24);

// Format Date Output
$fromd = date('d-m-Y', $d1);
$tod = date('d-m-Y', $td);

$dd = (strtotime(".$row[to_date].") - strtotime(".$row[from_date].")) / (60 * 60 * 24) + 1;
//$dd = date_diff((strtotime(".$row[to_date].")), (strtotime(".$row[to_date].")));


//echo date_format($date, 'Y-m-d H:i:s');

//$dd = ceil(abs($tod - $fromd) / 86400) + 2;
//$dd = $d + 2;



echo "<div>
        <div class='col'>
            <div class='row row-striped'>
                <div class='col'><span class='badge badge-pill badge-primary col-2 text-center' style='width: 125px;height: 28px;background: var(--red);font-size: 16px;color: var(--gray-dark);'>Days Left:&nbsp;<span style='color: var(--white);'>".$d2."</span></span>
                    <h5><i class='fa fa-paperclip'></i>&nbsp;$row[event_name]</h5>
                    <div>
                        <ul class='list-inline text-left' style='width: 823.6px;'>
                            <li class='list-inline-item' style='font-family: 'Alfa Slab One', serif;'><i class='fa fa-calendar-check-o'></i>&nbsp;Start Date:&nbsp;<span style='background: var(--white);'>".$fromd."</span></li>
                            <li class='list-inline-item' style='font-family: 'Alfa Slab One', serif;'><i class='fa fa-calendar-times-o'></i>&nbsp;End Date:&nbsp;<span style='background: var(--white);'>".$tod."</span></li>
                            <li class='list-inline-item' style='font-family: 'Alfa Slab One', serif;'><i class='fa fa-clock-o'></i>&nbsp;Time:&nbsp;<span style='background: var(--white);'>$row[start_time]</span></li>
                            <li class='list-inline-item' style='font-family: 'Alfa Slab One', serif;'><i class='fa fa-arrows-h'></i>&nbsp;Duration:&nbsp;<span style='background: var(--white);'><span class='badge badge-primary' style='margin: 1px;padding: 1px 4.8px;'>".$dd."</span>day(s)</span></li>
                            <li class='list-inline-item' style='font-family: 'Alfa Slab One', serif;'><i class='fa fa-location-arrow'></i>&nbsp;Venue:&nbsp;<span style='background: var(--white);'>$row[venue]</span></li>
                            <li class='list-inline-item' style='background: var(--green);border-style: none;border-top-width: 0px;border-bottom-style: solid;border-bottom-color: var(--red);border-radius: 3px;color: var(--white);font-family: 'Alfa Slab One', serif;'><i class='fa fa-handshake-o'></i>&nbsp;Host:&nbsp;<span style='background: var(--dark);'>$row[host]</span></li>
                        </ul>
                    </div>
                    <div></div>
                </div>
                <div class='col' data-network='whatsapp' data-title='$row[event_name]' style='width: 102px;'><button class='btn btn-primary' type=button' style='border-radius: 21px;'><i class='fa fa-share-alt'></i>&nbsp;Share</button></div>
            </div></div>";
            
            
            }
                }
} else {
  echo "<div class='col-10'>
				<h4 class='text-uppercase'><strong>NO EVENT SCHEDULED THIS WEEK</strong></h4></div>";
}

//$conn->close();
            ?>