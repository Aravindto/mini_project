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
<h1 align="center">7.1.8 - Divyangjan</h1>

<?php
include('connection.php');
//insert code
if(isset($_POST['submit']))
		{
			 $qm=$_POST['qm_index'];
			 $year=$_POST['year'];
			 $budg=$_POST['budget'];
			 $expen=$_POST['expenditure'];
			 $aexpen=$_POST['annual'];
			 $query="insert into institution values ('','$qm','$year','$budg','$expen','$aexpen')";
			  $q=mysql_query($query)or die(mysql_error());
			  header("location:7.1.8_des.php");
			  echo "status:saved";
			 }	?>

<form class="form-wrapper-2 cf" action="7.1.8_rep.php" method="post">
<input type="text" placeholder="Search here..." name="search1">
<button type="submit" name="search">Search</button>
</form>
<table class="tb"><tr><td>
<form method="post" name="fm" action="7.1.8_rep.php">
<input type="submit" name="pdf" value="PDF" class="pdf"/></form></td><td>
<form method="post" name="fm" action="excel.php">

<input type="submit" name="excel718" value="EXCEL" class="excel"/>
</form></td></tr></table>
<?php
function fetch_data()
{
$output='';
$env="select * from institution";
$q1=mysql_query($env);
 while($rs=mysql_fetch_array($q1))
{
$output .= "<tr><td>".$rs['ins']."</td>
	<td>".$rs['year']."</td>
	<td>".$rs['bud']."</td>
	<td>".$rs['expen']."</td>
	<td>".$rs['aexpen']."</td>
	<td>
                                    <form method=post action='7.1.8_des.php' enctype='multipart/form-data'>
                                    <input type=hidden name=ins id=lig_no value=".$rs["ins"]." />
                                    <input type=hidden name=action value=edit >
                                    <input type=submit value=Edit class='btn'>
                                    </form> 
                                    </td>
                               <td>
                         <form method=POST action='7.1.8_rep.php' onSubmit='return ConfirmDelete();'enctype='multipart/form-data'>
                                    <input type=hidden name=ins id=lig_no value=".$rs["ins"]." />
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
  <th width='80'>Year</th>
  <th>Budget allocated for green initiatives</th>
  <th>Expenditure on green initiatives and waste management excluding salary component</th>
  <th>Annual expenditure excluding salary component of the institution </th></tr></thead>";
	echo fetch_data();
	echo"</table>";
}
?>
<?php
//search code
if(isset($_POST['search']))
{
$sear=$_POST['search1'];
$var="select * from institution where ins='$sear'";
$var2=mysql_query($var);
$fetch=mysql_fetch_array($var2);
echo "<table align='center' border='1'>
<thead><tr><th>sl_no</th>
    <th>Year</th>
    <th>Budget allocated for green initiatives</th>
    <th>Expenditure on green initiatives and waste management excluding salary component</th>
    <th>Annual expenditure excluding salary component of the institution </th></tr></thead>";
 	echo "<tr><td>".$fetch['ins']."</td>";
	echo "<td>".$fetch['year']."</td>";
 	echo "<td>".$fetch['bud']."</td>";
	echo"<td>".$fetch['expen']."</td>";
	echo"<td>".$fetch['aexpen']."</td>";
				echo "<td>";
                                    echo "<form method=post action='7.1.8_des.php' enctype='multipart/form-data'>";
                                    echo "<input type=hidden name=lig_no id=lig_no value=".$fetch["ins"]." />";
                                    echo "<input type=hidden name=action value=edit >";
                                    echo "<input type=submit value=Edit class='btn'>";
                                    echo "</form>"; 
                                    echo "</td>";
                                    echo "<td>";
                    echo "<form method=POST action='7.1.8_rep.php' onSubmit='return ConfirmDelete();'enctype='multipart/form-data'>";
                                    echo "<input type=hidden name=lig_no id=lig_no value=".$fetch["ins"]." />";
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
$ins_no=$_POST['ins'];
$qm=$_POST['qm_index'];
$year=$_POST['year'];
$bud=$_POST['budget'];
$expen=$_POST['expenditure'];
$aexpen=$_POST['annual'];
$up="UPDATE institution set qm_index='$qm',year='$year',bud='$bud',expen='$expen',aexpen='$aexpen' where ins='$ins_no'";
$upexe=mysql_query($up) or die(mysql_error());
header('location:7.1.8_des.php');
}
?>
<?php
		//deletion code
      if(isset($_POST["action"]) and $_POST["action"]=="delete")
        {
	$ins_no = (isset($_POST["ins"])? $_POST["ins"] : '');
	 $sql = "delete from institution where ins = '$ins_no'";
	$result = mysql_query($sql);
         if(!$result)
	 {
		echo mysql_error();
	 }	
             
         header("location:7.1.8_des.php");
         } 
       ?>
<?php
//pdf generation(guys thia code will be in you report page)
function fetch_datapdf()
{
	$output='';
	$col="select * from institution";
	$q1=mysql_query($col);
	while($rs=mysql_fetch_array($q1))
{
$output.='<tr><td>'.$rs['ins'].'</td>
	
	<td>'.$rs['year'].'</td>
	<td>'.$rs['bud'].'</td>
	<td>'.$rs['expen'].'</td>
	<td>'.$rs['aexpen'].'</td></tr>';
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
	$h .= "date:".$a."<br>7.1.8 - Divyangjan<br>
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
      $obj_pdf->SetTitle("7.1.8 - Divyangjan");  
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
  <th>year</th>
  <th>Budget allocated for green initiatives</th>
  <th>Expenditure on green initiatives and waste management excluding salary component</th>
  <th>Annual expenditure excluding salary component of the institution </th>
    </tr>';
	  $content .= fetch_datapdf(); 
	  $content .= '</table>';
	  ob_end_clean(); 
	  $content=utf8_decode($content);
      $obj_pdf->writeHTML($content);   
      $obj_pdf->Output('7.1.8.pdf','I'); 
	}
	?>
   		   	   
		   
</body>
</html>
