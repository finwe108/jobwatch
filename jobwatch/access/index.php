<?php include_once('../../includes/initialize.php'); ?>

<?php
	$user = $_GET['user'];

	$session->check_login();

	if ($session->is_logged_in()) {
		echo "logged";
	}else{
		redirect_to('login.php');
	}
?>