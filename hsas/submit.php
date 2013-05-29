<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>HSAS: Successful Submit</title>
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
</head>

<body>
<?php 
require_once 'login.php';
include 'functions.php';
	
	ob_start(); // At the beginning of the page
	set_time_limit(0); // At the beginning of the page
	
	//set up server
	$db_server = mysql_connect($db_hostname, $db_username, $db_password);
	if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
	mysql_select_db($db_database, $db_server)
		or die("Unable to select database: " . mysql_error());
	
	//escape commands
  	$name = mysql_real_escape_string($_POST["name"]);
  	$email = mysql_real_escape_string($_POST["email"]);
  	$cell = mysql_real_escape_string($_POST["cell"]);  	
  	$school = mysql_real_escape_string($_POST["school"]);
    $year = mysql_real_escape_string($_POST["year"]);
    $personal = mysql_real_escape_string($_POST["personal"]);
    $title = mysql_real_escape_string($_POST["title"]);
    $width = mysql_real_escape_string($_POST["width"]);
    $depth = mysql_real_escape_string($_POST["depth"]);
    $len = mysql_real_escape_string($_POST["len"]);
    $weight = mysql_real_escape_string($_POST["weight"]);
    $concept = mysql_real_escape_string($_POST["concept"]);
    $statement = mysql_real_escape_string($_POST["statement"]);
    $price = mysql_real_escape_string($_POST["price"]);
    $pricing = mysql_real_escape_string($_POST["pricing"]);
    $media_category = mysql_real_escape_string($_POST["media_category"]);
    $media_type = mysql_real_escape_string($_POST["media_type"]);
    $process = mysql_real_escape_string($_POST["process"]);
    $materials = mysql_real_escape_string($_POST["materials"]);
    $file = mysql_real_escape_string($_POST["file"]);
    $signature = mysql_real_escape_string($_POST["signature"]);	
    
    //Checks input
    
	if(($_POST["name"] == NULL) || ($_POST["school"] == NULL) || 
		($_POST["email"] == NULL) || ($_POST["cell"] == NULL) || 
        ($_POST["year"] == NULL)|| ($_POST["personal"] == NULL)){
		error("Missing Information from Part I");}    
    
	if(($_POST["title"] == NULL) || ($_POST["len"] == NULL) || 
     	($_POST["width"] == NULL) || ($_POST["depth"] == NULL) || ($_POST["weight"] == NULL) ||
     	($_POST["concept"] == NULL) || ($_POST["statement"] == NULL) || 
        ($_POST["price"] == NULL)|| ($_POST["pricing"] == NULL)){
		error("Missing Information from Part II");}    
    
    if(($_POST["media_category"] == NULL) || ($_POST["media_type"] == NULL) || 
       ($_POST["process"] == NULL)|| ($_POST["materials"] == NULL)){
		error("Missing Information from Part III");}    
    
   //Code to validate uploaded file goes here...
   //
   //Size limitation
   //File types
   //http://www.w3schools.com/php/php_file_upload.asp
   //
    
    if(($_POST["signature"] == NULL)){
		error("Missing Information from Part V");}    
    
    //submits query
    $sql = 
		"INSERT INTO Submissions (name, email, cell, school, year, personal,
	title,width,len,depth,weight, concept,statement,price,pricing,media_category,
	media_type,process,materials,file,signature) 
		VALUES('$name','$email','$cell','$school','$year', '$personal','$title', '$width', 
	'$len', '$depth','$weight','$concept', '$statement', '$price', '$pricing',
	'$media_category', '$media_type', '$process', '$materials', '$file','$signature')";
	$result = mysql_query($sql);

	ob_flush(); // At the end of the page
    
?>

    <div id="container">

    <div id="logo"><img src="images/hsas_logo.png" /></div>

	<img src="images/background_image.png" id="bg" alt="">
	
	<h2>the fourth annual <span class="red_harvard">harvard</span> student art show</h2>
	
    <div id="nav">
    
        <ul id="tabs">
            <li id="home"><a href="index.html" class="selected">home</a></li>
            <li><a href="about.html" id="about">about</a></li>
            <li id="testimonials"><a href="testimonials.html">testimonials</a></li>
            <li id="gallery"><a href="gallery.html">gallery</a></li>
            <li><a href="contact.html" id="contact">contact</a></li>
            <li id="submissions"><a href="/" id="submissions"><img src="images/submit_button.png" id="submissions" /></a></li>
        </ul>
                
    </div>

    <div id="main_content">
    
        <div class="box">
            <p>Thank you for submitting to the Harvard Student Art Show!</p>
            <p>(please close this window to ensure successful submission)</p>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>

</div>

</body>
</html>

