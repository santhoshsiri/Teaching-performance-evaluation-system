<?php

session_start();

//Database Information

$dbhost = "localhost";
$dbname = "tpes";
$dbuser = "root";
$dbpass = "";

//Connect to database

$conn = mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname, $conn) or die(mysql_error());

$department = $_SESSION['department'];
$test2 = $_SESSION['class'];
$password1 = $_POST['pwd1'];
$password2 = $_POST['pwd2'];
	if($password1==$password2 && $password2!="")
	{
  mysql_query("UPDATE classteacher SET classpassword = '$password2' WHERE department='$department'and class='$test2'");
   echo "<script>alert('Password has been updated sucessfully')</script>";
         echo "<script>location.href='password.php'</script>";
}
else{
	echo "<script>alert('Passwords are not matching please try Again!')</script>";
         echo "<script>location.href='password.php'</script>"; 
}
?>
