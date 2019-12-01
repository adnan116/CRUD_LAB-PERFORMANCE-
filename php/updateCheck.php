<?php 
	
	require_once('functions.php');
	session_start();
	if (isset($_POST['submit'])) {
		$npass = $_POST['newpass'];
		$email = $_POST['email'];

		if ($npass == "" && $email == "") {
			echo "Fill Data";
		}else{
			userUpdate($_SESSION['username'],$npass,$email);
			header('location: ../views/userlist.php');
		}
	}else{
		header('location: ../views/login.php');
	}

 ?>