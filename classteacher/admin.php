<?php 
    session_start();
    if (isset($_SESSION['passwordc'])){
        header("location:profile/profile.php");
    }    
 ?>
<?php

 
        $text2 = $_POST['select2'];
        $department =  $_SESSION['department'] ;
        $text1 = $_POST['passwordc'];
     $dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
echo"$department";
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$query="SELECT * FROM classteacher where class='".$text2."' and classpassword='".$text1."'";
mysql_select_db('tpes');
$result=mysql_query($query,$conn);
if(mysql_num_rows($result)>0) {
				
					$_SESSION["passwordc"]=$text1;
					$_SESSION["class"]=$text2;
					$_SESSION["department"]=$department;
        header("Location:profile/profile.php");
    }
else
{
  echo "<script>alert('You are not a Authorized user!')</script>";
echo "<script>location.href='../index.php'</script>";
  

}
?>