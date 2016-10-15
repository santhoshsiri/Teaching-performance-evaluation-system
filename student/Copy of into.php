<?php
  session_start();
  if($_SESSION["passwordt"]){
    
  }
   else {
     header("location:../../index.php");
   }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
  <script type = "text/javascript" >
       function preventBack(){window.history.forward(1);}
        setTimeout("preventBack()", 10);
        window.onload=function(){null};
</script>
   <link href='http://fonts.googleapis.com/css?family=Judson:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Script-Type" content="text/javascript; charset=utf-8">
		<title>feed back system</title>
	</head>

<body> 
<div id="back">

<p><h2>DEPARTMENT: 
<?php 
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "select * from acupdate where id='1'" ;
$query = mysql_query($getinfo);
$row = mysql_fetch_array($query);

$acyear = $row['acyear'];  
$sem = $row['sem'];






echo $_SESSION['department'];
$department=$_SESSION["department"];
?>


<p id="c">CLASS: 
<?php 
echo $_SESSION['class'];
$class=$_SESSION['class'];
?>



</h2>
 <form action="sel.php" method="post">


<p> 

</p>

<p>THEORY COURSES</P>
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
   //$result = mysql_query("SELECT * FROM class where ac_year='".$year."' AND dept='".$dept."' AND sem='".$sem."' AND class='".$class."'") ;
      ?>
         <input  class="ch" type="checkbox" id="facl" name="facl[]" value=0  checked>
        <table  border="1" style="display: border: 1px solid; float: left; ">
      
        <tr>        
         <td id="t3">SL NO.<br>
         </td></tr>
         
         <tr> <td>1</tr></tr>
          
         <tr><td> 2</td></tr>
          
         <tr><td> 3</td></tr>
          
         <tr><td> 4</td></tr>
         
         <tr><td> 5</td></tr>
        
         <tr><td> 6</td></tr>
          
         <tr><td> 7</td></tr>
         
         <tr><td> 8</td></tr>
                   
         <tr><td> 9</td></tr>         

         <tr><td> 10</td>    
           </tr>
      
</table>

      

 <table id="br"  border="1" style="display: border: 1px solid; float: left; ">
 <thead>
 <td id="p">PARTICULARS<br>
 </td></tr><thead>		
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
{
          
    
            
              	
              echo   "<tr>".
              
		"<td>".$row['item1']."</td>"."</tr>";
             
	      echo "<tr>".
              "<td>".$row['item2']."</td>"."</tr>";
              echo "<tr>".
              "<td>".$row['item3']."</td>"."</tr>";
              echo "<tr>".
              "<td>".$row['item4']."</td>"."</tr>";
              echo "<tr>". 
              "<td>".$row['item5']."</td>"."</tr>";
             echo "<tr>".
              "<td>".$row['item6']."</td>"."</tr>";
             echo "<tr>".
              "<td>".$row['item7']."</td>"."</tr>";
              echo "<tr>".
              "<td>".$row['item8']."</td>"."</tr>";
              echo "<tr>".
              "<td>".$row['item9']."</td>"."</tr>";
              echo "<tr>".
              "<td>".$row['item10']."</td>".
              
              "</tr>\n";

          }
        ?></td>
      </tbody>
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

     $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND coursetype='theory' AND acyear='$acyear' AND sem='$sem'") ;
      ?>
     
     <table id="tb" border="1">

      <thead>
      
      
  <?php
          while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
{           $i=0;
     
             ?>  <td id="t1"> <?php echo $row['coursename']."<br>".$row['faculty'];
                               ?> 
                <br><br>not eligible
                <input type="checkbox" id="facl" name="facl[]" value= <?php echo $row['faculty']; ?>  />
                            </td>

          
              
           <?php   
          }
        ?>
      </thead>
     <?php mysql_close($connector); ?>		
<?php
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "select distinct theory from classteacher where department='".$department."' AND class='".$class."' AND acyear='$acyear' AND sem='$sem'" ;
$query = mysql_query($getinfo);
$row = mysql_fetch_array($query);

$maxcols = $row['theory'];  



$maxid =$maxcols;  
$startid = 1;
$x=10;



