
<?php
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "select * from acupdate where id='1'" ;
$query = mysql_query($getinfo);
$row = mysql_fetch_array($query);
$acyear = $row['acyear'];  
$sem = $row['sem'];
?>

<?php

session_start();
$text=$_SESSION['department'];
$text1=$_SESSION['class'];
$_SESSION['row']=$_GET['rows'];
$_SESSION['col']=$_GET['cols'];




$link = mysqli_connect("localhost", "root", "", "tpes");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$theory = mysqli_real_escape_string($link, $_GET['rows']);
$lab= mysqli_real_escape_string($link, $_GET['cols']);
if($theory!=0){
$sql = "UPDATE classteacher SET theory='$theory' where department='".$text."'  and class='".$text1."' and acyear='".$acyear."' and sem='".$sem."'";

if(mysqli_query($link, $sql)){
    		echo "Theory Records added successfully.";

} 
else{
   		 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
}
if($lab!=0){
 $sql2 = "UPDATE classteacher SET lab='$lab' where department='".$text."'  and class='".$text1."' and acyear='".$acyear."' and sem='".$sem."'";
if(mysqli_query($link, $sql2)){
        echo "Lab Records added successfully.";

} 
}
else{
        echo "<script>alert('invalid detail')</script>";
         echo "<script>location.href='addclass.php'</script>";
} 
if($lab!=0){

$sql3 = "UPDATE classteacher SET evaluation='disable' where department='".$text."'  and class='".$text1."' and acyear='".$acyear."' and sem='".$sem."'";
if(mysqli_query($link, $sql3)){
    echo "Records added successfully.";
 			header("Location:get.php");

}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}
else{
   echo "<script>alert('invalid detail')</script>";
         echo "<script>location.href='addclass.php'</script>";
}


 

mysqli_close($link);
?>
</body>
</html>