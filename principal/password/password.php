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


<script>
function checkPass()
{
  var guess = document.myForm.pwd1.value;
  var secret = document.myForm.pwd2.value;
  if (guess == secret)
  {
    document.myForm.txtOutput.value = "You may proceed.";
   
  } 
 else 
  {
    document.myForm.txtOutput.value = "That is incorrect.";
  }
}
</script>
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
            <center><h1><br>CHANGE   YOUR   PASSWORD</h1></center>
<form method="post" name="myForm" action="update.php">

<h4 id="he">Enter new password:
  <input type = "password"
             name = "pwd1"><br><br>

<h4>Confirm new password:
  <input type = "password"
             name = "pwd2"><br><br>
  <input type = "button"
           value = "Enter"
           onClick = "checkPass()"><br><br><br>
  <textarea  id="tex" name = "txtOutput"
              rows = 1
              cols = 35>
    </textarea><br><br>
 
<input type="submit" name="Submit" value="Change">
  
</form>
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