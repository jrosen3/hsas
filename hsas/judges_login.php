<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>HSAS: Selection of pieces</title>
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
	
	//escape commands
  	$username = $_POST["username"];
  	$password = $_POST["password"];
  	    
    
    //Checks input
    if ($username == "quincy"){
    	if($password != "houghton"){
    		error("Incorrect password");
    	}
    }
    else if ($username == "amanda"){
		if($password != "weil"){
			error("Incorrect password");
		}
    }
    else if ($username == "damian"){
    	if($password != "elwes"){
    		error("Incorrect password");
    	}
    }
	else if ($username == "test"){
		if($password != "test"){
			error("Incorrect password");
		}
	}
 	else {
 		error("Incorrect username");
 	}   
 
      
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
        
        <p>Hi, <?php echo $username ?></p>

        <p>Please rank from 1 to 10 the pieces in each category.<br/>
        After doing so, select your favorite piece of the entire collection (all categories) by following the last link on this page.<br /> 
        Thank you!</p>
        
        <form action="painting.php" method="post">
        	<input type="text" name="username" value="<?php echo $username;?>" style="display: none;"/>
        	<input type="text" name="password" value="<?php echo $password;?>" style="display: none;" />
        	<input type="image" src="images/painting.jpg" onsubmit="submit-form();" class="categories" />
        </form>
        
        <form action="photo.php" method="post">
	        <input type="text" name="username" value="<?php echo $username;?>" style="display: none;"/>
	        <input type="text" name="password" value="<?php echo $password;?>" style="display: none;" />
	        <input type="image" src="images/photographer.jpg" onsubmit="submit-form();" class="categories" />
        </form>
        
        <form action="mixed_media.php" method="post">
        	<input type="text" name="username" value="<?php echo $username;?>" style="display: none;"/>
        	<input type="text" name="password" value="<?php echo $password;?>" style="display: none;" />
        	<input type="image" src="images/collage.jpg" onsubmit="submit-form();" class="categories" />
		</form>
		
		<a class="category_title">Painting</a>
		<a class="category_title">Photography</a>
		<a class="category_title">Mixed Media / Other</a>
		
		<p class="clear"></p>            
            
    </div>

</div>

</body>
</html>

