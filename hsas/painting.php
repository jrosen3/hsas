<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>HSAS: Painting</title>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	
	<script type="text/javascript" src="fancybox/jquery.easing-1.3.pack.js"></script>
	
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	
	<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	
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

	<script type="text/javascript">
		$(document).ready(function() {

			/* This is basic - uses default settings */
			
			$("a.grouped_elements").fancybox({
				'titlePosition': 'inside'
			});
			
		});
	</script>
	
</head>

<body>

<?php 

	require_once 'login.php';
	include 'functions.php';

	$username = $_POST["username"];
	$password = $_POST["password"];
	
	
	if($username == "test" || $username == "amanda" || $username == "quincy" || $username == "damian"){
	
	}
	else{
		error("Not logged in.");
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
    
	    <div id="photo_gallery">
	    
	    	<h1>HSAS 2012: Painting</h1>
	    	<h3>Hi, <?php echo $username ?></h3>
	    	<h3>Click on thumbnails to see enlarged image with accurate dimensions</h3>
	    
	    	<form action="submit_ranking.php" method="post">
	    	<input type="text" name="username" value="<?php echo $username;?>" style="display: none;" />
	    	<input type="text" name="password" value="<?php echo $password;?>" style="display: none;" />
	    	<input type="text" name="category" value="painting" style="display:none;" />
	    	
	    	
			<div class="category_photo_wrapper">    		    
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/blue_14x18.jpg" title="Dimensions: 18 x 14 in."><img src="images/submissions_thru/blue_14x18_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Blue Dancers</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> This piece was based on a photograph I took backstage during a dance concert. It is part of a series that uses color to explore the effect of light on figures in costume. It also meant to display the backstage experience.<br/>
		    	<span class="bold">Process:</span> I used visible brushstrokes to express the movement of light across the figures.<br/>
		    	<span class="bold">Materials:</span> Acrylic Paint</p>
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="blue">Rank: </label>
		  		<select name="blue">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
		    	<div class="clear"></div>
		    </div>
		   		    
		   	<div class="category_photo_wrapper"> 	    
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/DSCN0015.JPG" title="Dimensions: 24 x 32 in. "><img src="images/submissions_thru/DSCN0015_small.jpg" alt="" class="category_photo"/></a>
			    <h4>Copier</h4>
			    <p class="photo_detail"><span class="bold">Concept:</span> Portrait of a face on a photocopier.<br/>
			    <span class="bold">Process:</span> Oil painting.<br/>
			    <span class="bold">Materials:</span> Oil paint on masonite board</p>
			    <span class="enlarge">Click image to see full size</span>
			    
			    <label for="DSCN0015">Rank: </label>
		  		<select name="DSCN0015">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
			    <div class="clear"></div>
		    </div>
		    
		   	<div class="category_photo_wrapper">	    
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/Picture_001.jpg" title="Dimensions: 72 x 48 in."><img src="images/submissions_thru/Picture_001_small.jpg" alt="" class="category_photo" /></a>
				<h4>Blue I</h4>
				<p class="photo_detail"><span class="bold">Concept:</span> An exploration of blue as a mystical colour.<br/>
		   		<span class="bold">Process:</span> Created over a long period of time. Important to me that my work is created through a process of accumulation and erasure. Pigment pounded into canvas, marks added and erased, readded, burnt, etc so that each stage of its creation echoes the last. I'm pretty entertaining to watch work, I think. Maybe not.<br/>
		    	<span class="bold">Materials:</span> Canvas stretched on board. Can be stretched on frames. That would change how it is defined though. Stands vertically. Oil paint, pigment, dirt, various solvents.</p>
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="picture_001">Rank: </label>
		  		<select name="picture_001">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
				<div class="clear"></div>
			</div>	
		    
		    <div class="category_photo_wrapper"> 
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/DSCN0017.JPG" title="Dimensions: 35 x 48 in. "><img src="images/submissions_thru/DSCN0017_small.jpg" alt="" class="category_photo" /></a>
			    <h4>Untitled</h4>
			    <p class="photo_detail"><span class="bold">Concept:</span> This piece is a combination of two images/findings.<br/>
			    <span class="bold">Materials:</span> oil paint on cardboard</p>
			    <span class="enlarge">Click image to see full size</span>
			    
			    <label for="DSCN0017">Rank: </label>
		  		<select name="DSCN0017">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
			    <div class="clear"></div>
		 	</div>
		 		    
		 	<div class="category_photo_wrapper"> 	    
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/IMG_8776.JPG" title="Dimensions: 24 x 18 in. "><img src="images/submissions_thru/IMG_8776_small.jpg" alt="" class="category_photo" /></a>
			    <h4>Running the Dune</h4>
			    <p class="photo_detail"><span class="bold">Concept:</span> Running down a sand dune on the Oregon Coast.<br/>
			    <span class="bold">Materials:</span> Oil on Canvas</p>
			    <span class="enlarge">Click image to see full size</span>
			    
			    <label for="IMG_8776">Rank: </label>
		  		<select name="IMG_8776">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
			    <div class="clear"></div>
		    </div>
		    
		    <div class="category_photo_wrapper"> 		    
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/photo(1).JPG" title="Dimensions: 30 x 20 in. "><img src="images/submissions_thru/photo(1)_small.jpg" alt="" class="category_photo" /></a>
			    <h4>Untitled</h4>
			    <p class="photo_detail"><span class="bold">Concept:</span> I wanted to bring found materials into this piece, so I created a collage out of old book pages and music sheets for the background. On top of the collage, the figure is painted in oil.<br/>
			    <span class="bold">Process:</span> I made a collage of torn book pages and music sheets using matte medium and then painted in oil on top of it.<br/>
			    <span class="bold">Materials:</span> Oil, canvas, book pages and music sheets.</p>
			    <span class="enlarge">Click image to see full size</span>
			    
			    <label for="photo_1">Rank: </label>
		  		<select name="photo_1">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
			    <div class="clear"></div>
		    </div>
		    
		    <div class="category_photo_wrapper"> 
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/selfportrait.jpg" title="Dimensions: 2 x 3 ft."><img src="images/submissions_thru/selfportrait_small.jpg" alt="" class="category_photo" /></a>
			    <h4>What I used to look like</h4>
			    <p class="photo_detail"><span class="bold">Concept:</span> What I think I look like without a mirror.<br/>
			    <span class="bold">Materials:</span> Oil on canvas</p>
			    <span class="enlarge">Click image to see full size</span>
			    
			    <label for="selfportrait">Rank: </label>
		  		<select name="selfportrait">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
			    <div class="clear"></div>
		    </div>
		    
		    <div class="category_photo_wrapper"> 		    
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/Skeleton.jpg" title="Dimensions: 22 x 30 in. "><img src="images/submissions_thru/Skeleton_small.jpg" alt="" class="category_photo" /></a>
			    <h4>The Doctor</h4>
			    <p class="photo_detail"><span class="bold">Concept:</span> I began this piece while taking second-year medical classes, specifically orthopedic medicine.<br/>
			    <span class="bold">Process:</span> Began with a drawing, moved to brown water-miscible oil, graphite, and water to form the sketch, then added color with oils and detailed with ink.<br/>
			    <span class="bold">Materials:</span> Canvas, pencil, ink, oil paints.</p>
			    <span class="enlarge">Click image to see full size</span>
			    
			    <label for="skeleton">Rank: </label>
		  		<select name="skeleton">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	

			    <div class="clear"></div>
		    </div>	
		    		    
		    <div class="category_photo_wrapper"> 
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/Traffic_Time.jpg" title="Dimensions: 36 x 24 in."><img src="images/submissions_thru/Traffic_Time_small.jpg" alt="" class="category_photo" /></a>
			    <h4>Traffic Time</h4>
			    <p class="photo_detail"><span class="bold">Concept:</span> Driving in traffic<br/>
			    <span class="bold">Materials:</span> Acrylic paint on unprimed canvas</p>
			    <span class="enlarge">Click image to see full size</span>
			    
			    <label for="traffic_time">Rank: </label>
		  		<select name="traffic_time">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
			    
			    <div class="clear"></div>
		    </div>	
		    		    
		    <div class="category_photo_wrapper"> 
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/Face.jpg" title="Dimensions: 16 x 24 in. "><img src="images/submissions_thru/Face_small.jpg" alt="" class="category_photo" /></a>
			    <h4>Face</h4>
			    <span class="enlarge">Click image to see full size</span>
			    
			    <label for="face">Rank: </label>
		  		<select name="face">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
			    <div class="clear"></div>
			</div>		   
		   
		    <div class="category_photo_wrapper"> 
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/joy_of_waiting.jpg" title="Dimensions: 24 x 36 in."><img src="images/submissions_thru/joy_of_waiting_small.jpg" alt="" class="category_photo" /></a>
			    <h4>Joy of Waiting</h4>
			    <span class="enlarge">Click image to see full size</span>
			    
			    <label for="joy_of_waiting">Rank: </label>
		  		<select name="joy_of_waiting">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
			    <div class="clear"></div>
		    </div>
		    
		    <div class="category_photo_wrapper"> 
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/springinparis.jpg" title="Dimensions: 30 x 40 in."><img src="images/submissions_thru/springinparis_small.jpg" alt="" class="category_photo" /></a>
			    <h4>Spring in Paris</h4>
			    <span class="enlarge">Click image to see full size</span>
			    
			    <label for="springinparis">Rank: </label>
		  		<select name="springinparis">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
			    <div class="clear"></div>
		    </div>
		    
		    <div class="category_photo_wrapper"> 
			    <a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/primavera.jpg" title="Dimensions: 25 x 38 in."><img src="images/submissions_thru/primavera_small.jpg" alt="" class="category_photo" /></a>
			   	<h4>Primavera</h4>
			   	<p class="photo_detail"><span class="bold">Concept:</span> The three girls in this painting represent the three months of Spring.  The girl on the right is March and is done in pink, white and blue tones which accentuate the transition between the seasons of Spring and Winter.  She is like the glistening buds of Spring that are just awakening in order to accept the emotions and feelings of life.  The girl in the middle is April, the month of Spring's awakening.  She is the blooming flower of Spring that exhibits the wonderful scents of this season and the happiness and joy of life.  She is the happiest of all since her life is just beginning and everything around her is cleansed of any problems, truly a new and bright commencement.  The third girl is the month of May.  She is full of love, power and passion.  She is aware of her value and knows what she wants. All three of these girls hold different skin tones- fair, yellow and brown.  These diverse skin tones emphasize that Spring touches each and every person in the world regardless of skin color, religion or creed.  There are three major horizontal color tones in the background of the painting- blue, red and green.  These color tones represent the three powers of life.  Blue is the spiritual world, Red is the mortal world and green is the natural world.  All three of these lines are painted with images that represent the awakening of each of these worlds to a life filled with passion and celebration.<p/>
			   	<span class="enlarge">Click image to see full size</span>
			   	
			   	<label for="primavera">Rank: </label>
		  		<select name="primavera">
		  			<option id="0">rank</option>
		  			<option id="1">1</option>
		  			<option id="2">2</option>
		  			<option id="3">3</option>
		  			<option id="4">4</option>
		  			<option id="5">5</option>
		  			<option id="6">6</option>
		  			<option id="7">7</option>
		  			<option id="8">8</option>
		  			<option id="9">9</option>
		  			<option id="10">10</option>
		  		</select>	
			   	<div class="clear"></div>	
		    </div>
		    
		    <input type="submit" class="back_button" value="Submit Ranking" />
		    
		    </form>
		    
	    </div>
	
	<form action="judges_login.php" method="post">    
		<input type="text" name="username" value="<?php echo $username;?>" style="display: none;" />
		<input type="text" name="password" value="<?php echo $password;?>" style="display: none;" />
		<input type="submit" class="back_button" value="Back to Categories" />
	</form>    
    <p class="clear"></p>
    
    </div>
    <div class="clear"></div>

</div>

</body>
</html>