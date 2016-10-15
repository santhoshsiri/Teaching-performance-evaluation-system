<?php
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "select * from acupdate where id='1'" ;
$query = mysql_query($getinfo);
$row = mysql_fetch_array($query);

$acyear = $row['acyear'];  
$sem = $row['sem'];

session_start();
$gt[]="";
if(isset($_GET["text1"])){    
    foreach($_GET["text1"] as $key => $text_field){
        $gt[] .= $text_field ." ";
    }
}
$gt1[]="";
if(isset($_GET["text2"])){    
    foreach($_GET["text2"] as $key => $text_field){
        $gt1[] .= $text_field ." ";
    }
}
$gt2[]="";
if(isset($_GET["text3"])){    
    foreach($_GET["text3"] as $key => $text_field){
        $gt2[] .= $text_field ." ";
    }
}

$gt3[]="";
if(isset($_GET["text4"])){    
    foreach($_GET["text4"] as $key => $text_field){
        $gt3[] .= $text_field ." ";
    }
}
$text=$_SESSION['department'];
$text1=$_SESSION['class'];
$rows=$_SESSION['row'];
$rows1=$_SESSION['col'];
$cols=2;

for($row=1;$row<=$rows;$row++){

    for($col=1;$col<=$cols/2;$col++){


$link = mysqli_connect("localhost", "root", "", "tpes");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($gt[$row]!=" " && $gt1[$row]!=" "){
$sql = "INSERT INTO facultycourse (acyear, sem, department, class, coursetype, coursename, faculty) VALUES ('$acyear', '$sem', '$text', '$text1', 'theory','$gt[$row]','$gt1[$row]')";
if(mysqli_query($link, $sql)){
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}
else{
     echo "<script>alert('invalid detail')</script>";
         echo "<script>location.href='get.php'</script>";
}
}
}
 

$cols1=2;

for($row=1;$row<=$rows1;$row++){

    for($col=1;$col<=$cols1/2;$col++){

$link = mysqli_connect("localhost", "root", "", "tpes");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if($gt2[$row]!=" " && $gt3[$row]!=" " ){
$sql1 = "INSERT INTO facultycourse (acyear, sem, department, class, coursetype, coursename, faculty) VALUES ('$acyear', '$sem', '$text', '$text1', 'lab','$gt2[$row]','$gt3[$row]')";
if(mysqli_query($link, $sql1)){
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}
else{
     echo "<script>alert('invalid detail')</script>";
         echo "<script>location.href='get.php'</script>";
}
}
}
 
       echo "<script>alert('record added successfully')</script>";
         echo "<script>location.href='get.php'</script>". mysqli_error($link);



?>
