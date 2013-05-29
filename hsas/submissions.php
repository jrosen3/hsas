<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="functions.js"></script> 
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
	<script>
		$(window).load(function() {    

			var theWindow        = $(window),
	    	$bg              = $("#bg"),
	    	aspectRatio      = $bg.width() / $bg.height();

			function resizeBg() {
	
				if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
			    	$bg.removeClass().addClass('bgheight');
				} else {
			    	$bg.removeClass().addClass('bgwidth');
				}
	
			}
	
			theWindow.resize(function() {
				resizeBg();
			}).trigger("resize");
	
		});
	
	
	</script>

	
	
	
	<title>HSAS Submissions</title>

</head> 

<!-- HTML for Form //-->
<body onload="javascript:hideTables()"> 

<div id="container">

    <div id="logo"><img src="images/hsas_logo.png" /></div>

	<img src="images/background_image.png" id="bg" alt="">
	
	<h2>the fourth annual <span class="red_harvard">harvard</span> student art show</h2>
	
    <div id="nav">
    
        <ul id="tabs">
            <li id="home"><a href="index.html">home</a></li>
            <li><a href="about.html" id="about">about</a></li>
            <li id="testimonials"><a href="testimonials.html">testimonials</a></li>
            <li id="gallery"><a href="gallery.html">gallery</a></li>
            <li id="contact"><a href="contact.html" id="contact">contact</a></li>
        </ul>
                
    </div>
    
    <div id="main_content">
    
<form action="submit.php" method="post">	

    <p align="center">We are experiencing difficulties due to the high volume of submissions coming in just before the deadline. Submissions will be open for another day, until March 19th at midnight. Our apologies.</p>
    <p align="center">IF YOUR SESSION TIMES OUT, JUST RELOAD THE PAGE</p>
	<!-- Table 0 -->
	<table id="table0" class="form_tables">
	 	<tr>
       		<th>HSAS Submissions Form:</th>
    	</tr>
    	<tr>
    		<td>Please have an image of your piece, the weight, and the dimensions available in advance. Thanks!</td>
    	</tr>
    	<tr>
			<td>
				<input type="Button" id="b0" value="Continue" onclick="NextSection('table0','table1','0');">
			</td>
		</tr>
    </table>
    </br>
	
	<!-- Table 1 -->
	<table id="table1" class="form_tables">
	 	<tr>
       		<th>Part I: Artist Information</th>
    	</tr>
	 	<tr>
       		<td>Full Name:</td>
        	<td><input name="name" id="name" type="text" /></td>
    	</tr>
    	<tr>
       		<td>Email:</td>
        	<td><input name="email" id="email" type="text" /></td>
    	</tr>
    	<tr>
       		<td>Cell Number:</td>
        	<td><input name="cell" id="cell" type="text" /></td>
    	</tr>
   		<tr>
    		<td> School: </td>
    		<td> <select name="school" id="school">
				<option value= "Please Choose">Please Choose</option>
				<option value= "Undergrad">Harvard College</option>
				<option value= "Extension">Harvard Extension School</option>
				<option value= "Government">Harvard Kennedy School</option>
				<option value= "Law">Harvard Law School</option>
				<option value= "Business">Harvard Business School</option>
				<option value= "Medical">Harvard Medical School</option>
				<option value= "Divinity">Harvard Divinity School</option>
				<option value= "Design">Harvard School of Design</option>
				<option value= "Health">Harvard School of Public Health</option>
				<option value= "Education">Harvard School of Education</option>
				<option value= "Dental">Harvard School of Dental Medicine</option>
   			</select></td>
   		</tr>
   		<tr>
   			<td> Class: </td>
   			<td> <select name="year" id="year">
				<option value= "Please Choose">Please Choose</option>
				<option value= "2010">2010</option>
				<option value= "2011">2011</option>
				<option value= "2012">2012</option>
				<option value= "2013">2013</option>
				<option value= "2014">2014</option>
				<option value= "2015">2015</option>
				<option value= "2016">2016</option>
				<option value= "2017">2017</option>
				<option value= "2018">2018</option>
				<option value= "2019">2019</option>
				<option value= "2020">2020</option>
			</select></td>
		</tr> 
		<tr>
			<td> Personal Statement: <br>
				<font size="1">
					You have <input readonly type="text" name="countdown" size="3" value="1000"> characters left.
				</font>
			</td>
			<td> 
				<textarea 
					name="personal" cols="25" rows="5" wrap="soft" id="personal"
					onKeyDown="limitText(this.form.personal,this.form.countdown,1000);" 
					onKeyUp="limitText(this.form.personal,this.form.countdown,1000);">
