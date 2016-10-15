<?php
	session_start();
	if(isset($_SESSION['passwordt'])){
		session_destroy();
		header("location:../index.php");
	}
	?>