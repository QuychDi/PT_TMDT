<?php
	session_start();

	unset($_SESSION['user']);
       
	header("location: http://localhost/TMDT/admin/modules/login.html");
?>