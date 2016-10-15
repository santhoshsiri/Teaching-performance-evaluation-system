<html>
<head>
  <script type = "text/javascript" >
       function preventBack(){window.history.forward(1);}
        setTimeout("preventBack()", 10);
        window.onload=function(){null};
</script></head>


    <?php 
    session_start();
    if (isset($_SESSION['passwordt'])){
        header("location:profile/profile.html");
    }
 ?>
<form id="form1" name="form1" method="post" action="cac.php">
<?php

        $text2 = $_POST['select2'];
        $text1 = $_POST['passwordt'];
    mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "select * from classteacher where stdpassword='".$text1."'  and class='".$text2."'";
$query = mysql_query($getinfo);

$row = mysql_fetch_array($query);
$eval = $row['evaluation'];

 mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "select * from classteacher where stdpassword='".$text1."'  and class='".$text2."'";
$result=mysql_query($getinfo);
if(mysql_num_rows($result)>0) {
				
					$_SESSION["passwordt"]=$text1;
                                        
					$_SESSION["class"]=$text2;
         }                                
				if($eval == 'enable') {

        header("Location:copy of into.php");
    }
else
{
  
   echo "<script>alert('incorrect password or classteacher needs to enable your session!')</script>";
   echo "<script>location.href='../index.php'</script>";
  

}
?>
</html>