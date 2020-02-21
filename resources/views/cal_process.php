<?php
// if(isset($_GET['cal_dmoney'])){


// if($land_class == 1){
// 	$result_dmoney= $rate1 * $land_size;
// }
// elseif($land_class == 2){
// 	$result_dmoney= $rate2* $land_size;
// }

// elseif($land_class == 3){
// 	$result_dmoney= $rate3* $land_size;
// }
// else{
// 	$error="something";
// }

// }


function compute_dmoney(){
$land_class= $_POST['land_class'];
$rate1= $_POST['sr1'];
$rate2= $_POST['sr2'];
$rate3= $_POST['sr3'];
$land_size= $_POST['land_sizeVal'];
 switch ($land_class){
     case "1ST CLASS":
     $result_dmoney= $rate1 * $land_size;
     return $result_dmoney;
     break;

     case "2ND CLASS":
     $result_dmoney= $rate2 * $land_size;
     return $result_dmoney;
     break;

     case "3RD CLASS":
     $result_dmoney= $rate3 * $land_size;
     return $result_dmoney;
     break;

     default:
     echo "invalid operation";
 }

}
// $sadi='1';
// header("location:valuation.php?message=$sadi");

?>