</textarea>
			</td>
		</tr>
		<tr>
			<td>
				<input type="Button" id="b1" value="Continue" onclick="NextSection('table1','table2','1');">
			</td>
		</tr>
	</table>
    </br>
    
    <!-- Table 2 -->
    <table id="table2" class="form_tables">
		<tr>
       		<th>Part II: Piece Information</th>
    	</tr>
    	<tr>
    		<td>Title:</td>
        	<td><input name="title" id="title" type="text" /></td>
    	</tr>
		<tr>
			<td>Dimensions of the Piece:</br>
				<font size="1">
					Please note that accurate dimensions are required </br>
					We understand for 3D media this may be difficult. </br>
					Estimate in Inches (including frame or mount)
				</font>
			</td>
			<td>
				Length/Vertical: <input name="len" id="len" type="text" size="1" maxlength="2" /><br />
				Width/Horizontal: <input name="width" id="width" type="text" size="1" maxlength="2" /><br />
				Depth: <input name="depth" id="depth" type="text" size="1" maxlength="2" /><br />
				Weight (lbs): <input name="weight" id="weight" type="text" size="1" maxlength="2" /><br />

			</td>
		</tr>
		<tr>
			<td>Concept Behind the Piece:<br>
				<font size="1">
					You have <input readonly type="text" name="countdown2" size="3" value="1000"> characters left.
				</font>
			</td>
			<td>
				<textarea 
					name="concept" id="concept" cols="25" rows="5" wrap="soft"
					onKeyDown="limitText(this.form.concept,this.form.countdown2,1000);" 
					onKeyUp="limitText(this.form.concept,this.form.countdown2,1000);">
</textarea>
			</td>
		</tr>
			<td>Artist's Statement:<br>
				<font size="1">
					You have <input readonly type="text" name="countdown3" size="3" value="1000"> characters left.
					</br> This will be displayed with the piece if selected
				</font>
			</td>
			<td>
				<textarea 
					name="statement" id="statement" cols="25" rows="5" wrap="soft"
					onKeyDown="limitText(this.form.statement,this.form.countdown3,1000);" 
					onKeyUp="limitText(this.form.statement,this.form.countdown3,1000);">
</textarea>
			</td>
		</tr>
		<tr>
			 <td> Desired Selling Price: </td>
			 <td> <select name="price" id="price">
			 	<option value= "Please Choose">Please Choose</option>
				<option value= "0">Not For Sale</option>
				<option value= "1">Less than $100</option>
				<option value= "2">Less than $200</option>
				<option value= "3">Less than $300</option>
				<option value= "4">Less than $400</option>
				<option value= "5">Less than $500</option>
				<option value= "6">Less than $600</option>
				<option value= "7">Less than $700</option>
				<option value= "8">Less than $800</option>
				<option value= "9">Less than $900</option>
				<option value= "10">Less than $1000</option>
				<option value= "11">More than $1000</option>
			</select></td>
		<tr>
		<tr>
			<td>Explanation of Pricing:<br>
				<font size="1">
					You have <input readonly type="text" name="countdown4" size="3" value="1000"> characters left.
				</font>
			</td>
			<td>
				<textarea 
					name="pricing" id="pricing" cols="25" rows="5" wrap="soft"
					onKeyDown="limitText(this.form.pricing,this.form.countdown4,1000);" 
					onKeyUp="limitText(this.form.pricing,this.form.countdown4,1000);">
