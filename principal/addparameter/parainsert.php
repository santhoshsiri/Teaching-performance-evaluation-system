<?php

$name=$_POST['type'];
$link = mysqli_connect("localhost", "root", "", "tpes");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$item1 = mysqli_real_escape_string($link, $_POST['item1']);
$item2 = mysqli_real_escape_string($link, $_POST['item2']);
$item3 = mysqli_real_escape_string($link, $_POST['item3']);
$item4 = mysqli_real_escape_string($link, $_POST['item4']);
$item5 = mysqli_real_escape_string($link, $_POST['item5']);
$item6 = mysqli_real_escape_string($link, $_POST['item6']);
$item7 = mysqli_real_escape_string($link, $_POST['item7']);
$item8 = mysqli_real_escape_string($link, $_POST['item8']);
$item9= mysqli_real_escape_string($link, $_POST['item9']);
$item10 = mysqli_real_escape_string($link, $_POST['item10']);
if($item1!="" && $item2!="" && $item3!="" && $item4!="" && $item4!="" && $item5!="" && $item6!="" && $item7!="" && $item8!="" && $item9!="" && $item10!="")
	{
$sql = "UPDATE parameter SET item1='$item1',item2='$item2',item3='$item3',item4='$item4',item5='$item5',item6='$item6',item7='$item7',item8='$item8',item9='$item9',item10='$item10' WHERE coursetype='$name'";
if(mysqli_query($link, $sql)){
    echo "<script>alert('parameters are updated')</script>";
         echo "<script>location.href='addparameter.php'</script>";
} else{
    echo "<script>alert('Could not able to connect')</script>";
         echo "<script>location.href='addparameter.php'</script>";
}
}
else{
  echo "<script>alert('parameters cannot be empty')</script>";
         echo "<script>location.href='addparameter.php'</script>";
}
 

mysqli_close($link);
?>
