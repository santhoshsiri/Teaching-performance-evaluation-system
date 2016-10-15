<?php

mysql_connect("localhost", "root", "") or die("Connection Failed");

mysql_select_db("tpes")or die("Connection Failed");

$acyear1 = $_POST['acyear'];

$sem1 = $_POST['sem'];
if($sem1!="" )
{
$query = "UPDATE acupdate SET acyear = '$acyear1'  WHERE id=1";
$result = mysql_query($query) or die("An error has ocured:");

$query = "UPDATE acupdate SET sem = '$sem1'  WHERE id=1";
$result = mysql_query($query) or die("An error has ocured:"); 

if(mysql_query($query)){

	echo "<script>alert('Academic year updated sucessfully')</script>";
 	 echo "<script>location.href='updateacyear.php'</script>"; 
}

else{

echo "<script>alert('Could not able to connect')</script>";
         echo "<script>location.href='updateacyear.php'</script>" . mysqli_error($link);}
}
else{
 	 echo "<script>alert('Not valid sem!')</script>";
         echo "<script>location.href='updateacyear.php'</script>"; 
 }
?>
