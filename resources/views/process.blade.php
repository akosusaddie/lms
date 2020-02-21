<?php

include ('conn.blade.php');
 
if($action=="new_user"){ 

$fullname=$_POST['fname_user'];
$username=$_POST['username'];
 $password=$_POST['password_user'];
// $password=sha1($password);
$role=$_POST['role_user'];
$division=$_POST['division_user'];
$department=$_POST['dept_user'];
$region=$_POST['region_user'];
$contact=$_POST['contact_user'];
$email=$_POST['email_user'];
$add_time = date('Y-m-d H:i:s');
$msg ="";
	$select= $conn->prepare("SELECT * FROM  users_table WHERE email = '$email'");
	$select->execute();
										
if ($select->rowCount() == 1) {
	$msg = "This user has already been registered"; 
} 									
	else{
	$sql= "INSERT INTO `users_table`(`fullname`,`email`,`contact`,`region`,`division`,`department`,`role_user`,`username`,`password_user`,`add_time`)VALUES(:1, :2, :3, :4, :5, :6, :7, :8, :9,:10)";
	try {
$insert = $conn->prepare($sql);
$insert->bindValue(':1', $fullname);
$insert->bindValue(':2', $email);
$insert->bindValue(':3', $contact);
$insert->bindValue(':4', $region);
$insert->bindValue(':5', $division);
$insert->bindValue(':6', $department);
$insert->bindValue(':7', $role);
$insert->bindValue(':8', $username);
$insert->bindValue(':9', $password);
$insert->bindValue(':10', $add_time);
$inserted = $insert->execute();
if($inserted){

	$msg = '<div class="alert alert-success fade show" role="alert">
	<div class="alert-icon"><i class="flaticon-warning"></i></div>
	<div class="alert-text">User has successfully been registered!</div>
	<div class="alert-close">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true"><i class="la la-close"></i></span>
		</button>
	</div>
	</div>';

	include("cls/add_user.php");
}
exit;
	}
											
catch (PDOException $e) {
echo $e->getMessage();
exit;
 }
	}
									
}


?>