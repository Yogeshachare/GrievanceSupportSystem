<?php

session_start();

if (isset($_POST['matheran-submit'])){
    require 'dbh.inc.php';

    $username = $_SESSION['userUid'];
    $license = $_POST['license'];
    $bikename = $_POST['bikename'];
    $bikevin = $_POST['bikevin'];
    $bloodgroup = $_POST['bloodgroup'];

    if (empty($username) || empty($license) || empty($bikename) ||empty($bikevin) || empty($bloodgroup)){
        header("Location: ../registermatheran.php?erroremptyfield&admissionNo=".$username."mail=".$license);
        exit();
    }
    else{
        $sql = "INSERT INTO matheran (username,license, bikeName ,bikeVin,bloodGroup) VALUES (?,?,?,?,?)";
    	$stmt = mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt,$sql)) {
    	header("Location: ../registermatheran.php?error=sqlerror");
    	exit();   	
        }
        else{
            mysqli_stmt_bind_param($stmt, "sssss" , $username , $license, $bikename, $bikevin,$bloodgroup);
    		mysqli_stmt_execute($stmt);
    		header("Location: ../registermatheran.php?grievenceregistered=success");
    		exit();
            }      
    }
}    