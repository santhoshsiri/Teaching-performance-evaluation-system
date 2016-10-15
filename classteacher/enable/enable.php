<?php
  session_start();
  if($_SESSION["passwordc"]){
    
  }
   else {
     header("location:../../index.php");
   }
?><html>
<body>
<?php
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "select * from acupdate where id='1'" ;
$query = mysql_query($getinfo);
$row = mysql_fetch_array($query);

$acyear = $row['acyear'];  
$sem = $row['sem'];
echo"$acyear"; 

echo $_SESSION['department'];
echo $_SESSION['class'];
$text=$_SESSION['department'];
$text1=$_SESSION['class'];


mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "select evaluation from classteacher where department='".$text."'  and class='".$text1."' and acyear='".$acyear."' and sem='".$sem."'";
$query = mysql_query($getinfo);
$row = mysql_fetch_array($query);

$eval = $row['evaluation'];
echo"$eval"; 

if($eval == 'disable') {
				
				
        header("Location:enable1.php");
    }
else
{
 
echo "<script>location.href='disable.php'</script>";
  

}
?>
</body>
</html>


