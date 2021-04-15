<?php
if (isset($_POST['signup-submit'])) {
	
	require 'includes/dbh.inc.php';
	require 'Login.php';

    $username = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $confirmpwd = $_POST['confirm-pwd'];

    if (empty($username) || empty($email) || empty($password) || empty($confirmpwd)) {
    	header("Location: ../Login.php?error=emptyfields&uid=".$username."&email=".$email);
    	exit();
    	
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9]*$/", $username)) {
    	header("Location: ../Login.php?error=invalidmailuid");
    	exit();
    }	

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	header("Location: ../Login.php?error=invalidmail&uid=".$username);
    	exit();

    }
    elseif (!preg_match("/^[a-zA-z0-9]*$/", $username)) {
    	header("Location: ../Login.php?error=invaliduid&mail=".$email);
    	exit();
    }
    elseif ($password !== $confirmpwd) {
    	header("Location: ../Login.php?error=passwordcheck&uid =".$username."&mail=".$email);
    	exit();
    }
    else{

    	$sql = "SELECT username FROM users WHERE username= ?";
    	$stmt = mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt,$sql)) {
    		header("Location: ../Login.php?error=sqlerror");
    		exit();
    		
    	}
    	else{
    		mysqli_stmt_bind_param($stmt, "s" , $username);
    		mysqli_stmt_execute($stmt);
    		mysqli_stmt_store_result($stmt);
    		$resultCheck = mysqli_stmt_num_rows($stmt);
    		if ($resultCheck > 0) {
    			header("Location: ../Login.php?error=usertaken&mail=".$email);
    			exit();
    		 	# code...
    		} 
    	    else{
    		    $sql = "INSERT INTO users (username,pwd) VALUES (?,?) WHERE Email_id = '$email'";
    		    $stmt = mysqli_stmt_init($conn);
    		    if (!mysqli_stmt_prepare($stmt,$sql)) {
    		    header("Location: ../Login.php?error=sqlerror");
    		    exit();   	
            }
    	    else{
    	    	$hashedpwd = password_hash($password , PASSWORD_DEFAULT);


    		    mysqli_stmt_bind_param($stmt, "ss" , $username, $hashedpwd);
    		    mysqli_stmt_execute($stmt);
    		    header("Location: ../Login.php?signup=success");
    		    exit();

    	    }

    	} 

    }	
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

}
else{
	header("Location: ../Login.php");
	exit();
}