<?php

include ('conn.php');
 
if($action=="new_visit"){       

$visitorName = $_POST['visitor_name']; 
$visitorContact = $_POST['visitor_contact'];
$visitPurpose = $_POST['pov'];
$timeVisit = date('Y-m-d H:i:s');
$visitorID = mt_rand(1000000000,9999999999);
$officerApp = $_POST['officer_appointment'];
$complaint = $_POST['complaint'];
$msg ="";

if(empty($visitorName) || empty($visitPurpose)){

	$msg = '<div class="alert alert-danger fade show" role="alert">
	<div class="alert-icon"><i class="flaticon-warning"></i></div>
	<div class="alert-text">Please Enter all Necessary Details.</div>
	<div class="alert-close">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true"><i class="la la-close"></i></span>
		</button>
	</div>
	</div>';
	
	include("public/members/add_visit.php");
	}


else{
	$sql= "INSERT INTO `visits_table`(`visitor_id`,`visitor_name`,`visitor_contact`,`purpose_of_visit`,`time_of_visit`, `complaint`, `appointment_officer`)VALUES(:1, :2, :3, :4, :5, :6, :7)";
	try {
$insert = $conn->prepare($sql);
$insert->bindValue(':1', $visitorID);
$insert->bindValue(':2', $visitorName);
$insert->bindValue(':3', $visitorContact);
$insert->bindValue(':4', $visitPurpose);
$insert->bindValue(':5', $timeVisit);
$insert->bindValue(':6', $complaint);
$insert->bindValue(':7', $officerApp);

$inserted = $insert->execute();
if($inserted){
$msg = '<div class="alert alert-success fade show" role="alert">
<div class="alert-icon"><i class="flaticon-warning"></i></div>
<div class="alert-text">New Visit Record Has Been Added Successfully!</div>
<div class="alert-close">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true"><i class="la la-close"></i></span>
	</button>
</div>
</div>';

//echo $msg;
include("public/members/add_visit.php");
}

	}
	
	catch (PDOException $e) {
		echo $e->getMessage();
		exit;
		
		}
	}
																	

}

?>