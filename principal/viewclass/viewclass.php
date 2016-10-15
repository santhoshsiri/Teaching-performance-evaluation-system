<?php
  session_start();
  if($_SESSION["passwords"]){
    
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
                    <a href="../profile/profile.php">BACK</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="../profile/profile.php">home</a></li>
                         
                    </ul>
                </div>
            </div>
        </div>
	</header>
 </div>   
	<!-- end header -->
<div id="back">
            <center><h1><br>CLASS WISE REPORT</h1></center>
<form id="form1" name="form1" method="post" action="pq3.php">
<h4 style="text-align:center">select academic year
<?php 
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$query = "select distinct acyear from facultycourse"; 
$result = mysql_query($query); 
?> 
<select name="acyear">
<?php 
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
    
?> <option value="<?php echo $line['acyear'];?>"> 
    <?php echo $line['acyear'];?> </option>   <?php 
} 
?> 
 
</select> <br><br>

<h4 style="text-align:center">select sem
<?php 
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed");

$query = "select distinct sem from facultycourse"; 
$result = mysql_query($query); 
?> 
<select name="sem">
<?php 
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
    
?> <option value="<?php echo $line['sem'];?>"> 
    <?php echo $line['sem'];?> </option>   <?php 
} 
?> 
 
</select> <br><br>

<input type="submit" name="submit" value="submit"/>

</form>
</h4>
</div>
<div class="copy-right">
      <p><a  href="">Teaching performsnce evaluation system</a></p> 
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