

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Teaching Performance Evaluation System</title>
<style type="text/css">
		<!--
		.style1 {
			font-size: 36px;
			font-weight: bold;
			font-family: Times New Roman,verdana;
		            }
		.style2 {
			color: BLACK;
			font-size: 20px;
			font-weight: bold;
		            }
		.style3 {
			color: BLACK;
			font-size: 30px;
			font-weight: bold;
		            }
		.style4 {
			color: black;
			font-weight: bold;
		           }
		body{
	background-color:#A5A60C;
	background-image:url(bg-student.png);
	background-repeat:repeat;
	}
		-->
	</style>
</style>

  <script type="text/javascript">     
        function Print() 
		{    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>      
           </head>

<body>

<table align="center" width="100px" border="0" height="375">
<tr>
	<td height="136" colspan="3">	  <div align="center"><img src="HomeBanner.jpg" width="750" height="134" border="2" align="center"  /></div></td>
</tr>	
<tr>
<td align="center" valign="middle">
  <div align="center">
    <p class="style1 style10">Online Teaching Performance Evaluation System</p>
    </div></td>
</tr>

<tr>
<td height="121"> <div align="center">
      <form id="" name="" method="post" action="admin_summary_class.php">
        <table width="357" border="0">
          <tr>
            <td width="168" height="40"><strong>Select the Department</strong></td>
            <td width="173">
              <?php
    $hostname="localhost";
    $username="root";
    $password="";
    $dbid="db_feedback";
    $link=mysql_connect($hostname,$username,$password);
    mysql_select_db($dbid) or die("unable to connect");
    $sql = "select distinct department from hod_tb ";
	 $retval = mysql_query( $sql, $link );
    if($retval)
    {
    echo '<select style="width:170px"  name="department" id="department">';
    while($myrow = mysql_fetch_array($retval))
    {
	$department=$myrow['department'];
    echo "<option> $department </option>";
    }
    echo "</select>";
    }
    ?>
       </td>
          </tr>
        </table>
        <p align="center">
          <input type="image" src="btnsubmit.png" width="15%" height="70%" value="Submit" />
        </p>
        
</form>
     
</div></td>
</tr>
<tr>
  <td height="21">&nbsp;</td>
</tr>
</table>

</body>
</html>
