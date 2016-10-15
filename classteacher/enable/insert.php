<?php
  session_start();
  if($_SESSION["passwordc"]){
    
  }
   else {
     header("location:../../index.php");
   }
?><?php
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "select * from acupdate where id='1'" ;
$query = mysql_query($getinfo);
$row = mysql_fetch_array($query);
$acyear = $row['acyear'];  
$sem = $row['sem'];

$text=$_SESSION['department'];
$text1=$_SESSION['class'];
 $_SESSION['pass'] = $_POST['stpass'];
$text2= $_SESSION['pass'];
$link = mysqli_connect("localhost", "root", "", "tpes");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "UPDATE classteacher SET evaluation='enable' where department='".$text."'  and class='".$text1."' and acyear='".$acyear."' and sem='".$sem."'";

if(mysqli_query($link, $sql)){
   echo "<script>alert('Feedback is enabled!')</script>";
         echo "<script>location.href='enable.php'</script>". mysqli_error($link);

 			
}

 else{
     echo "<script>alert('Could not able to connect!')</script>";
         echo "<script>location.href='enable.php'</script>". mysqli_error($link);
}

$sql1 = "UPDATE classteacher SET stdpassword='$text2' where department='".$text."'  and class='".$text1."' and acyear='".$acyear."' and sem='".$sem."'";

if(mysqli_query($link, $sql1)){
	   echo "<script>alert('Feedback is enabled!')</script>";
         echo "<script>location.href='enable.php'</script>". mysqli_error($link);

   }
 
 else{
     echo "<script>alert('could not able to connect!')</script>";
         echo "<script>location.href='enable.php'</script>". mysqli_error($link);
    }
?> 