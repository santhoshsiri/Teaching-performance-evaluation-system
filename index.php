<!doctype>
<html>
<link rel="stylesheet" type="text/css" href="home_page/css/modal1.css">
<link rel="stylesheet" type="text/css" href="home_page/css/home.css">
<link rel="stylesheet" type="text/css" href="home_page/css/modal.css">
<head>
       <script type = "text/javascript" >
       function preventBack(){window.history.forward(1);}
        setTimeout("preventBack()", 10);
        window.onload=function(){null};
    </script>  
        <script src="home_page/js/jquery.min.js">
</script>
        
        <link rel="stylesheet" href="home_page/css/responsiveslides.css">
        <script src="home_page/js/responsiveslides.min.js"></script>
        <script>
                    $(function () {
                      $("#slider1").responsiveSlides({
                        width: 600,
                        speed: 600
                      });
                });
        </script>
       </head>
<title>Welcome To Tpes</title>

<body>
	
	<div id="header"><img class="i" src="home_page/images/logoc.jpg">
    <h1 class="head"><br>Teaching Performence Evaluation System</h1><h3><marquee>Welcome To Channabasaveshwara Institute Of Technology</h3></marquee>
                        </div>
	<div id="center">
    <div class="image-slider">
            <!-- Slideshow 1 -->
            <ul class="rslides" id="slider1">
                <li>
                    <img src="home_page/images/1.jpg" alt="">
                </li>
                <li>
                    <img src="home_page/images/2.jpg" alt="">
                </li>
                <li>
                    <img src="home_page/images/3.jpg" alt="">
                </li>
                <li><img src="home_page/images/4.jpg" alt=""></li>
                <li><img src="home_page/images/5.jpg" alt=""></li>
                
            </ul></div>
        </div>
<div id="login">
	<div id="admin"><p><b><br><a href="#openmodal1"> ADMIN LOGIN</a></b></p></div>
	<div id="principal"> <p><b><br><a href="#openmodal2">PRINCIPAL LOGIN</a></b></p></div>
	<div id="hod"><p><b><br><a href="#openmodal3">HOD LOGIN</a></b></p></div>
	<div id="teach"><p><b><br><a href="#openmodal4">TEACHER LOGIN</a></b></p></div>
	<div id="stud"><p><b><br><a href="#openmodal5">STUDENT LOGIN</b></p></div>
</div>
<div id="btm">
            <ul><p><a class="foot" href="#openmodal1">ADMIN</a></p></ul>
              <ul><p><a class="foot" href="#openmodal2">PRINCIPAL</a></p></ul>
               <ul><p><a class="foot" href="#openmodal3">HOD</a></p></ul>
                <ul><p><a class="foot" href="#openmodal4">TEACHER</a></p></ul>
                 <ul><p><a class="foot" href="#openmodal5">STUDENT</a></p></ul>
                  <ul><p><a class="foot" href="about/about.html">ABOUT US</a></p></ul>
                  <div id="imga" ><img class="im" src="home_page/images/logo.jpg" href="../home.php"></div>
