 
 <!DOCTYPE html>
<html>
<head>
  <script type = "text/javascript" >
       function preventBack(){window.history.forward(1);}
        setTimeout("preventBack()", 10);
        window.onload=function(){null};
    </script></head>

    <?php
    session_start();
  if($_SESSION["passwordt"]){
    
  }
   else {
     header("location:../../index.php");
   }
?>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
  <div id="back">
<?php
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "SELECT * from acupdate where id='1'" ;
$query = mysql_query($getinfo);
$row= mysql_fetch_array($query);
$acyear = $row['acyear']; 
$sem = $row['sem'];
?>
<?php
$department = $_SESSION['department'];
 $class = $_SESSION['class'];
 $val= $_SESSION['vas']; 
 $vle= $_SESSION['vol'];
 $fac=$_SESSION['facl'];
  $i=0;     
    $len=sizeof($fac);
$facs=$_SESSION['facls'];
  $i=0;     
    $len1=sizeof($facs);


?>


          
            <?php



            $dbhost = 'localhost';                                                 
            $dbuser = 'root';             
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn )
            {
              die('Could not connect: ' . mysql_error());
            }
            $connector = mysql_connect($dbhost, $dbuser, $dbpass)
                      or die("Unable to connect");
                  
            $selected = mysql_select_db("tpes", $connector)
                    or die("Unable to connect");
            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
            mysql_select_db("tpes")or die("Connection Failed"); 
            $getinfo = "select * from classteacher where department='".$department."' AND class='".$class."'AND acyear='$acyear' AND sem='$sem'" ;
            $query = mysql_query($getinfo);
            $rows = mysql_fetch_array($query);
            $m = $rows['theory'];
            $a=10*$m;
             $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND acyear='$acyear' AND sem='$sem' ") ;
               $i=0;
             while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
             {
                $link = mysqli_connect("localhost", "root", "", "tpes");
                 

                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql1="UPDATE facultycourse SET checkb='enable' WHERE department='$department'  AND class='".$class."'AND acyear='$acyear' AND sem='$sem'";
                 if(mysqli_query($link, $sql1)){
   
                } 
                  else{

                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                }


              }

              ?>











              <?php



            $dbhost = 'localhost';                                                 
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn )
            {
              die('Could not connect: ' . mysql_error());
            }
            $connector = mysql_connect($dbhost, $dbuser, $dbpass)
                      or die("Unable to connect");
                  
            $selected = mysql_select_db("tpes", $connector)
                    or die("Unable to connect");
            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
            mysql_select_db("tpes")or die("Connection Failed"); 
            $getinfo = "select distinct theory from classteacher where department='".$department."' AND class='".$class."' AND acyear='$acyear' AND sem='$sem'" ;
            $query = mysql_query($getinfo);
            $rows = mysql_fetch_array($query);
            $m = $rows['theory'];
            $a=10*$m;
             $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND coursetype='theory' AND acyear='$acyear' AND sem='$sem'") ;
            for($i=0;$i<$len;$i++)
            { 
              $s=$fac[$i];
             
              $link = mysqli_connect("localhost", "root", "", "tpes");
              if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql1="UPDATE facultycourse SET checkb='disbale' WHERE   department='".$department."'  AND class='".$class."' AND acyear='$acyear' AND sem='$sem' AND coursetype='theory' AND faculty='$s'";
                 if(mysqli_query($link, $sql1)){
                                  }
             }



              ?>
          



            <?php

            $dbhost = 'localhost';                                                 
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn )
            {
              die('Could not connect: ' . mysql_error());
            }
            $connector = mysql_connect($dbhost, $dbuser, $dbpass)
                      or die("Unable to connect");
                  
            $selected = mysql_select_db("tpes", $connector)
                    or die("Unable to connect");
            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
            mysql_select_db("tpes")or die("Connection Failed"); 
            $getinfo = "select distinct theory from classteacher where department='".$department."' AND class='".$class."' AND acyear='$acyear' AND sem='$sem'" ;
            $query = mysql_query($getinfo);
            $rows = mysql_fetch_array($query);
            $m = $rows['theory'];
            $a=10*$m;
             $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND coursetype='theory'AND acyear='$acyear' AND sem='$sem'") ;
               $i=0;
             while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
             {
                $count=$row['evalcount'];
                $count=$count+1;

                $link = mysqli_connect("localhost", "root", "", "tpes");
                 

                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql1="UPDATE facultycourse SET evalcount='$count'
                 WHERE coursename='".$row['coursename']."' AND checkb='enable' AND acyear='".$row['acyear']."' 
                 AND sem='".$row['sem']."' AND department='".$row['department']."' AND coursetype='".$row['coursetype']."' ";
                 if(mysqli_query($link, $sql1)){
   
                } 
                  else{

                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                }
                $k=0;
               for($j=$i;$j<$a;)
               {

               
               $item[$k]=$val[$j];
               $k++;
                  $j=$j+$m;
                }
               

                $link = mysqli_connect("localhost", "root", "", "tpes");
                 

                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

               

                   $test[0]= $row['mark1'];  
                   $test[1]= $row['mark2']; 
                   $test[2]= $row['mark3']; 
                   $test[3]= $row['mark4']; 
                   $test[4]= $row['mark5']; 
                   $test[5]= $row['mark6']; 
                   $test[6]= $row['mark7']; 
                   $test[7]= $row['mark8']; 
                   $test[8]= $row['mark9']; 
                   $test[9]= $row['mark10']; 

                $sql = "UPDATE facultycourse SET mark1='$item[0]'+'$test[0]' ,mark2='$item[1]'+'$test[1]',mark3='$item[2]'+'$test[2]',mark4='$item[3]'+'$test[3]',mark5='$item[4]'+'$test[4]',mark6='$item[5]'+'$test[5]',mark7='$item[6]'+'$test[6]',mark8='$item[7]'+'$test[7]',mark9='$item[8]'+'$test[8]',mark10='$item[9]'+'$test[9]' 
                WHERE coursename='".$row['coursename']."' AND checkb='enable' AND acyear='".$row['acyear']."' 
                 AND sem='".$row['sem']."' AND department='".$row['department']."' AND coursetype='".$row['coursetype']."' ";
                  if(mysqli_query($link, $sql)){
   
                } 
		                else{

                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                }

                $i++;

              }

               $dbhost = 'localhost';                                                 
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn )
            {
              die('Could not connect: ' . mysql_error());
            }
              $connector = mysql_connect($dbhost, $dbuser, $dbpass)
                      or die("Unable to connect");
                  
                  $selected = mysql_select_db("tpes", $connector)
                    or die("Unable to connect");
            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
            mysql_select_db("tpes")or die("Connection Failed"); 
            $getinfo = "select distinct theory from classteacher where department='".$department."' AND class='".$class."'" ;
            $query = mysql_query($getinfo);
            $rows = mysql_fetch_array($query);
            $m = $rows['theory'];
            $a=10*$m;
             $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND coursetype='theory' AND acyear='$acyear' AND sem='$sem'") ;
               $i=0;
             while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
             {
              
                $link = mysqli_connect("localhost", "root", "", "tpes");
                 

                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

               

                   $test1[0]= $row['mark1'];  
                   $test1[1]= $row['mark2']; 
                   $test1[2]= $row['mark3']; 
                   $test1[3]= $row['mark4']; 
                   $test1[4]= $row['mark5']; 
                   $test1[5]= $row['mark6']; 
                   $test1[6]= $row['mark7']; 
                   $test1[7]= $row['mark8']; 
                   $test1[8]= $row['mark9']; 
                   $test1[9]= $row['mark10']; 
                 $sql2 = "UPDATE facultycourse SET avg1='$test1[0]'/'$count' ,avg2='$test1[1]'/'$count',avg3='$test1[2]'/'$count',avg4='$test1[3]'/'$count',avg5='$test1[4]'/'$count',avg6='$test1[5]'/'$count',avg7='$test1[6]'/'$count',avg8='$test1[7]'/'$count',avg9='$test1[8]'/'$count',avg10='$test1[9]'/'$count'
                  WHERE coursename='".$row['coursename']."' AND checkb='enable' AND acyear='".$row['acyear']."' 
                 AND sem='".$row['sem']."' AND department='".$row['department']."' AND coursetype='".$row['coursetype']."' ";
                  if(mysqli_query($link, $sql2)){
   
                } 
                    else{

                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                }

              }


	
                 $dbhost = 'localhost';                                                 
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn )
            {
              die('Could not connect: ' . mysql_error());
            }
              $connector = mysql_connect($dbhost, $dbuser, $dbpass)
                      or die("Unable to connect");
                  
                  $selected = mysql_select_db("tpes", $connector)
                    or die("Unable to connect");
            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
            mysql_select_db("tpes")or die("Connection Failed"); 
            $getinfo = "select distinct theory from classteacher where department='".$department."' AND class='".$class."' AND acyear='$acyear' AND sem='$sem'" ;
            $query = mysql_query($getinfo);
            $rows = mysql_fetch_array($query);
            $m = $rows['theory'];
            $a=10*$m;
             $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND coursetype='theory' AND acyear='$acyear' AND sem='$sem'") ;
               $i=0;
             while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
             {
                 $link = mysqli_connect("localhost", "root", "", "tpes");
                 

                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

               

                   $test3[0]= $row['avg1'];  
                   $test3[1]= $row['avg2']; 
                   $test3[2]= $row['avg3']; 
                   $test3[3]= $row['avg4']; 
                   $test3[4]= $row['avg5']; 
                   $test3[5]= $row['avg6']; 
                   $test3[6]= $row['avg7']; 
                   $test3[7]= $row['avg8']; 
                   $test3[8]= $row['avg9']; 
                   $test3[9]= $row['avg10']; 
                   
                 $sql4 = "UPDATE facultycourse SET sumavg=('$test3[0]'+'$test3[1]'+'$test3[2]'+'$test3[3]'+'$test3[4]'+'$test3[5]'+'$test3[6]'+'$test3[7]'+'$test3[8]'+'$test3[9]')/10 
                 WHERE coursename='".$row['coursename']."' AND checkb='enable' AND acyear='".$row['acyear']."' 
                 AND sem='".$row['sem']."' AND department='".$row['department']."' AND coursetype='".$row['coursetype']."' ";
                  if(mysqli_query($link, $sql4)){
   
                } 
                    else{

                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                }

          
              }



          ?>
          

       








              <?php



            $dbhost = 'localhost';                                                 
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn )
            {
              die('Could not connect: ' . mysql_error());
            }
            $connector = mysql_connect($dbhost, $dbuser, $dbpass)
                      or die("Unable to connect");
                  
            $selected = mysql_select_db("tpes", $connector)
                    or die("Unable to connect");
            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
            mysql_select_db("tpes")or die("Connection Failed"); 
            $getinfo = "select * from classteacher where department='".$department."' AND class='".$class."' AND acyear='$acyear' AND sem='$sem'" ;
            $query = mysql_query($getinfo);
            $rows = mysql_fetch_array($query);
            $m = $rows['lab'];
            $a=10*$m;
             $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND acyear='$acyear' AND sem='$sem'") ;
            for($i=0;$i<$len1;$i++)
            { 
              $s1=$facs[$i];
             
              $link = mysqli_connect("localhost", "root", "", "tpes");
              if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql1="UPDATE facultycourse SET checkb='disbale' WHERE   department='".$department."'  AND class='".$class."' AND acyear='$acyear' AND sem='$sem' AND faculty='$s1' AND coursetype='lab'";
                 if(mysqli_query($link, $sql1)){
                                  }
             }



              ?>










           <?php

            $dbhost = 'localhost';                                                 
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn )
            {
              die('Could not connect: ' . mysql_error());
            }
              $connector = mysql_connect($dbhost, $dbuser, $dbpass)
                      or die("Unable to connect");
                  
                  $selected = mysql_select_db("tpes", $connector)
                    or die("Unable to connect");
            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
            mysql_select_db("tpes")or die("Connection Failed"); 
            $getinfo = "select distinct lab from classteacher where department='".$department."' AND class='".$class."'  AND acyear='$acyear' AND sem='$sem'" ;
            $query = mysql_query($getinfo);
            $rows = mysql_fetch_array($query);
            $m = $rows['lab'];
            $a=10*$m;
             $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND coursetype='lab' AND acyear='$acyear' AND sem='$sem'") ;
               $i=0;
             while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
             {
                  
              $countS=$row['evalcount'];
                $countS=$countS+1;

                $link = mysqli_connect("localhost", "root", "", "tpes");
                 

                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql1="UPDATE facultycourse SET evalcount='$countS' WHERE coursename='".$row['coursename']."'  AND checkb='enable' AND acyear='$acyear' AND sem='$sem'";
                 if(mysqli_query($link, $sql1)){
   
                } 
                  else{

                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                }


                $k=0;
               for($j=$i;$j<$a;)
               {

               
               $item[$k]=$vle[$j];
               $k++;
                  $j=$j+$m;
                }
               

                $link = mysqli_connect("localhost", "root", "", "tpes");
                 

                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

               

                   $test[0]= $row['mark1'];  
                   $test[1]= $row['mark2']; 
                   $test[2]= $row['mark3']; 
                   $test[3]= $row['mark4']; 
                   $test[4]= $row['mark5']; 
                   $test[5]= $row['mark6']; 
                   $test[6]= $row['mark7']; 
                   $test[7]= $row['mark8']; 
                   $test[8]= $row['mark9']; 
                   $test[9]= $row['mark10']; 

                $sql = "UPDATE facultycourse SET mark1='$item[0]'+'$test[0]' ,mark2='$item[1]'+'$test[1]',mark3='$item[2]'+'$test[2]',mark4='$item[3]'+'$test[3]',mark5='$item[4]'+'$test[4]',mark6='$item[5]'+'$test[5]',mark7='$item[6]'+'$test[6]',mark8='$item[7]'+'$test[7]',mark9='$item[8]'+'$test[8]',mark10='$item[9]'+'$test[9]' 
                WHERE coursename='".$row['coursename']."' AND checkb='enable' AND acyear='".$row['acyear']."' 
                 AND sem='".$row['sem']."' AND department='".$row['department']."' AND coursetype='".$row['coursetype']."' ";
                  if(mysqli_query($link, $sql)){
   
                } 
                    else{

                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                }


                $i++;

              }



                 $dbhost = 'localhost';                                                 
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn )
            {
              die('Could not connect: ' . mysql_error());
            }
              $connector = mysql_connect($dbhost, $dbuser, $dbpass)
                      or die("Unable to connect");
                  
                  $selected = mysql_select_db("tpes", $connector)
                    or die("Unable to connect");
            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
            mysql_select_db("tpes")or die("Connection Failed"); 
            $getinfo = "select distinct lab from classteacher where department='".$department."' AND class='".$class."' AND acyear='$acyear' AND sem='$sem'" ;
            $query = mysql_query($getinfo);
            $rows = mysql_fetch_array($query);
            $m = $rows['lab'];
            $a=10*$m;
             $result = mysql_query("SELECT * FROM facultycourse 
              WHERE  department='".$department."'  AND class='".$class."' AND coursetype='lab' AND acyear='$acyear' AND sem='$sem'") ;
               $i=0;
             while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
             {
                 $link = mysqli_connect("localhost", "root", "", "tpes");
                 

                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

               

                   $test1[0]= $row['mark1'];  
                   $test1[1]= $row['mark2']; 
                   $test1[2]= $row['mark3']; 
                   $test1[3]= $row['mark4']; 
                   $test1[4]= $row['mark5']; 
                   $test1[5]= $row['mark6']; 
                   $test1[6]= $row['mark7']; 
                   $test1[7]= $row['mark8']; 
                   $test1[8]= $row['mark9']; 
                   $test1[9]= $row['mark10']; 
                   
                 $sql2 = "UPDATE facultycourse SET avg1='$test1[0]'/'$countS' ,avg2='$test1[1]'/'$countS',avg3='$test1[2]'/'$countS',avg4='$test1[3]'/'$countS',avg5='$test1[4]'/'$countS',avg6='$test1[5]'/'$countS',avg7='$test1[6]'/'$countS',avg8='$test1[7]'/'$countS',avg9='$test1[8]'/'$countS',avg10='$test1[9]'/'$countS' 
                 WHERE coursename='".$row['coursename']."' AND checkb='enable' AND acyear='".$row['acyear']."' 
                 AND sem='".$row['sem']."' AND department='".$row['department']."' AND coursetype='".$row['coursetype']."' ";
                  if(mysqli_query($link, $sql2)){
   
                } 
                    else{

                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                }

          
              }






                 $dbhost = 'localhost';                                                 
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn )
            {
              die('Could not connect: ' . mysql_error());
            }
              $connector = mysql_connect($dbhost, $dbuser, $dbpass)
                      or die("Unable to connect");
                  
                  $selected = mysql_select_db("tpes", $connector)
                    or die("Unable to connect");
            mysql_connect("localhost", "root", "") or die("Connection Failed"); 
            mysql_select_db("tpes")or die("Connection Failed"); 
            $getinfo = "select distinct lab from classteacher where department='".$department."' AND class='".$class."' AND acyear='$acyear' AND sem='$sem'" ;
            $query = mysql_query($getinfo);
            $rows = mysql_fetch_array($query);
            $m = $rows['lab'];
            $a=10*$m;
             $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND coursetype='lab' AND acyear='$acyear' AND sem='$sem'") ;
               $i=0;
             while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
             {
                 $link = mysqli_connect("localhost", "root", "", "tpes");
                 

                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

               

                   $test2[0]= $row['avg1'];  
                   $test2[1]= $row['avg2']; 
                   $test2[2]= $row['avg3']; 
                   $test2[3]= $row['avg4']; 
                   $test2[4]= $row['avg5']; 
                   $test2[5]= $row['avg6']; 
                   $test2[6]= $row['avg7']; 
                   $test2[7]= $row['avg8']; 
                   $test2[8]= $row['avg9']; 
                   $test2[9]= $row['avg10']; 
                   
                 $sql3 = "UPDATE facultycourse SET sumavg=('$test2[0]'+'$test2[1]'+'$test2[2]'+'$test2[3]'+'$test2[4]'+'$test2[5]'+'$test2[6]'+'$test2[7]'+'$test2[8]'+'$test2[9]')/10 
                 WHERE coursename='".$row['coursename']."' AND checkb='enable' AND acyear='".$row['acyear']."' 
                 AND sem='".$row['sem']."' AND department='".$row['department']."' AND coursetype='".$row['coursetype']."' ";
                  if(mysqli_query($link, $sql3)){
   
                } 
                    else{

                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                }

          
              }

  ?>


<br><br><br><br><br>
<h1 id="t">THANK YOU</h1><br><br>
<h2 id="y">YOUR ONLINE FEED BACK IS SUCCESSFULL</h2><br><br>




<form id="form1" name="form1" method="post" action="logout.php">

<input id="last" type="submit" name="submit" value="Logout"/>

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
</form>
</div>
</body>
</html>