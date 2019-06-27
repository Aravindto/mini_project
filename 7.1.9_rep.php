<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/search.css" />
<link rel="stylesheet" href="css/style.css">
 <script type="text/javascript">
 	   function ConfirmDelete(){
	       var d = confirm('Do you really want to delete data?');
	       if (d == false) return false;
	   }
</script>
</head>
<body>
<h1 align="center">7.1.9 - Inclusion and situateness</h1>
<?php
include('connection.php');
//insert code
if(isset($_POST['submit']))
		{
			 $qm=$_POST['qm_index'];
			 $yes1=$_POST['yes1'];
			 $yes2=$_POST['yes2'];
			 $yes3=$_POST['yes3'];
			 $yes4=$_POST['yes4'];
			 $yes5=$_POST['yes5'];
			 $yes6=$_POST['yes6'];
			 $yes7=$_POST['yes7'];
			 $other=$_POST['other'];
			 $query="insert into abled values ('','$qm','$yes1','$yes2','$yes3','$yes4','$yes5','$yes6','$yes7','$other')";
			  $q=mysql_query($query)or die(mysql_error());
			  header("location:7.1.9_des.php");
			  echo "status:saved";
			 }	?>

<form class="form-wrapper-2 cf" action="7.1.9_rep.php" method="post">
<input type="text" placeholder="Search here..." name="search1">
<button type="submit" name="search">Search</button>
</form>
<table class="tb"><tr><td>
<form method="post" name="fm" action="7.1.9_rep.php">
<input type="submit" name="pdf" value="PDF" class="pdf" /></form></td><td>
<form method="post" name="fm" action="excel.php">
<input type="submit" name="excel719" value="EXCEL" class="excel"/>
</form></td></tr></table></body>
<?php
function fetch_data()
{
$output='';
$env="select * from abled";
$q1=mysql_query($env);
 while($rs=mysql_fetch_array($q1))
{
$output .= "<tr><td>".$rs['abl']."</td>
	            <td>".$rs['phy']."</td>
	            <td>".$rs['provision']."</td>
				<td>".$rs['ramp']."</td>
				<td>".$rs['sw']."</td>
				<td>".$rs['rest']."</td>
				<td>".$rs['scribes']."</td>
				<td>".$rs['spc']."</td>
                <td>".$rs['other']."</td>	
	<td>
                                    <form method=post action='7.1.9_des.php' enctype='multipart/form-data'>
                                    <input type=hidden name=abl_no id=lig_no value=".$rs["abl"]." />
                                    <input type=hidden name=action value=edit >
                                    <input type=submit value=Edit class='btn'>
                                    </form> 
                                    </td>
                               <td>
                         <form method=POST action='7.1.9_rep.php' onSubmit='return ConfirmDelete();'enctype='multipart/form-data'>
                                    <input type=hidden name=abl_no id=lig_no value=".$rs["abl"]." />
                                    <input type=hidden name=action value=delete />
                                    <input type=submit value=Delete class='btn'/>
                                    </form>
                                   </td>
                                   </tr>";
	}
	return $output;

}
?>
<?php
//report code 
if(isset($_POST['report']))
{
/*$cr=$_POST['cr_index'];
$ki=$_POST['ki_index'];
$qm=$_POST['qm_index'];
//fecth cr_name
$sql="select cr_name from Criterion_Master where cr_index='$cr'";
$q=mysql_query($sql);
$cri=mysql_fetch_assoc($q);
echo"6 ". $cri['cr_name']."<br>";
//fetching ki name
$s="select ki_name from Key_Indicator where ki_index='$ki'";
$s1=mysql_query($s);
$kii=mysql_fetch_array($s1);
echo "6.5 ".$kii['ki_name']."<br>";
// fetch qm name
$qm="select qm_name from quantitative_metrics  where qm_index='$qm'";
$qm1=mysql_query($qm);
$qmn=mysql_fetch_array($qm1);
echo "6.5.3 ".$qmn['qm_name']."<br>";
//fetch all data in table*/
echo "<table align='center' border='1'><thead><tr><th>sl_no</th>
    <th>Physical Facilities</th>
    <th>Provision for Lift </th>
    <th>Ramp/ Rails </th>
	<th>Braille Software/facilities </th>
	<th>Rest Rooms</th>
	<th>Scribes for Examination </th>
	<th>Special skill development for differently abled students </th>
	<th>Any other similar facility </th></tr></thead>";
	echo fetch_data();
	echo"</table>";
}
?>
<?php
//search code
if(isset($_POST['search']))
{
$sear=$_POST['search1'];
$var="select * from abled where abl='$sear'";

$var2=mysql_query($var);
$fetch=mysql_fetch_array($var2);
echo "<table align='center' border='1'>
<thead><tr><th>sl_no</th>
    <th>Physical Facilities</th>
    <th>Provision for Lift</th>
    <th>Ramp/ Rails</th>
	<th>Braille Software/facilities </th>
	<th>Rest Rooms</th>
	<th>Scribes for Examination </th>
	<th>Special skill development for differently abled students </th>
	<th>Any other similar facility </th></tr></thead>";
	echo"<tr><td>".$fetch['abl']."</td>";
 	echo"<td>".$fetch['phy']."</td>";
 	echo"<td>".$fetch['provision']."</td>";
	echo"<td>".$fetch['ramp']."</td>";
	echo"<td>".$fetch['sw']."</td>";
	echo"<td>".$fetch['rest']."</td>";
	echo"<td>".$fetch['scribes']."</td>";
	echo"<td>".$fetch['spc']."</td>";
	echo"<td>".$fetch['other']."</td>";
				echo "<td>";
                                    echo "<form method=post action='7.1.9_des.php' enctype='multipart/form-data'>";
                                    echo "<input type=hidden name=lig_no id=lig_no value=".$fetch["abl"]." />";
                                    echo "<input type=hidden name=action value=edit >";
                                    echo "<input type=submit value=Edit class='btn'>";
                                    echo "</form>"; 
                                    echo "</td>";
                                    echo "<td>";
                    echo "<form method=POST action='7.1.9_rep.php' onSubmit='return ConfirmDelete();'enctype='multipart/form-data'>";
                                    echo "<input type=hidden name=lig_no id=lig_no value=".$fetch["abl"]." />";
                                    echo "<input type=hidden name=action value=delete />";
                                    echo "<input type=submit value=Delete class='btn'/>";
                                    echo "</form>";
                                    echo "</td>";
                                    echo "</tr>";
									echo"</table>";
	}