</div>
<div id="down2">Developed by 2013-17 batch CSE Students</div>
</div>

 
    <div id="openmodal1" class="modalDialog">
           <div class="login-form">
                    <div class="head1">
                        <img src="home_page/images/mem2.jpg" alt=""/>   
                    </div>
                <div>
                        <a href="#close" title="Close" class="close">X</a>
                <form id="form1" name="form1" method="post" action="admin/admin.php">

                <p class="ad">ADMIN LOGIN</p>
                                           
    
                <?php
                session_start(); 
                mysql_connect("localhost", "root", "") or die("Connection Failed"); 
                mysql_select_db("tpes")or die("Connection Failed"); 
                $query = "SELECT * FROM admin"; 
                $result = mysql_query($query); 
                ?> 
                    <p class="pd">PASSWORD: <input type="password" name="password"><br><br> 
                    <input type="submit" name="submit" value="LOGIN"/>
                     </form>
                     </div>
                     <div class="copy-right">
                        <p><a  href="">Teaching performence evaluation system</a></p> 
                    </div>
                        </div>
                      
             </div>


    <div id="openmodal2" class="modalDialog">
        <div class="login-form">
                    <div class="head1">
                        <img src="home_page/images/mem2.jpg" alt=""/>
                        
                                    </div>
                    <div>
                     <a href="#close" title="Close" class="close">X</a>
                     <form id="form1" name="form1" method="post" action="principal/principal.php">

                <p class="ad">PRINCIPAL LOGIN</p>
                <?php 
                  
                mysql_connect("localhost", "root", "") or die("Connection Failed"); 
                mysql_select_db("tpes")or die("Connection Failed"); 
                $query = "SELECT * FROM pricipal"; 
                $result = mysql_query($query); 
                ?> 
                                    <p class="pd">PASSWORD: <input type="password" name="passwords"> 
                                    <input type="submit" name="submit" value="LOGIN"/>
                    </form>
                    </div>
                    <div class="copy-right">
                        <p><a  href="">Teaching performence evaluation system</a></p> 
                    </div>
                    </div> 
                     </div> 


     <div id="openmodal3" class="modalDialog">
                        <div class="login-form">
                                    <div class="head1">
                                        <img src="home_page/images/mem2.jpg" alt=""/>
                                        
                                    </div>
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <form id="form1" name="form1" method="post" action="hod/hod.php">

                <h1 style="text-align:center"><p class="ad">HOD LOGIN</p> </h1>
                <h2 style="text-align:center"><P class="pd">SELECT DEPT
                <?php 
                mysql_connect("localhost", "root", "") or die("Connection Failed"); 
                mysql_select_db("tpes")or die("Connection Failed"); 
                $query = "SELECT * FROM hod"; 
                $result = mysql_query($query); 
                ?> 
                <select name="department"> 
                <?php 
                while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
                { 
                    
                ?> <option value="<?php echo $line['department'];?>"> 
                    <?php echo $line['department'];?> </option>   <?php 
                } 
                ?> 
                </select> <br>
                <p class="pd" >PASSWORD:<input type="password" name="passwordh"><br><br> 
                <input type="submit" name="submit" value="LOGIN"/>
                        </form>
                    </div>
                    <div class="copy-right">
                        <p><a  href="">Teaching performence evaluation system</a></p> 
                    </div>
                </div>
            </div>


  <div id="openmodal4" class="modalDialog">
         <div class="login-form">
                    <div class="head1">
                        <img src="home_page/images/mem2.jpg" alt=""/>   
                                </div>
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <form id="form1" name="form1" method="post" action="#openmodal6">
            <h1 style="text-align:center"><p class="ad">CLASSTEACHER LOGIN</p> </h1>
            <h2 style="text-align:center"><p class="pd">SELECT DEPT
            <?php 
            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
            mysql_select_db("tpes")or die("Connection Failed"); 
            $query = "select distinct department from classteacher"; 
            $result = mysql_query($query); 
                ?> 
                <select name="department">
                <?php 
                while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
                { 
                    
                ?> <option value="<?php echo $line['department'];?>"> 
                    <?php echo $line['department'];?> </option>   <?php 
                } 
                ?> 
                </select> <br><br>
                <input type="submit" name="submit" value="SUBMIT"/>

                </form>
                    </div>
                    <div class="copy-right">
                        <p><a  href="">Teaching performence evaluation system</a></p> 
                    </div>
            </div>
        </div> 

    <div id="openmodal5" class="modalDialog">
         <div class="login-form">
                    <div class="head1">
                        <img src="home_page/images/mem1.jpg" alt=""/>   
                    </div>
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <form id="form1" name="form1" method="post" action="#openmodal7">
                    <h1 style="text-align:center"><p class="ad">STUDENT LOGIN</p> </h1>
                    <h2 style="text-align:center"><p class="pd">SELECT DEPT
                    <?php 
                    mysql_connect("localhost", "root", "") or die("Connection Failed"); 
                    mysql_select_db("tpes")or die("Connection Failed"); 
                    $query = "select distinct department from classteacher"; 
                    $result = mysql_query($query); 
                    ?> 
                    <select name="department">
                    <?php 
                    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
                    { 
                        
                    ?> <option value="<?php echo $line['department'];?>"> 
                        <?php echo $line['department'];?> </option>   <?php 
                    } 
                    ?> 
                    </select> <br><br>
                    <input type="submit" name="submit" value="SUBMIT"/>

                    </form>
                 </div>
                 <div class="copy-right">
                        <p><a  href="">Teaching performence evaluation system</a></p> 
                    </div>
                 </div>    
                </div>  
     <div id="openmodal6" class="modalDialog">
         <div class="login-form">
                    <div class="head1">
                        <img src="home_page/images/mem2.jpg" alt=""/>   
                    </div>
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <?php
                            
                            $department = $_POST['department']; 
                            $_SESSION["department"]=$department;
                             
                            
                            ?>
                            <form id="form1" name="form1" method="post" action="classteacher/admin.php">
                            <h1 style="text-align:center"><p class="ad">CLASSTEACHER LOGIN</p> </h1>

                            <h2 style="text-align:center"><P class="pd">SELECT CLASS: 
                            <?php
                            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
                            mysql_select_db("tpes")or die("Connection Failed"); 
                            $query = "select class from classteacher where department='".$department."'";
                            $result = mysql_query($query); 
                            ?> 
                            <select name="select2">
                            <?php 
                            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
                            { 
                                
                            ?> <option value="<?php echo $line['class'];?>"> 
                                <?php echo $line['class'];?> </option>   <?php 
                            } 
                            ?> 
                            </select> <br>
                            <p class="pd" >PASSWORD:<input type="password" name="passwordc"><br> 
                            <input type="submit" name="submit" value="submit"/>


                            </form>
                        </div>
                        <div class="copy-right">
                        <p><a  href="">Teaching performence evaluation system</a></p> 
                    </div>
                    </div>    
                </div>  
         <div id="openmodal7" class="modalDialog">
         <div class="login-form">
                    <div class="head1">
                        <img src="home_page/images/mem1.jpg" alt=""/>   
                    </div>
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <?php  
                    $department = $_POST['department']; 
                    $_SESSION["department"]=$department;
                     
                    echo "$department";
                    ?>
                    <form id="form1" name="form1" method="post" action="student/admin.php">
                    <h1 style="text-align:center"><p class="ad">STUDENT LOGIN</p> </h1>

                    <h2 style="text-align:center"><P class="pd">SELECT CLASS 
                    <?php
                    mysql_connect("localhost", "root", "") or die("Connection Failed"); 
                    mysql_select_db("tpes")or die("Connection Failed"); 
                    $query = "select class from classteacher where department='".$department."'";
                    $result = mysql_query($query); 
                    ?> 
                    <select name="select2">
                    <?php 
                    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
                    { 
                        
                    ?> <option value="<?php echo $line['class'];?>"> 
                        <?php echo $line['class'];?> </option>   <?php 
                    } 
                    ?> 
                    </select> <br>
                    <p class="pd" >PASSWORD:<input type="password" name="passwordt"><br> 
                    <input type="submit" name="submit" value="submit"/>


                    </form>
                 </div>
                 <div class="copy-right">
                        <p><a  href="">Teaching performence evaluation system</a></p> 
                    </div>
                 </div>    
                </div>             
</body>
</html>