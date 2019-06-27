<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>naac</title>
		<link rel="stylesheet" href="css/google.css" type="text/css">
        <link rel="stylesheet" href="css/tebt.css" type="text/css">
        <link rel="stylesheet" href="css/form.css" type="text/css">
        <script src="js/form.js" type="text/javascript"></script>
    </head>
    <body style=" background:url('images/mount.jpg') no-repeat;
	  background-size: cover;
	  height:50%">
	  <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <center>
                      <h3><strong style="color:white">7.1.9 - Inclusion and situateness</strong></h3></center>
             <form name="qm7.1.9" id="7.1.9" action="7.1.9_rep.php" method="post" class="montform">
               <table class="w3-container">
                 <?php 
	  		include("connection.php");
			 if(isset($_POST["action"]) and $_POST["action"]=="edit")
             {
             $abl_no = (isset($_POST["abl_no"])? $_POST["abl_no"] : '');
                $sq = "select * from abled where abl = '$abl_no'";
                 $result = mysql_query($sq);
                
                while($rec = mysql_fetch_array($result))
                    {
					?>
                 <tr>
                   <td><label>abl</label></td>
                   <td><input type="text" name="abl_no" readonly value="<?php echo $rec['abl'];?>" /></td>
                 </tr>
                 <tr>
                   <td width="331"><label>Criteria index</label></td>
                   <td width="137"><input type="text" name="cr_index" placeholder="Criteria index" value="CR007" readonly></td>
                 </tr>
                 <tr>
                   <td><label>Key Indicator</label></td>
                   <td><input type="text" name="ki_index" placeholder="Key Indicator" value="KI-7.1" readonly></td>
                 </tr>
                 <tr>
                   <td><label>Quantitative Metrics Index</label></td>
                   <td><input type="text" name="qm_index" placeholder="Quantitative Metrics Index" value="QM-7.1.9" readonly></td>
                 </tr>
                 <tr>
                   <td><label>Physical Facilities</label></td>
                    <td> <select name="yes1" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Provision for Lift </label></td>
                   <td><select name="yes2" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Ramp/ Rails </label></td>
                   <td><select name="yes3" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Braille Software/facilities </label></td>
                   <td><select name="yes4" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Rest Rooms</label></td>
                   <td><select name="yes5" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Scribes for Examination </label></td>
                   <td><select name="yes6" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Special skill development for differently abled students </label></td>
                   <td><select name="yes7" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Any other similar facility </label></td>
                   <td><input type="text" name="other" placeholder="" value="<?php echo $rec['other'];?>"></td>
                 </tr>
                 <br>
                 <br>
                 <tr>
                   <td><input type="submit" name="update" value="update" class="w3-button w3-black"></td>
                 </tr>
                 <?php
        }
         }
else 
{
         ?>
                 <tr>
                   <td width="331"><label>Criteria index</label></td>
                   <td width="137"><input type="text" name="cr_index" placeholder="Criteria index" value="CR007" readonly></td>
                 </tr>
                 <tr>
                   <td><label>Key Indicator</label></td>
                   <td><input type="text" name="ki_index" placeholder="Key Indicator" value="KI-7.1" readonly></td>
                 </tr>
                 <tr>
                   <td><label>Quantitative Metrics Index</label></td>
                   <td><input type="text" name="qm_index" placeholder="Quantitative Metrics Index" value="QM-7.1.9" readonly></td>
                 </tr>
                 <tr>
                   <td><label>Physical Facilities</label></td>
                   <td><select name="yes1" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Provision for Lift</label></td>
                   <td><select name="yes2" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
				 <tr>
                   <td><label>Ramp/ Rails </label></td>
                   <td>
                     <select name="yes3" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Braille Software/facilities </label></td>
                   <td><select name="yes4" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Rest Rooms</label></td>
                   <td><select name="yes5" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Scribes for Examination </label></td>
                   <td><select name="yes6" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Special skill development for differently abled students</label></td>
                   <td><select name="yes7" >
			             <option value="Yes">Yes</option>
						 <option value="No">No</option> </select></td>
                 </tr>
                 <tr>
                   <td><label>Any other similar facility</label></td>
                   <td><input type="text" name="other" placeholder=""></td>
                 </tr>
                 <br>
                 <br>
                 <tr>
                   <td><input type="submit" name="submit" value="Save" class="w3-button w3-black"></td>
                   <td><input type="submit" name="report" value="Report" class="w3-button w3-black"></td>
                 </tr>
                 <?php
			}
			?>
               </table>
             </form>
	         <div id="error_message" style="width:100%; height:100%; display:none; ">
          <h4>
                            Error
        </h4>
                        Sorry there was an error sending your form. 
                  </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
        </div>
		
    </body>
</html>
