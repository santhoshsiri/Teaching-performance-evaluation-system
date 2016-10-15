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

$link = mysqli_connect("localhost", "root", "", "tpes");
 

if($link === false){
     echo "<script>alert('could not able to connect!')</script>";
         echo "<script>location.href='enable.php'</script>". mysqli_error($link);
}

$sql = "UPDATE classteacher SET evaluation='disable' where department='".$text."'  and class='".$text1."' and acyear='".$acyear."' and sem='".$sem."'";

if(mysqli_query($link, $sql)){
    	echo "<script>alert('Feedback is disabled!')</script>";
         echo "<script>location.href='enable.php'</script>". mysqli_error($link);
}
 			
else{
     echo "<script>alert('could not able connect!')</script>";
         echo "<script>location.href='enable.php'</script>". mysqli_error($link);
}
?> 