<?php
require 'db.php';
$user_name  	= trim($_REQUEST['user_name']);
$user_email  	= trim($_REQUEST['user_email']);
$user_income  	= trim($_REQUEST['user_income']);
$user_address  	= trim($_REQUEST['user_address']);
$user_date  	= trim($_REQUEST['user_date']);
$user_month  	= trim($_REQUEST['user_month']);
$user_year  	= trim($_REQUEST['user_year']);
$requestType  	= trim($_REQUEST['requestType']);


$dob = date('Y-m-d',strtotime("$user_year/$user_month/$user_date"));




if($requestType==1){
	if (!is_numeric($user_income) || !is_numeric($user_date) || !is_numeric($user_month))
	{
		echo $str = 'Only numeric value allow in date of birth and income';
		return;
	}
	try {
		$stmt = $conn->prepare("INSERT INTO `ct_user_tbl` (`user_name`, `user_dob`, `user_email`, `user_address`, `user_income`,`created_at`, `updated_at`) VALUES (:user_name, :user_dob, :user_email, :user_address, :user_income, :created_at, :updated_at)");
		$stmt->bindParam(':user_name', $user_name);
		$stmt->bindParam(':user_dob', $dob);
		$stmt->bindParam(':user_email', $user_email);
		$stmt->bindParam(':user_address', $user_address);
		$stmt->bindParam(':user_income', $user_income);
		$stmt->bindParam(':created_at',date('Y-m-d H:i:s'));
		$stmt->bindParam(':updated_at', date('Y-m-d H:i:s'));

		if($stmt->execute()){
			echo "YES";
		}	else{
			echo "NO";
		}
	} catch (Exception $e) {
		echo $e->getMessage();

	}
}


if($requestType==2){
	try {

		echo trim($_REQUEST['get_param']);


	} catch (Exception $e) {
		echo $e->getMessage();
		
	}
	
}


?>