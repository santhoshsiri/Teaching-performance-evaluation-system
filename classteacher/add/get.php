    <?php
  session_start();
  if($_SESSION["passwordc"]){
    
  }
   else {
     header("location:../../index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>welcome tpes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

</head>
<body>
<div id="wrapper">
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="addclass.php"><img class="bk" src="3.png"/></a> <a class="navbar-brand" href="addclass.php"><span>B</span>ack</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                         <li><a href="../profile/profile.php">home</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
 </div>   
	<!-- end header -->
<div id="back1">
            <center><h1><br>ADDING CLASS DETAILS</h1></center>
<center>
<?php

mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed");
$text=$_SESSION['department'];
$text1=$_SESSION['class'];
?>

<h4 style="text-align:center">THEORY</h4><br>
<center>
<form  action="fc.php" method="get">
 <?php
    // Just a check you can change as your needs
if(isset($_SESSION['row'])){

$rows=$_SESSION['row'];
$cols=2;

for($row=0;$row<$rows;$row++){

    for($col=1;$col<=$cols/2;$col++){
        echo '<br> <label for="text1[]">Name Of Courses:
<input type="text" name="text1[]" id="text1" /></label>';

    echo ' <label for="text2[]">Name Of Faculty:
<input type="text" name="text2[]" id="text2" /></label><br>';

    }

}

}


    ?>
<br><br><br>
<h4 style="text-align:center">LAB</h4><br>
<?php
    // Just a check you can change as your needs
if(isset($_SESSION['row'])){

$rows1=$_SESSION['col'];
$cols1=2;

for($row=1;$row<=$rows1;$row++){

    for($col=1;$col<=$cols1/2;$col++){
        echo '<br> <label for="text3[]">Name Of Courses:
<input type="text" name="text3[]" id="text3" /></label>';

    echo ' <label for="text4[]">Name Of Faculty:
<input type="text" name="text4[]" id="text4" /></label><br>';

    }

}

}


    ?><br><br>
<center><input type="submit" value="Submit"><br><br>
</center>
</form>
</h4>
</div>
<div id="down"><center>Cypher</center>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>