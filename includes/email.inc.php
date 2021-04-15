<?php
$success = "";
$error_message = "";
require 'dbh.inc.php';
if(!empty($_POST["submit_email"])) {
	require 'dbh.inc.php';
	$result = mysqli_query($conn,"SELECT * FROM users WHERE Email_id='" . $_POST["email"] . "'");
	$count  = mysqli_num_rows($result);
	if($count>0) {
		// generate OTP
		$otp = rand(100000,999999);
		// Send OTP
		require_once("mail_function.php");
		$mail_status = sendOTP($_POST["email"],$otp);
		
		if($mail_status == 1) {
			$result = mysqli_query($conn,"INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
			$current_id = mysqli_insert_id($conn);
			
				$success=1;
			
		}
	} else {
		$error_message = "Email not exists!";
	}
}
if(!empty($_POST["submit_otp"])) {
	require 'dbh.inc.php';
	$result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
	$count  = mysqli_num_rows($result);
	if(!empty($count)) {
		$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
		$success = 2;	
	} else {
		$success =1;
		$error_message = "Invalid OTP!";
	}	
}
?>