<?php 
    session_start();
    if (isset($_SESSION['passwords'])){
        header("location:profile/profile.html");
    }    
 ?>
<?php

        
$text1 = $_POST['passwords'];
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$query="SELECT * FROM  principal where password='".$text1."' and type='1'";
mysql_select_db('tpes');
$result=mysql_query($query,$conn);
if(mysql_num_rows($result)>0) {
			         $_SESSION["passwords"]=$text1;
$_SESSION["type"]=1;	

        header("Location:profile/profile.php");
    }
else
{
  echo "<script>alert('You are not a Authorized user!')</script>";
  echo "<script>location.href='../index.php'</script>"; 

}
?>