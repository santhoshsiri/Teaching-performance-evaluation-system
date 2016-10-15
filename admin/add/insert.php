<?php

$link = mysqli_connect("localhost", "root", "", "tpes");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 


$dept = mysqli_real_escape_string($link, $_POST['dept']);
$password = mysqli_real_escape_string($link, $_POST['password']);
if($password!="")
 {
$sql = "INSERT INTO hod (department, hodpassword) VALUES ('$dept', '$password')";
if(mysqli_query($link, $sql)){
      echo "<script>alert('department added sucessfully')</script>";
         echo "<script>location.href='add.php'</script>";
} else{
     echo "<script>alert('Could not able to connect')</script>";
         echo "<script>location.href='add.php'</script>" . mysqli_error($link);
}
}
else{
 	 echo "<script>alert('Not valid details!')</script>";
         echo "<script>location.href='add.php'</script>"; 
 }



mysqli_close($link);
?>