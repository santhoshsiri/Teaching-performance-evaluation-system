<?php
  session_start();
  if($_SESSION["passwordh"]){
    
  }
   else {
     header("location:../../index.php");
   }
?>
<?php
//Database Information
$dbhost = "localhost";
$dbname = "tpes";
$dbuser = "root";
$dbpass = "";
//Connect to database
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass)or die("Could not connect: ".mysql_error());
mysql_select_db($dbname, $conn) or die(mysql_error());
$class = $_POST['class'];
$password = $_POST['cpassword'];
$department = $_SESSION['department'];
 
$link = mysqli_connect("localhost", "root", "", "tpes");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
if($class!="" && $password!="")
{ 
$sql = "INSERT INTO tpes.classteacher(acyear,sem,class,classpassword,department) VALUES((SELECT acyear FROM tpes.acupdate),(SELECT sem FROM tpes.acupdate),'$class','$password','$department') ";
if(mysqli_query($link, $sql)){
   echo "<script>alert('Class Added successfully!')</script>";
         echo "<script>location.href='add.php'</script>"; 
} else{
    echo "<script>alert('Class not Added!')</script>";
         echo "<script>location.href='add.php'</script>"; 
}
}
else{
  echo "<script>alert('Invalid details')</script>";
         echo "<script>location.href='add.php'</script>"; 

}
?>



