<?php
try{
    $dsn ="mysql:host=localhost;dbname=lms";
    $conn = new PDO($dsn,"root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }  catch (PDOException $e) {
       $e->getMessage();
        exit;
    }

    ?>