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
		<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 		 <link rel="stylesheet" href="/resources/demos/style.css">
         <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
		 <link rel="stylesheet" href="css/jquery-ui.css">
         <script src="js/jquery-1.12.4.js"></script>
        <script src="js/jquery-ui.js"></script>
		  <script>
		  $( function() {
			$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
			
		  } );
		  $( function() {
			$( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
		  } );
</script>
<script language="javascript">
function checkInput(ob) {
  var invalidChars = /[^0-9]/gi
  if(invalidChars.test(ob.value)) {
            ob.value = ob.value.replace(invalidChars,"");
      }
}</script>
    </head>
    <body style=" background:url('images/mount.jpg') no-repeat;
	  background-size: cover;
	  height:50%">
	  <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <center>
                      <h3><strong style="color:white">7.1.10 - Inclusion and Situatedness</strong></h3></center>
             <form name="qm7.1.10" id="7.1.10" action="7.1.10_rep.php" method="post" class="montform">
			 <table class="w3-container">
	  <?php 
	  		include("connection.php");
			 if(isset($_POST["action"]) and $_POST["action"]=="edit")
             {
             $adno_no = (isset($_POST["adno"])? $_POST["adno"] : '');
                $sq = "select * from address where adno = '$adno_no'";
                 $result = mysql_query($sq);
                
                while($rec = mysql_fetch_array($result))
                    {
					?>
					<tr><td><label>adno</label></td>
					<td><input type="text" name="adno" readonly value="<?php echo $rec['adno'];?>" /></td></tr>
					<tr><td width="331"><label>Criteria index</label></td>
			 <td width="137"><input type="text" name="cr_index" placeholder="Criteria index" value="CR007" readonly></td></tr>
			 <tr><td><label>Key Indicator</label></td>
			 <td><input type="text" name="ki_index" placeholder="Key Indicator" value="KI-7.1" readonly></td></tr>
			 <tr><td><label>Quantitative Metrics Index</label></td>
			 <td><input type="text" name="qm_index" placeholder="Quantitative Metrics Index" value="QM-7.1.10" readonly></td></tr>
			 <tr><td><label>Year</label></td>
			<td><select name="year" >
			<option value="<?php echo $rec['year'];?>"><?php echo $rec['year'];?> </option>
			 <option value="2012-2013">2012-2013</option>
			 <option value="2013-2014">2013-2014</option>
			 <option value="2014-2015">2014-2015</option>
			 <option value="2015-2016">2015-2016</option>
			 <option value="2016-2017">2016-2017</option>
			 <option value="2017-2018">2017-2018</option>
			 <option value="2018-2019">2018-2019</option>
			 <option value="2019-2020">2019-2020</option>
			 <option value="2020-2021">2020-2021</option>
			 <option value="2021-2022">2021-2022</option>
			 <option value="2022-2023">2022-2023</option>
			 <option value="2012-2013">2023-2024</option>
			 <option value="2012-2013">2024-2025</option>
			 <option value="2012-2013">2025-2026</option>
			 <option value="2012-2013">2026-2027</option>
			 <option value="2012-2013">2027-2028</option>
			 <option value="2012-2013">2028-2029</option>
			 <option value="2012-2013">2029-2030</option>
			 </select></td></tr>
</td></tr>
			  <tr><td><label>Number of initiatives to address locational advantages and disadvantages</label></td>
			 <td><input type="text" name="adv" placeholder="" value="<?php echo $rec['addr'];?>" ></td></tr>
			  <tr><td><label>Number of initiatives taken to engage with and contribute to local community</label></td>
			 <td><input type="text" name="local" placeholder="" value="<?php echo $rec['local'];?>"></td></tr>
			 <tr><td><label>From</label></td>
			 <td><input type="text" name="from" placeholder="" id="datepicker" value="<?php echo $rec['frm'];?>" ></td></tr>
			 <tr><td><label>To</label></td>
			 <td><input type="text" name="to" placeholder="" id="datepicker1" value="<?php echo $rec['dto'];?>"></td></tr>
			 <tr><td><label>Name of the initiative</label></td>
			 <td><input type="text" name="name" placeholder="" value="<?php echo $rec['name'];?>"></td></tr>
			 <tr><td><label>Issues addressed</label></td>
			 <td><input type="text" name="issue" placeholder="" value="<?php echo $rec['issued'];?>"></td></tr>
			 <tr><td><label>Number of participating students</label></td>
			 <td><input type="text" name="part" placeholder="" value="<?php echo $rec['parti'];?>"></td></tr>
			 			  <br><br>
			 <tr><td>  		              <input type="submit" name="update" value="update" class="w3-button w3-black"></td></tr>
					
       <?php
        }
         }
else 
{
         ?>  
			<tr><td width="331"><label>Criteria index</label></td>
			 <td width="137"><input type="text" name="cr_index" placeholder="Criteria index" value="CR007" readonly></td></tr>
			 <tr><td><label>Key Indicator</label></td>
			 <td><input type="text" name="ki_index" placeholder="Key Indicator" value="KI-7.1" readonly></td></tr>
			 <tr><td><label>Quantitative Metrics Index</label></td>
			 <td><input type="text" name="qm_index" placeholder="quantitative metrics index" value="QM-7.1.10" readonly></td></tr>
			 <tr><td><label>Year</label></td>
			 <td><select name="year" >
			 
			 <option value="2012-2013">2012-2013</option>
			 <option value="2013-2014">2013-2014</option>
			 <option value="2014-2015">2014-2015</option>
			 <option value="2015-2016">2015-2016</option>
			 <option value="2016-2017">2016-2017</option>
			 <option value="2017-2018">2017-2018</option>
			 <option value="2018-2019">2018-2019</option>
			 <option value="2019-2020">2019-2020</option>
			 <option value="2020-2021">2020-2021</option>
			 <option value="2021-2022">2021-2022</option>
			 <option value="2022-2023">2022-2023</option>
			 <option value="2012-2013">2023-2024</option>
			 <option value="2012-2013">2024-2025</option>
			 <option value="2012-2013">2025-2026</option>
			 <option value="2012-2013">2026-2027</option>
			 <option value="2012-2013">2027-2028</option>
			 <option value="2012-2013">2028-2029</option>
			 <option value="2012-2013">2029-2030</option>
			 </select></td></tr>
			  <tr><td><label>Number of initiatives to address locational advantages and disadvantages</label></td>
			 <td><input type="text" name="adv" placeholder=""></td></tr>
			  <tr><td><label>Number of initiatives taken to engage with and contribute to local community</label></td>
			 <td><input type="text" name="local" placeholder=""></td></tr>
			 <tr><td><label>From</label></td>
			 <td><input type="text" name="from" placeholder="" id="datepicker" ></td></tr>
			 <tr><td><label>To</label></td>
			 <td><input type="text" name="to" placeholder="" id="datepicker1"></td></tr>
			  <tr><td><label>Name of the initiative</label></td>
			 <td><input type="text" name="name" placeholder=""></td></tr>
			 <tr><td><label>Issues addressed</label></td>
			 <td><input type="text" name="issue" placeholder=""></td></tr>
			  <tr><td><label>Number of participating students</label></td>
			 <td><input type="text" name="part" placeholder=""></td></tr>
			  <br><br>
			 <tr><td>
			   		              <input type="submit" name="submit" value="Save" class="w3-button w3-black"></td>
		 <td><input type="submit" name="report" value="Report" class="w3-button w3-black"></td></tr>
			<?php
			}
			?> </table>
			 </form>
	         <div id="error_message" style="width:100%; height:100%; display:none; ">
          <h4>
                            Error        </h4>
                        Sorry there was an error sending your form.                  </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
        </div>
		
    </body>
</html>
