<?php
  session_start();
  if($_SESSION["passwords"]){
    
  }
   else {
     header("location:../../index.php");
   }
?>

<?php

$link = mysqli_connect("localhost", "root", "", "tpes");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 



$Password1 = $_POST['pwd1'];
$Password2 = $_POST['pwd2'];
if($Password1==$Password2 && $Password2!="")
 {
$sql = "UPDATE principal SET Password='$Password2' WHERE Type=1";
if(mysqli_query($link, $sql)){
     echo "<script>alert('Password has been updated sucessfully')</script>";
         echo "<script>location.href='password.php'</script>";
} else{
     echo "<script>alert('sorry could not able to connect')</script>";
         echo "<script>location.href='password.php'</script>". mysqli_error($link);
}
 }
 else{
 	 echo "<script>alert('Passwords are not matching please try Again!')</script>";
         echo "<script>location.href='password.php'</script>"; 
 }

mysqli_close($link);
?>