<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>HSAS: Successful Submit, Thanks!</title>
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
	
	//set up server
	$db_server = mysql_connect($db_hostname, $db_username, $db_password);
	if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
	mysql_select_db($db_database, $db_server)
		or die("Unable to select database: " . mysql_error());
	
	//escape commands
  	$username = mysql_real_escape_string($_POST["username"]);
  	$password = mysql_real_escape_string($_POST["password"]);
  	$category = mysql_real_escape_string($_POST["category"]);
  	
  	// photo
  	$apple_in_time = mysql_real_escape_string($_POST["apple_in_time"]);  	
  	$marie_i = mysql_real_escape_string($_POST["marie_i"]);
    $clavicle = mysql_real_escape_string($_POST["clavicle"]);
    $lucies = mysql_real_escape_string($_POST["lucies"]);
    $fireball = mysql_real_escape_string($_POST["fireball"]);
    $DSC_0114 = mysql_real_escape_string($_POST["DSC_0114"]);
    $DSC_0527 = mysql_real_escape_string($_POST["DSC_0527"]);
    $hannah = mysql_real_escape_string($_POST["hannah"]);
    $IMG_0159 = mysql_real_escape_string($_POST["IMG_0159"]);
    $IMG_0443 = mysql_real_escape_string($_POST["IMG_0443"]);
    $IMG_2235 = mysql_real_escape_string($_POST["IMG_2235"]);
    $IMG_3713 = mysql_real_escape_string($_POST["IMG_3713"]);
    $last_supper = mysql_real_escape_string($_POST["last_supper"]);
    $obsession = mysql_real_escape_string($_POST["obsession"]);
    $submission_topczewska = mysql_real_escape_string($_POST["submission_topczewska"]);
    
    // mixed
    $image_107 = mysql_real_escape_string($_POST["image_107"]);
    $Seoul_City3 = mysql_real_escape_string($_POST["Seoul_City3"]);
    $wall_art_3 = mysql_real_escape_string($_POST["wall_art_3"]);
    $black_enso = mysql_real_escape_string($_POST["black_enso"]);	
    $natures = mysql_real_escape_string($_POST["natures"]);	
    $photo = mysql_real_escape_string($_POST["photo"]);	
    $tangle_of_thorns = mysql_real_escape_string($_POST["tangle_of_thorns"]);
    
    
    // painting	
    $blue = mysql_real_escape_string($_POST["blue"]);	
    $DSCN0015 = mysql_real_escape_string($_POST["DSCN0015"]);
    $picture_001 = mysql_real_escape_string($_POST["picture_001"]);
    $DSCN0017 = mysql_real_escape_string($_POST["DSCN0017"]);
    $IMG_8776 = mysql_real_escape_string($_POST["IMG_8776"]);
    $photo_1 = mysql_real_escape_string($_POST["photo_1"]);
    $selfportrait = mysql_real_escape_string($_POST["selfportrait"]);
    $skeleton = mysql_real_escape_string($_POST["skeleton"]);
    $traffic_time = mysql_real_escape_string($_POST["traffic_time"]);
	$face = mysql_real_escape_string($_POST["face"]);
	$joy_of_waiting = mysql_real_escape_string($_POST["joy_of_waiting"]);
	$springinparis = mysql_real_escape_string($_POST["springinparis"]);
    $primavera = mysql_real_escape_string($_POST["primavera"]);
    
        
    //submits query
    $sql = 
		"INSERT INTO Ranking (username, category, apple_in_time, marie_i, clavicle, lucies, fireball, DSC_0114, DSC_0527, hannah, IMG_0159, IMG_0443, IMG_2235, IMG_3713, last_supper, obsession, submission_topczewska, image_107, Seoul_City3, wall_art_3, black_enso, natures, photo, tangle_of_thorns, blue, DSCN0015, picture_001, DSCN0017, IMG_8776, photo_1, selfportrait, skeleton, traffic_time, face, joy_of_waiting, springinparis, primavera) 
		VALUES('$username','$category','$apple_in_time','$marie_i','$clavicle', '$lucies','$fireball', '$DSC_0114', 
	'$DSC_0527', '$hannah','$IMG_0159','$IMG_0443', '$IMG_2235', '$IMG_3713', '$last_supper',
	'$obsession', '$submission_topczewska', '$image_107', '$Seoul_City3', '$wall_art_3','$black_enso', '$natures', '$photo', '$tangle_of_thorns', '$blue', '$DSCN0015', '$picture_001', '$DSCN0017', '$IMG_8776', '$photo_1', '$selfportrait', '$skeleton', '$traffic_time', '$face', '$joy_of_waiting', '$springinparis', '$primavera')";
	$result = mysql_query($sql);

    
?>

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
        
        <div class="box">
            <p>Thank you for submitting your rankings!</p>
            <div class="clear"></div>
        </div>
    
    
    <form action="judges_login.php" method="post">    
		<input type="text" name="username" value="<?php echo $username;?>" style="display: none;" />
		<input type="text" name="password" value="<?php echo $password;?>" style="display: none;" />
		<input type="submit" class="back_button" value="Back" />
	</form>        
    <p class="clear"></p>
    </div>

</div>

</body>
</html>

