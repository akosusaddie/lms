<?php
session_start();
function base_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
    if (isset($_SERVER['HTTP_HOST'])) {
        $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
        $hostname = $_SERVER['HTTP_HOST'];
        $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

        $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
        $core = $core[0];

        $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
        $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
        $base_url = sprintf( $tmplt, $http, $hostname, $end );
    }
    else $base_url = 'http://localhost/';

    if ($parse) {
        $base_url = parse_url($base_url);
        if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
    }

    return $base_url;
}


 try{
    $dsn ="mysql:host=localhost;dbname=lms";
    $conn = new PDO($dsn,"root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }  catch (PDOException $e) {
       $e->getMessage();
        exit;
    }

$statusMsg = '';
$date= "date(Y-m-d H:i:s)";

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["fileToUpload"]["name"]);
$targetFilePath = $targetDir . $fileName;
$picpath=base_url().$targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["fileToUpload"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            try {
                $id=$_SESSION["user_id"];
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql= "INSERT INTO `images`(`image_path`, `user_id`, `upload_date`)VALUES ('".$picpath."',$id, NOW())";
                $stmt = $conn->prepare($sql);
                 $stmt->bindParam(':1', $picpath);
                 $stmt->bindParam(':2', $id);
                 $stmt->bindParam(':3', $date);
                  $inserted=$stmt->execute();
             }
             catch (PDOException $e) {
                 echo $e->getMessage();
                     exit;
                }
            if($inserted){
            $sadi="1";
            header("location:profile.php?message=$sadi");
            }else{
                $sad="0";
                header("location:profile.php?err=$sad");
            }
        }else{


            $sad="1";
            header("location:profile.php?err=$sad");
        }
    }else{
        $sad="2";
        header("location:profile.php?err=$sad");
    }
}else{
    $sad="3";
    header("location:profile.php?err=$sad");
}









    ?>