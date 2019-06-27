<?php
	//excel code(Guys this code will be in excel page you can create a page as excel and paste all the excel code)
$connect = mysqli_connect("localhost", "root", "", "iqac");
$output = '';
if(isset($_POST['excel718']))
{
 $query = "SELECT * FROM institution";
 $result = mysqli_query($connect, $query);
/*$qm="select qm_name from quantitative_metrics  where qm_index='QM6.5.3'";
$qm1=mysqli_query($connect,$qm);
$qmn=mysqli_fetch_array($qm1);*/
$a=date("Y/m/d");
$output.="<h3 align='center'>SREE SARASWATHI THYAGARAJA COLLEGE(AUTONOMOUS)<br>INTERNAL QUALITY ASSESSMENT<br></h3>Date:".$a."<br><br>";
 if(mysqli_num_rows($result) > 0)
 {
 $output .= '7.1.8
   <table border="1">  
                    <tr>
				   <th>s_no</th>
				   <th>year</th>
  				   <th>Budget allocated for green initiatives</th>
  				   <th>Expenditure on green initiatives and waste management excluding salary component</th>
                   <th>Annual expenditure excluding salary component of the institution </th></tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>    
                         <td>'.$row["ins"].'</td>  
						 <td>'.$row["year"].'</td>
                         <td>'.$row["bud"].'</td>  
       <td>'.$row["expen"].'</td>  
       <td>'.$row["aexpen"].'</td></tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=7.1.8.xls');
  echo $output;
   }
}
?>	



<?php
	//excel code(Guys this code will be in excel page you can create a page as excel and paste all the excel code)7.1.9
$connect = mysqli_connect("localhost", "root", "", "iqac");
$output = '';
if(isset($_POST["excel719"]))
{
 $query = "SELECT * FROM abled";
 $result = mysqli_query($connect, $query);
/*$qm="select qm_name from quantitative_metrics  where qm_index='QM-7.1.9'";
$qm1=mysqli_query($connect,$qm);
$qmn=mysqli_fetch_array($qm1);*/
$a=date("Y/m/d");
$output.="<h3 align='center'>SREE SARASWATHI THYAGARAJA COLLEGE(AUTONOMOUS)<br>INTERNAL QUALITY ASSESSMENT<br></h3>Date:".$a."<br><br>";
 if(mysqli_num_rows($result) > 0)
 {
 $output .= '7.1.9
   <table border="1">  
                    <tr>
					<th>s_no</th>
  <th>Physical Facilities</th>
  <th>Provision for Lift</th>
  <th>Ramp/ Rails</th>
  <th>Braille Software/facilities </th>
  <th>Rest Rooms</th>
  <th>Scribes for Examination</th>
  <th>Special skill development for differently abled students</th>
  <th>Any other similar facility</th>
</tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>    
                         <td>'.$row["abl"].'</td>                         <td>'.$row["phy"].'</td>
                         <td>'.$row["provision"].'</td>  
       					 <td>'.$row["ramp"].'</td>  
                         <td>'.$row["sw"].'</td>
	    				 <td>'.$row["rest"].'</td>
						 <td>'.$row["scribes"].'</td>
						 <td>'.$row["spc"].'</td>
						 <td>'.$row["other"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=7.1.9.xls');
  echo $output;
   }
}
?>	   		   	   



<?php
	//excel code(Guys this code will be in excel page you can create a page as excel and paste all the excel code)7.1.10