for ($i = 1;$i<=ceil($maxid/$maxcols);$i++) 

 echo "<tr>\n";
 $k=0;
   for ($j=0;$j<$maxcols;$j++)
           //if ($startid <=$maxid)
           // echo " <td class='mark'>theory".$startid++."</td>\n";
        //else 
            //echo "  <td> </td>\n";
  //echo "</tr>\n<tr>\n<t>";
 for ($j=1;$j<=10;$j++)
{
 for($x=0;$x<$maxcols;$x++)
 {
  ?>

<td> 
<select id ="vas" name="vas[]" ><option value=0>select</option>
  <option value=1>NOT SATISFACTORY</option>
  <option value=2>SATISFACTORY</option>
  <option value=3>GOOD</option>
  <option value=4>EXCELENT</option></select>

</td>
<?php
$k++;
 }  
 ?> 
 </tr>
 <?php
}    
?>

</table>

      

<p>LABS COURSES</p>
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
 <input  class="chl" type="checkbox" id="facls" name="facls[]" value=0  checked>     
<table border="1" style="display: border: 1px solid; float: left; ">
      <thead>
        <tr> 
         <th id="t3">SL.NO. <br>     
         
         </th></tr>
         <tr> <th>1</th></tr>
          
         <tr><th> 2</th></tr>
          
         <tr><th> 3</th></tr>
          
         <tr><th> 4</th></tr>
         
         <tr><th> 5</th></tr>
        
         <tr><th> 6</th></tr>
          
         <tr><th> 7</th></tr>
         
         <tr><th> 8</th></tr>
                   
         <tr><th> 9</th></tr>         

         <tr><th>  10</th>    
           </tr>
      </thead>
</table>

      
      

 <table  border="1" style="display: border: 1px solid; float: left; ">
<tr><td id="p">PARTICULARS<br>
		
   </td></tr>      
        <?php
          while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
{
              	
              echo   "<tr>".
              
		"<td>".$row['item1']."</td>"."</tr>";
             
	      echo "<tr>".
              "<td>".$row['item2']."</td>"."</tr>";
              echo "<tr>".
              "<td>".$row['item3']."</td>"."</tr>";
              echo "<tr>".
              "<td>".$row['item4']."</td>"."</tr>";
              echo "<tr>". 
              "<td>".$row['item5']."</td>"."</tr>";
             echo "<tr>".
              "<td>".$row['item6']."</td>"."</tr>";
             echo "<tr>".
              "<td>".$row['item7']."</td>"."</tr>";
              echo "<tr>".
              "<td>".$row['item8']."</td>"."</tr>";
              echo "<tr>".
              "<td>".$row['item9']."</td>"."</tr>";
              echo "<tr>".
              "<td>".$row['item10']."</td>".
              
              "</tr>\n";

          }
        ?></td>
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
    //$result = mysql_query("SELECT * FROM parameter WHERE name='lab' ");
   $result = mysql_query("SELECT * FROM facultycourse  WHERE  department='".$department."'  AND class='".$class."' AND coursetype='lab'  AND acyear='$acyear' AND sem='$sem'") ;
      ?>
     <table  border="1" width="10" >
        <thead>
        <?php
          while( $row = mysql_fetch_assoc( $result, MYSQL_ASSOC ) )
{   
     
             ?> <td class="t5"> <?php echo $row['coursename']."<br>".$row['faculty']; 
				?>  <br><br>not eligible
		 <input type="checkbox" id="facls" name="facls[]" value= <?php echo $row['faculty']; ?>  />
                            </td>

          
              
          <?php 
              
          }
        ?>
       </thead>
     <?php mysql_close($connector); ?>		

<?php
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("tpes")or die("Connection Failed"); 
$getinfo = "select distinct lab from classteacher where department='".$department."' AND class='".$class."' AND acyear='$acyear' AND sem='$sem'" ;
$query = mysql_query($getinfo);
$row = mysql_fetch_array($query);

$maxcols = $row['lab'];  


$maxid =$maxcols ;  
$startid = 1;
$x=10;


for ($i = 1;$i<=ceil($maxid/$maxcols);$i++) 

 echo "<tr>\n";
   for ($j=0;$j<$maxcols;$j++)
	
 for ($j=1;$j<=10;$j++)
{
 for($x=0;$x<$maxcols;$x++)
 {
 ?>
 <td> 

<select id ="vol" name="vol[]" ><option value=0>select</option><option value=1>NOT SATISFACTORY</option><option value=2>SATISFACTORY</option><option value=3>GOOD</option><option value=4>EXECELENT</option></select>

</td>
<?php
 }  
 ?> 
 </tr>
 <?php
}    
?>



























</table>

      </table>
<br><br>
<input id="last"type="submit" value="Submit">




</div>

	</body>
</html>