</textarea>
			</td>
		</tr>
		<tr>
			<td>
				<input type="Button" id="b2" value="Continue" onclick="NextSection('table2','table3','2');">
				<input type="Button" id="back1" value="Back" onclick="LastSection('table2','table1');">
			</td>
		</tr>
	</table>
	</br>
	
	<!-- Table 3 -->
    <table id="table3" class="form_tables">
		<tr>
       		<th>Part III: Media Specifics</th>
    	</tr>
    	<tr>
			 <td> Media Category: </td>
			 <td> <select name="media_category" id="media_category">
			 	<option value= "Please Choose">Please Choose</option>
				<option value= "2DND">2D Non-Digital Media</option>
				<option value= "2DD">2D Digital Media</option>
				<option value= "3D">3D Media </option>
				<option value= "P">Photography</option>
				<option value= "MM">Mixed Media</option>
				<option value= "TBM">Time Based Media (ex. Film)</option>
			</select></td>
		</tr>
		<tr>
			 <td> Specific Media: </td>
			 <td> <select name="media_type" id="media_type" >
			 	<option value= "Please Choose">Please Choose</option>
				<option value= "drawing">Drawing</option>
				<option value= "painting">Painting</option>
				<option value= "print">Print</option>
				<option value= "sculpture">Sculpture</option>
				<option value= "furniture">Furniture</option>
				<option value= "tool">Tool</option>
				<option value= "wearable">Wearable Object</option>
				<option value= "digital">Digital Photography</option>
				<option value= "film">Film Photography</option>
				<option value= "other">Other</option>
			</select></td>
		</tr>
		<tr>
			<td>Technique & Process:<br>
				<font size="1">
					You have <input readonly type="text" name="countdown5" size="3" value="1000"> characters left.
				</font>
			</td>
			<td>
				<textarea 
					name="process" id="process"cols="25" rows="5" wrap="soft"
					onKeyDown="limitText(this.form.process,this.form.countdown5,1000);" 
					onKeyUp="limitText(this.form.process,this.form.countdown5,1000);">
</textarea>
			</td>
		</tr>
		<tr>
			<td>Materials or Programs Used:<br>
				<font size="1">
					You have <input readonly type="text" name="countdown6" size="3" value="1000"> characters left.
				</font>
			</td>
			<td>
				<textarea 
					name="materials" id="materials" cols="25" rows="5" wrap="soft"
					onKeyDown="limitText(this.form.materials,this.form.countdown6,1000);" 
					onKeyUp="limitText(this.form.materials,this.form.countdown6,1000);">
</textarea>
			</td>
		</tr>
		<tr>
			<td>
				<input type="Button" id="b3" value="Continue" onclick="NextSection('table3','table4','3');">
				<input type="Button" id="back2" value="Back" onclick="LastSection('table3','table2');">
			</td>
		</tr>
	</table>
	</br>
	
	<!-- Table 4 -->
    <table id="table4" class="form_tables">
		<tr>
       		<th>Part IV: Upload</th>
    	</tr>
    	
    	<tr>
			<td>
				<input type="file" name="file" id="file" value="Upload""> </br>
				<font size="1">
					Please only upload photos! If submitting time-based media, 
					please submit a still frame to this form and email the piece as a .mov 
					to with "Time-based media submission" as the email header
				</font>
			</td>
    	</tr>
    	<tr>
			<td>
				<input type="Button" id="b4" value="Continue" onclick="NextSection('table4','table5','4');">
				<input type="Button" id="back3" value="Back" onclick="LastSection('table4','table3');">

			</td>
		</tr>
	</table>
	</br>
	
	<!-- Table 5 -->
    <table id="table5" class="form_tables">
		<tr>
       		<th>Part V: Signature</th>
    	</tr>
    	<tr>
       		<td>Signature: </br>
       			<font size="1">
					By signing this form, I are verifying that the information above </br>
					is accurate to the best of my knowledge. 
				</font>
       		</td>
        	<td><input name="signature" id="signature" type="text" /></td>
    	</tr>
    	<tr>
			<td>
				<input type="Button" id="b5" value="Continue" onclick="NextSection('table5','table6','5');">
				<input type="Button" id="back4" value="Back" onclick="LastSection('table5','table4');">
			</td>
		</tr>
	</table>
	</br>
	
	<!-- Table 6 -->
    <table id="table6" class="form_tables">
		<tr>
       		<th>Part VI: Submission</th>
    	</tr>
    	<tr>
    		<td>
       			<input type="submit" id="submit" value="Submit" name="submit">
       			<input type="Button" id="back5" value="Back" onclick="LastSection('table6','table5');">
			</td>
    	</tr>
	</table>
	</br>
</form>
</div>
</div>
</body>

</html>

