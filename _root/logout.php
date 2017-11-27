<?php
	session_start();
   require_once('common_linker.php');

	$Users = new Users();


// include all function inside log_out();  web_functions.php
	log_out();


	// This simply logs out the current user
	$Users->logoutUser();
	   header("Location: ../login.php");

?>