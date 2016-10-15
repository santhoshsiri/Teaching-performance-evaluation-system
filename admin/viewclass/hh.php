<?php
  session_start();
  if($_SESSION["password"]){
    
  }
   else {
     header("location:../../index.php");
   }
?>

<!doctype html>
    <html lang="en">
    <head>
       <script type="text/javascript">     
        function Print() 
    {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
  
            location.href='admin_summary.php'
                }
     </script>  
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <a href="../profile/profile.php">Back</a>
    <body>
<div id="header">
      <?php
   
    $year= $_SESSION["acyear"]; 
    $sem= $_SESSION["sem"];
    $dept= $_SESSION["department"];  
    $class= $_POST['class'];
    

	echo"<h1>ACADEMIC YEAR:$year<h1>";
	echo"<h1>SEMISTER:$sem<h1>";
	echo"<h1>DEPARTMENT:$dept<h1>";
  echo"<h1>CLASS:$class</h1>";
  ?>

</div>
  <?php
	
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
      
      $selected = mysql_select_db("tpes", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM parameter WHERE coursetype='theory' ");
    
      ?>
</div>  <br><br><br><br><br><br> <br>    
     <h2>THEORY COURSES</h2><br>
 <div id="th">
  <table  border="1" style="display: inline-block; border: 1px solid; float: left; ">
      <thead>
  <?php
          while( $row  = mysql_fetch_assoc( $result )  ){    
        
      

      
           echo
            "<tr>"."<td>".'coursetype'."</td>". "</tr>";
              echo 
               "<tr>". "<td>".'coursename'."</td>". "</tr>";
                echo
            
               "<tr>"."<td>".'faculty'."</td>". "</tr>";

               echo

               "<tr>"."<td>".$row ['item1']."</td>". "</tr>";
               echo
             
               "<tr>"."<td>".$row ['item2']."</td>". "</tr>";
               echo
              
               "<tr>"."<td>".$row ['item3']."</td>". "</tr>";
              echo
               "<tr>"."<td>".$row ['item4']."</td>". "</tr>";
               
               echo
               "<tr>"."<td>".$row ['item5']."</td>". "</tr>";
             
             echo
               "<tr>"."<td>".$row ['item6']."</td>". "</tr>";
             echo
              "<tr>". "<td>".$row ['item7']."</td>". "</tr>";
              echo
               "<tr>"."<td>".$row ['item8']."</td>". "</tr>";
            echo  
               "<tr>"."<td>".$row ['item9']."</td>". "</tr>";
              echo
              "<tr>". "<td>".$row ['item10']."</td>". "</tr>";
              echo
              "<tr>". "<td>".$row['sumavg']."</td>".
              
              "</tr>\n";
                }
        ?>
      </thead>
    </table>
  

     <?php mysql_close($connector); ?>
    
     <?php
      
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
     
      $selected = mysql_select_db("tpes", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM facultycourse WHERE acyear='".$year."' AND department='".$dept."' AND sem='".$sem."' AND class='".$class."' AND coursetype='theory' ");
      ?>
           
      
        <?php
          while( $row  = mysql_fetch_assoc( $result ) ){
            ?>
            <table id="tb" border="1" style="display: inline-block; border: 1px solid;  ">
            <thead>
            
            <?php
           echo
           "<tr>"."<td>".$row['coursetype']."</td>"."</tr>";
          echo
         "<tr>". "<td>".$row['coursename']."</td>"."</tr>";
             echo
              "<tr>". "<td>".$row['faculty']."</td>"."</tr>";  
             echo
               "<tr>"."<td>".$row['avg1']."</td>"."</tr>";
             echo
               "<tr>"."<td>".$row['avg2']."</td>"."</tr>";
              echo
              "<tr>". "<td>".$row['avg3']."</td>"."</tr>";
             echo 
              "<tr>". "<td>".$row['avg4']."</td>"."</tr>";
               echo
               "<tr>"."<td>".$row['avg5']."</td>"."</tr>";
             echo
             "<tr>". "<td>".$row['avg6']."</td>"."</tr>";
            echo 
             "<tr>".  "<td>".$row['avg7']."</td>"."</tr>";
             echo 
              "<tr>". "<td>".$row['avg8']."</td>"."</tr>";
              echo
              "<tr>". "<td>".$row['avg9']."</td>"."</tr>";
              echo
               "<tr>"."<td>".$row['avg10']."</td>"."</tr>";
             echo
              "<tr>". "<td>".$row['sumavg']."</td>"."</tr>";
             ?>
            
             </thead>

                </table>
         <?php     
          }
        ?>
     
     <?php mysql_close($connector); ?>



	<?php
     
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
      
      $selected = mysql_select_db("tpes", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM parameter WHERE coursetype='lab' ");
   
   
      ?>
  </div>
  <div id="td"><br><br><br><br><br><br>
      <h2>LABS</h2> 
      <table id="tc" border="1" style="display: inline-block; border: 1px solid; float: left; ">
        <?php
          while( $row = mysql_fetch_assoc( $result ) )
{
            echo
            "<tr>".
	      
              "<td>".'coursetype'."</td>". "</tr>";
              echo 

	       "<tr>". "<td>".'coursename'."</td>". "</tr>";
         echo
            
               "<tr>"."<td>".'faculty'."</td>". "</tr>";

               echo

               "<tr>"."<td>".$row ['item1']."</td>". "</tr>";
               echo
             
               "<tr>"."<td>".$row ['item2']."</td>". "</tr>";
               echo
              
               "<tr>"."<td>".$row ['item3']."</td>". "</tr>";
              echo
               "<tr>"."<td>".$row ['item4']."</td>". "</tr>";
               
               echo
               "<tr>"."<td>".$row ['item5']."</td>". "</tr>";
             
             echo
               "<tr>"."<td>".$row ['item6']."</td>". "</tr>";
             echo
              "<tr>". "<td>".$row ['item7']."</td>". "</tr>";
              echo
               "<tr>"."<td>".$row ['item8']."</td>". "</tr>";
            echo  
               "<tr>"."<td>".$row ['item9']."</td>". "</tr>";
              echo
              "<tr>". "<td>".$row ['item10']."</td>". "</tr>";
	           echo
               "<tr>"."<td>".$row ['sumavg']."</td>". 
              
              "</tr>";
            }
        ?></tr>
    </table>
    
     <?php mysql_close($connector); ?>
    
     <?php
      
      $username = "root";
      $password = "";
      $host = "localhost";
      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
      $selected = mysql_select_db("tpes", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM facultycourse WHERE acyear='".$year."' AND department='".$dept."' AND sem='".$sem."' AND class='".$class."' AND coursetype='lab' ");
      ?>
     
      
      
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            ?>
            <table id="tb" border="1" style="display: inline-block; border: 1px solid;  ">
            <?php
            echo
            "<tr>".
	      
               "<td>".$row['coursetype']."</td>"."</tr>\n";
               echo
	       "<tr>". "<td>".$row['coursename']."</td>"."</tr>\n";
             echo
              "<tr>". "<td>".$row['faculty']."</td>"."</tr>\n";
              	
             echo


               "<tr>"."<td>".$row['avg1']."</td>"."</tr>\n";
             echo
               "<tr>"."<td>".$row['avg2']."</td>"."</tr>\n";
              echo
              "<tr>". "<td>".$row['avg3']."</td>"."</tr>\n";
             echo 
              "<tr>". "<td>".$row['avg4']."</td>"."</tr>\n";
               echo
               "<tr>"."<td>".$row['avg5']."</td>"."</tr>\n";
             echo
             "<tr>". "<td>".$row['avg6']."</td>"."</tr>\n";
            echo 
             "<tr>".  "<td>".$row['avg7']."</td>"."</tr>\n";
             echo 
              "<tr>". "<td>".$row['avg8']."</td>"."</tr>\n";
              echo
              "<tr>". "<td>".$row['avg9']."</td>"."</tr>\n";
              echo
               "<tr>"."<td>".$row['avg10']."</td>"."</tr>\n";
	           echo
              "<tr>". "<td>".$row['sumavg']."</td>".
              
              "</tr>\n";
              ?>
            </table>
         <?php 
          }
        ?>
     
    
     <?php mysql_close($connector); ?>

</div>
<br><br>
  <div id="print">
      <input type="button" value="Print" onClick="print()">
  </div> <div>


    </body>
    </html>