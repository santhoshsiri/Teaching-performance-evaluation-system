
<?php
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "SELECT * from acupdate where id='1'" ;
$query = mysql_query($getinfo);
$row= mysql_fetch_array($query);
$acyear = $row['acyear'];
$sem = $row['sem']; 
 session_start();
$department = $_SESSION['department'];
 $class = $_SESSION['class'];
 $val= $_POST['vas']; 
 $_SESSION['vas']=$val;
 $vle= $_POST['vol'];
 $_SESSION['vol']=$vle;
 $fac=$_POST['facl'];
 $_SESSION['facl']=$fac;
  $i=0;     
    $len=sizeof($fac);
$facs=$_POST['facls'];
$_SESSION['facls']=$facs;
  $i=0;     
    $len1=sizeof($facs);
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
                $sql1="UPDATE facultycourse SET checkb='enable' WHERE department='".$department."'  AND class='".$class."'AND acyear='$acyear' AND sem='$sem'";
                 if(mysqli_query($link, $sql1)){
   
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
             $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND coursetype='theory'AND acyear='$acyear' AND sem='$sem' ") ;
               $i=0;
              while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
             {
                $p= $row['checkb'];
               for($j=$i;$j<$a;)
               {  
                  
                  if($val[$j]==0 && $p=='enable')
                  {
                     echo "<script>alert('not selected')</script>";
                      echo "<script>location.href='Copy of into.php'</script>";
                  } 
                  $j=$j+$m;
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
                $q= $row['checkb'];
                
               for($j=$i;$j<$a;)
               {
                if($vle[$j]==0 && $q=='enable')
                {
                  echo "<script>alert('not selected')</script>";
                      echo "<script>location.href='Copy of into.php'</script>";
                }
                else
                {
                  header("Location:p.php");
                }

                  $j=$j+$m;
                }

                $i++;


}






















?>


