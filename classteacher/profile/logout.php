<?php
	session_start();
	if(isset($_SESSION['passwordc'])){
		session_destroy();
		header("location:../../index.php");
	}
?>