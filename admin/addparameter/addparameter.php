<?php
  session_start();
  if($_SESSION["password"]){
    
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
                   <a href="../profile/profile.php"><img class="bk" src="3.png"/></a> <a class="navbar-brand" href="../profile/profile.php"><span>B</span>ack</a>
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
            <center><h1><br>UPDATE PARAMETER</h1></center>
<form action="parainsert.php" method="post">
    <h4 style="text-align:center">PARAMETER FOR
<?php

mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$query = "select distinct coursetype from parameter";
$result = mysql_query($query); 
?> 
<select name="type">
<?php 
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
    
?> <option value="<?php echo $line['coursetype'];?>"> 
    <?php echo $line['coursetype'];?> </option>   <?php 
} 


?>
</select><br><br><br>
<p style="text-align:center">
        <label for="item1">ITEM1:</label>
        <input type="text" name="item1" id="ITEM1">
    </p>

<p style="text-align:center">
        <label for="item2">ITEM2:</label>
        <input type="text" name="item2" id="ITEM2">
    </p>
   
<p style="text-align:center">
        <label for="item3">ITEM3:</label>
        <input type="text" name="item3" id="ITEM3">
    </p>
   
<p style="text-align:center">
        <label for="item4">ITEM4:</label>
        <input type="text" name="item4" id="ITEM4">
    </p>
   
<p style="text-align:center">
        <label for="item5">ITEM5:</label>
        <input type="text" name="item5" id="ITEM5">
    </p>
   
<p style="text-align:center">
        <label for="item6">ITEM6:</label>
        <input type="text" name="item6" id="ITEM6">
    </p>
   
<p style="text-align:center">
        <label for="item7">ITEM7:</label>
        <input type="text" name="item7" id="ITEM7">
    </p>
   
<p style="text-align:center">
        <label for="item8">ITEM8:</label>
        <input type="text" name="item8" id="ITEM8">
    </p>
   
<p style="text-align:center">
        <label for="item9">ITEM9:</label>
        <input type="text" name="item9" id="ITEM9">
    </p>
   
<p style="text-align:center">
        <label for="item10">ITEM10:</label>
        <input type="text" name="item10" id="ITEM10">
</p>
<br>
<p style="text-align:center">
   
  <input type="submit" value="Add Records"> 
 </p>
   


</form>
</h4>
</div>
<div id="down"><p>2013-17  CSE</p>
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