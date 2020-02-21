<?php

include ('conn.php');
//  echo "me";
if($action=="add_application"){

 $leasee_name=$_POST['name_leasee'];
 $leasor_name=$_POST['name_leasor'];
 $leasee_email=$_POST['email_leasee'];
 $leasor_email=$_POST['email_leasor'];
 $leasee_contact=$_POST['contact_leasee'];
 $leasor_contact=$_POST['contact_leasor'];															
 $leasee_address=$_POST['$address_leasee'];
 $leasor_address=$_POST['$address_leasor'];
 $stool_name=$_POST['stool_name'];
 $land_loc=$_POST['land_loc'];
 $land_use=$_POST['land_use'];
 $plot_no=$_POST['plot_no'];
 $old_file_no=$_POST['old_file_no'];
 $alloc_date=$_POST['alloc_date'];
 $passport=$_POST['passport'];
 $lease_prep = $_POST['passport'];
 $lease_renew = $_POST['passport'];
 $change_use = $_POST['passport'];
 $assignment = $_POST['passport'];
 $mortgage = $_POST['passport'];
 $re_entry = $_POST['passport'];
 $attach_alloc = $_POST['passport'];
 $attach_cadastral = $_POST['passport'];
 $attach_mortgage = $_POST['passport'];
 $attach_assignment = $_POST['passport'];
 $attach_cover = $_POST['passport'];
 


 
}

?>