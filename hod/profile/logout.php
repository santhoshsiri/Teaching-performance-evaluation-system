<?php
	session_start();
	if(isset($_SESSION['passwordh'])){
		session_destroy();
		header("location:../../index.php");
	}
	?>