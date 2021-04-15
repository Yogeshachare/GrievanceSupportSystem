<?php
    include 'database.inc.php';
    $admissionNum = $_POST['admissionNo'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    $grievenceType = $_POST['grievence'];
    $description = $_POST['descript'];

    if (empty($admissionNum) || empty($email) || empty($branch) ||empty($grievenceType) || empty($description)){
        header("Location: ../lodgeGrievence.php?erroremptyfield&admissionNo=".$admissionNum."mail=".$email);
        exit();
    }
    elseif ($grievenceType == "academicgrievence"){
        $sql = "INSERT INTO academicgrievence (admissionNo,email, branch ,grievenceType,description) VALUES (?,?,?,?,?)";
    	$stmt = mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt,$sql)) {
    	header("Location: ../lodgeGrievence.php?error=sqlerror");
    	exit();   	
        }
        else{
            mysqli_stmt_bind_param($stmt, "sssss" , $admissionNum , $email, $branch, $grievenceType,$description);
    		mysqli_stmt_execute($stmt);
    		header("Location: ../LodgeGrievence.php?grievenceregistered=success");
    		exit();
            }      
    }
    elseif ($grievenceType == "administrativedecision"){
        $sql = "INSERT INTO administrativedecision (admissionNo,email, branch ,grievenceType,description) VALUES (?,?,?,?,?)";
    	$stmt = mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt,$sql)) {
    	header("Location: ../lodgeGrievence.php?error=sqlerror");
    	exit();   	
        }
        else{
            mysqli_stmt_bind_param($stmt, "sssss" , $admissionNum , $email, $branch, $grievenceType,$description);
    		mysqli_stmt_execute($stmt);
    		header("Location: ../LodgeGrievence.php?grievenceregistered=success");
    		exit();
            }
        }
        elseif ($grievenceType == "harassment"){
            $sql = "INSERT INTO harassment (admissionNo,email, branch ,grievenceType,description) VALUES (?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../lodgeGrievence.php?error=sqlerror");
            exit();   	
            }
            else{
                mysqli_stmt_bind_param($stmt, "sssss" , $admissionNum , $email, $branch, $grievenceType,$description);
                mysqli_stmt_execute($stmt);
                header("Location: ../LodgeGrievence.php?grievenceregistered=success");
                exit();
                }
            }
            elseif ($grievenceType == "unfairtreatment"){
                $sql = "INSERT INTO unfairtreatment (admissionNo,email, branch ,grievenceType,description) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                header("Location: ../lodgeGrievence.php?error=sqlerror");
                exit();   	
                }
                else{
                    mysqli_stmt_bind_param($stmt, "sssss" , $admissionNum , $email, $branch, $grievenceType,$description);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../LodgeGrievence.php?grievenceregistered=success");
                    exit();
                    }
                }     