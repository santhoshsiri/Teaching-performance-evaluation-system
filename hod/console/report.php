<?php
  session_start();
  if($_SESSION["passwordh"]){
    
  }
   else {
     header("location:../../index.php");
   }
?><!doctype html>
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
      <meta charset="UTF-8">
      <title>database connections</title>
      <link href="css/style.css" rel="stylesheet" />
    </head>
    <body>
        <a href="../profile/profile.php">Back</a>
  <div id="bg">
    <center><h2>
    <?php
    $year= $_POST['ac_year']; 
    $sem= $_POST['sem'];
    $dept= $_SESSION["department"];  
   
    

	echo"ACADEMIC YEAR:$year<br>";
	echo"SEMISTER:$sem<br>";
	echo"DEPARTMENT:$dept<br>";
	
      
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
     
      $selected = mysql_select_db("tpes", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM facultycourse WHERE acyear='".$year."' AND department='".$dept."' AND sem='".$sem."' ");
      ?>
     
      </h2><table border="2">
      <thead>
        <tr>
        
          <th>class</th>
          <th>course type</th>
          
          <th>subject</th>
          
          <th>faculty</th>
          
          <th>sum average</th>
         
           </tr>
      </thead>

      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>".
	       
	      "<td>".$row['class']."</td>".
              
	      "<td>".$row['coursetype']."</td>".
              	
              "<td>".$row['coursename']."</td>".
              "<td>".$row['faculty']."</td>".
              	
             
              "<td>".$row['sumavg']."</td>".
              "</tr>\n";
          }
        ?>
      </tbody>
    </table>
    <br><br>
<br><br>
  <div id="print">
      <input type="button" value="Print" onClick="print()">
  </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br>
     <?php mysql_close($connector); ?>
   </div>
    </body>
    </html>