
<?php
  session_start();
  if($_SESSION["passwords"]){
    
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
      <link rel="stylesheet" type="text/css" href="report.css">
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
 <a href="../profile/profile.php">Back</a>
 <div id="ground" >    
      <center>
       <?php
    
    $year= $_SESSION['acyear']; 
    $sem= $_SESSION['sem'];
    $dept= $_POST["department"];  
	echo"<h3>ACADEMIC YEAR:$year</h3>";
	echo"<h3>SEMISTER:$sem</h3>";
	echo"<h3>DEPARTMENT:$dept</h3>";
	
      
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
    
      <table border="2">
      <thead>
        <tr>
        
          <th><h4>class</th>
          <th><h4>course type</th>
          
          <th><h4>subject</th>
          
          <th><h4>faculty</th>
          
          <th><h4>sum average</th>
         
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
     <?php mysql_close($connector); ?>


  <br><br>
  <center>
     <div id="print">
      <input type="button" value="Print" onClick="print()">
    </div>
    <center>
  <br><br>

  </div>
    </body>
    </html>