$connect = mysqli_connect("localhost", "root", "", "iqac");
$output = '';
if(isset($_POST["excel7110"]))
{
 $query = "SELECT * FROM address";
 $result = mysqli_query($connect, $query);
/*$qm="select qm_name from quantitative_metrics  where qm_index='QM6.5.3'";
$qm1=mysqli_query($connect,$qm);
$qmn=mysqli_fetch_array($qm1);*/
$a=date("Y/m/d");
$output.="<h3 align='center'>SREE SARASWATHI THYAGARAJA COLLEGE(AUTONOMOUS)<br>INTERNAL QUALITY ASSESSMENT<br></h3>Date:".$a."<br><br>";
 if(mysqli_num_rows($result) > 0)
 {
 $output .= '7.1.10
   <table border="1">  
                    <tr>
					<th width="40">s_no</th>
					<th>Year</th>
     				<th>Number of initiatives to address locational advantages and disadvantages</th>
  					<th>Number of initiatives taken to engage with and contribute to local community</th>
  					<th>From</th>
  					<th>To</th>
  					<th>Name of the initiative</th>
  					<th>Issues addressed</th>
  					<th>Number of participating students</th></tr>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>    
                         <td>'.$row["adno"].'</td>  
						 <td>'.$row["year"].'</td>
                         <td>'.$row["add"].'</td> 
						 <td>'.$row["local"].'</td>  
        				 <td>'.$row["frm"].'</td>  
    				   	 <td>'.$row["to"].'</td>
	    				 <td>'.$row["name"].'</td>
						 <td>'.$row["issued"].'</td> 
						 <td>'.$row["parti"].'</td> </tr>';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=7.1.10.xls');
  echo $output;
   }
}
?>



<?php
	//excel code(Guys this code will be in excel page you can create a page as excel and paste all the excel code)7.1.14
$connect = mysqli_connect("localhost", "root", "", "iqac");
$output = '';
if(isset($_POST["excel7114"]))
{
 $query = "SELECT * FROM plans";
 $result = mysqli_query($connect, $query);
/*$qm="select qm_name from quantitative_metrics  where qm_index='QM6.5.3'";
$qm1=mysqli_query($connect,$qm);
$qmn=mysqli_fetch_array($qm1);*/
$a=date("Y/m/d");
$output.="<h3 align='center'>SREE SARASWATHI THYAGARAJA COLLEGE(AUTONOMOUS)<br>INTERNAL QUALITY ASSESSMENT<br></h3>Date:".$a."<br><br>";
 if(mysqli_num_rows($result) > 0)
 {
 $output .= '7.1.14
   <table border="1">  
                    <tr>
					<th>s_no</th>
  					<th>year</th>
 				    <th>Title of the Programme/Activity</th>
 				    <th>From</th>
					<th>To</th>
  					<th>Number of participants</th></tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>    
                         <td>'.$row["plno"].'</td>  
						 <td>'.$row["year"].'</td>
                         <td>'.$row["prog"].'</td>  
       					 <td>'.$row["frm"].'</td>  
       					 <td>'.$row["to"].'</td>
	    				 <td>'.$row["num"].'</td></tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=7.1.14.xls');
  echo $output;
   }
}
?>	


<?php
	//excel code(Guys this code will be in excel page you can create a page as excel and paste all the excel code)7.1.17
$connect = mysqli_connect("localhost", "root", "", "iqac");
$output = '';
if(isset($_POST["excel7117"]))
{
 $query = "SELECT * FROM promotion";
 $result = mysqli_query($connect, $query);
/*$qm="select qm_name from quantitative_metrics  where qm_index='QM6.5.3'";
$qm1=mysqli_query($connect,$qm);
$qmn=mysqli_fetch_array($qm1);*/
$a=date("Y/m/d");
$output.="<h3 align='center'>SREE SARASWATHI THYAGARAJA COLLEGE(AUTONOMOUS)<br>INTERNAL QUALITY ASSESSMENT<br></h3>Date:".$a."<br><br>";
 if(mysqli_num_rows($result) > 0)
 {
 $output .= '7.1.17
   <table border="1">  
                    <tr>
					<th>s_no</th>
  					<th>year</th>
  					<th>Title of the Programme/Activity</th>
  					<th>From</th>
  					<th>To</th>
  					<th>Number of participants</th></tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>    
                         <td>'.$row["pmno"].'</td>  
						 <td>'.$row["year"].'</td>
                         <td>'.$row["activity"].'</td>  
       					 <td>'.$row["frm"].'</td>  
       					 <td>'.$row["to"].'</td>
	    				 <td>'.$row["parti"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=7.1.17.xls');
  echo $output;
   }
}
?>	   		