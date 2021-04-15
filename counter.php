<?php
require 'includes/dbh.inc.php';

$pending = "pending";
$completed = "completed";
$NotCompleted = "Not Completed";

$sql1 = "SELECT `status` FROM academicgrievence WHERE status= ?";
    	$stmt1 = mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt1,$sql1)) {
    		header("Location: ../landing.php?error=sqlerror");
    		exit();
    		
    	}
    	else{
    		mysqli_stmt_bind_param($stmt1, "s" , $pending);
    		mysqli_stmt_execute($stmt1);
    		mysqli_stmt_store_result($stmt1);
    		$resultCheck1 = mysqli_stmt_num_rows($stmt1);
        }

$sql2 = "SELECT `status` FROM academicgrievence WHERE status= ?";
    	$stmt2 = mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt2,$sql1)) {
    		header("Location: ../landing.php?error=sqlerror");
    		exit();
    		
    	}
    	else{
    		mysqli_stmt_bind_param($stmt2, "s" , $completed);
    		mysqli_stmt_execute($stmt2);
    		mysqli_stmt_store_result($stmt2);
    		$resultCheck2 = mysqli_stmt_num_rows($stmt2);
        }

$sql3 = "SELECT `status` FROM academicgrievence WHERE status= ?";
    	$stmt3 = mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt3,$sql3)) {
    		header("Location: ../landing.php?error=sqlerror");
    		exit();
    		
    	}
    	else{
    		mysqli_stmt_bind_param($stmt3, "s" , $NotCompleted);
    		mysqli_stmt_execute($stmt3);
    		mysqli_stmt_store_result($stmt3);
    		$resultCheck3 = mysqli_stmt_num_rows($stmt3);
        } 
        
        
  # administrative
$sql4 = "SELECT `status` FROM administrativedecision WHERE status= ?";
  $stmt4 = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt4,$sql4)) {
      header("Location: ../landing.php?error=sqlerror");
      exit();
      
  }
  else{
      mysqli_stmt_bind_param($stmt4, "s" , $pending);
      mysqli_stmt_execute($stmt4);
      mysqli_stmt_store_result($stmt4);
      $resultCheck4 = mysqli_stmt_num_rows($stmt4);
  }

$sql5 = "SELECT `status` FROM administrativedecision WHERE status= ?";
  $stmt5 = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt5,$sql5)) {
      header("Location: ../landing.php?error=sqlerror");
      exit();
      
  }
  else{
      mysqli_stmt_bind_param($stmt5, "s" , $completed);
      mysqli_stmt_execute($stmt5);
      mysqli_stmt_store_result($stmt5);
      $resultCheck5 = mysqli_stmt_num_rows($stmt5);
  }

$sql6 = "SELECT `status` FROM administrativedecision WHERE status= ?";
  $stmt6 = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt6,$sql6)) {
      header("Location: ../landing.php?error=sqlerror");
      exit();
      
  }
  else{
      mysqli_stmt_bind_param($stmt6, "s" , $NotCompleted);
      mysqli_stmt_execute($stmt6);
      mysqli_stmt_store_result($stmt6);
      $resultCheck6 = mysqli_stmt_num_rows($stmt6);
  }

# harassment  
  
$sql7 = "SELECT `status` FROM harassment WHERE status= ?";
  $stmt7 = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt7,$sql7)) {
      header("Location: ../landing.php?error=sqlerror");
      exit();
      
  }
  else{
      mysqli_stmt_bind_param($stmt7, "s" , $pending);
      mysqli_stmt_execute($stmt7);
      mysqli_stmt_store_result($stmt7);
      $resultCheck7 = mysqli_stmt_num_rows($stmt7);
  }

$sql8 = "SELECT `status` FROM harassment WHERE status= ?";
  $stmt8 = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt8,$sql8)) {
      header("Location: ../landing.php?error=sqlerror");
      exit();
      
  }
  else{
      mysqli_stmt_bind_param($stmt8, "s" , $completed);
      mysqli_stmt_execute($stmt8);
      mysqli_stmt_store_result($stmt8);
      $resultCheck8 = mysqli_stmt_num_rows($stmt8);
  }

$sql9 = "SELECT `status` FROM harassment WHERE status= ?";
  $stmt9 = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt9,$sql9)) {
      header("Location: ../landing.php?error=sqlerror");
      exit();
      
  }
  else{
      mysqli_stmt_bind_param($stmt9, "s" , $NotCompleted);
      mysqli_stmt_execute($stmt9);
      mysqli_stmt_store_result($stmt9);
      $resultCheck9 = mysqli_stmt_num_rows($stmt9);
  }  
  
  #unfairtreatment

  $sql10 = "SELECT `status` FROM unfairtreatment WHERE status= ?";
  $stmt10 = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt10,$sql10)) {
      header("Location: ../landing.php?error=sqlerror");
      exit();
      
  }
  else{
      mysqli_stmt_bind_param($stmt10, "s" , $pending);
      mysqli_stmt_execute($stmt10);
      mysqli_stmt_store_result($stmt10);
      $resultCheck10 = mysqli_stmt_num_rows($stmt10);
  }

$sql11 = "SELECT `status` FROM unfairtreatment WHERE status= ?";
  $stmt11 = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt11,$sql11)) {
      header("Location: ../landing.php?error=sqlerror");
      exit();
      
  }
  else{
      mysqli_stmt_bind_param($stmt11, "s" , $completed);
      mysqli_stmt_execute($stmt11);
      mysqli_stmt_store_result($stmt11);
      $resultCheck11 = mysqli_stmt_num_rows($stmt11);
  }

$sql12 = "SELECT `status` FROM unfairtreatment WHERE status= ?";
  $stmt12 = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt12,$sql12)) {
      header("Location: ../landing.php?error=sqlerror");
      exit();
      
  }
  else{
      mysqli_stmt_bind_param($stmt12, "s" , $NotCompleted);
      mysqli_stmt_execute($stmt12);
      mysqli_stmt_store_result($stmt12);
      $resultCheck12 = mysqli_stmt_num_rows($stmt12);
  }

  $resultPending = $resultCheck1 + $resultCheck4 + $resultCheck7 + $resultCheck10 ;
  $resultCompleted = $resultCheck2 + $resultCheck5 + $resultCheck8 + $resultCheck11;
  $resultNotCompleted =$resultCheck3 + $resultCheck6 + $resultCheck9 + $resultCheck12 ;
  
?>
