<?php 
    session_start();
    if (isset($_SESSION['passwordh'])){
        header("location:profile/profile.html");
    }    
 ?>
<?php

        $text = $_POST['department'];
        $_SESSION['dep']=$text;
        $text1 = $_POST['passwordh'];
     $dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$query="SELECT * FROM hod where department='".$text."' and hodpassword='".$text1."'";
mysql_select_db('tpes');
$result=mysql_query($query,$conn);
if(mysql_num_rows($result)>0) {
				
					$_SESSION["passwordh"]=$text1;
				        $_SESSION["department"]=$text;

        header("Location:profile/profile.php");
    }
else
{
  echo "<script>alert('You are not a Authorized user!')</script>";
  echo "<script>location.href='../index.php'</script>"; 

}
?>