?>
<?php
//update code
if(isset($_POST['update']))
{
$abl_no=$_POST['abl_no'];
$qm=$_POST['qm_index'];
$yes1=$_POST['yes1'];
$yes2=$_POST['yes2'];
$yes3=$_POST['yes3'];
$yes4=$_POST['yes4'];
$yes5=$_POST['yes5'];
$yes6=$_POST['yes6'];
$yes7=$_POST['yes7'];
$other=$_POST['other'];
$up="UPDATE abled set qm_index='$qm',phy='$yes1',provision='$yes2',ramp='$yes3',sw='$yes4',rest='$yes5',scribes='$yes6',spc='$yes7',other='$other' where abl='$abl_no'";
$upexe=mysql_query($up) or die(mysql_error);
header('location:7.1.9_des.php');
}
?>
<?php
		//deletion code
      if(isset($_POST["action"]) and $_POST["action"]=="delete")
        {
	$abl_no = (isset($_POST["abl_no"])? $_POST["abl_no"] : '');
	 $sql = "delete from abled where abl = '$abl_no'";
	$result = mysql_query($sql);
         if(!$result)
	 {
		echo mysql_error();
	 }	
             
         header("location:7.1.9_des.php");
         } 
       ?>
<?php
//pdf generation(guys thia code will be in you report page)
function fetch_datapdf()
{
	$output='';
	$col="select * from abled";
	$q1=mysql_query($col);
	while($rs=mysql_fetch_array($q1))
{
$output.='<tr><td>'.$rs['abl'].'</td>
	
	<td>'.$rs['phy'].'</td>
	<td>'.$rs['provision'].'</td>
	<td>'.$rs['ramp'].'</td>
	<td>'.$rs['sw'].'</td>
	<td>'.$rs['rest'].'</td>
	<td>'.$rs['scribes'].'</td>
	<td>'.$rs['spc'].'</td>
	<td>'.$rs['other'].'</td></tr>';
}
	return $output;
}
function title()
{
	$h='';
	/*$qm="select qm_name from quantitative_metrics where qm_index='QM3.7.1'";
	$qm1=mysql_query($qm);
	$qmn=mysql_fetch_array($qm1);*/
	$a=date('y/m/d');
	$h .= "date:".$a."<br>7.1.9 - Inclusion and situateness<br>
<br>";
	return $h;
}
if(isset($_POST['pdf']))
{
	  require_once('tcpdf/tcpdf.php'); 
	  class MYPDF extends TCPDF {

    //Page header
   public function Header() {
      // Set font
	  $this->SetY(3);
        $this->SetFont('helvetica', 'B', 14);
        // Title
        $this->Cell(0, 15, 'SREE SARASWATHI THYAGARAJA COLLEGE(Autonomous)', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10,$this->getAliasNumPage(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
	 
} 
      $obj_pdf = new MYPDF('l', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("7.1.9 AVG NO OF QUALITY INITIATIVES");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(true);  
	  $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);
	  $obj_pdf->AddPage();
	  $content = title() ; 
	  $content .= '<table border="1">
	  <tr>
  <th>sl_no</th>
  <th>Physical Facilities</th>
  <th>Provision for Lift</th>
  <th>Ramp/ Rails</th>
  <th>Braille Software/facilities </th>
  <th>Rest Rooms</th>
  <th>Scribes for Examination</th>
  <th>Special skill development for differently abled students</th>
  <th>Any other similar facility</th>
  </tr>';
	  $content .= fetch_datapdf(); 
	  $content .= '</table>';
	  ob_end_clean(); 
	  $content=utf8_decode($content);
      $obj_pdf->writeHTML($content);   
      $obj_pdf->Output('7.1.9.pdf','I'); 
	}
	?>
		   
</body>
</html>
