<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>HSAS: Mixed Media</title>
	
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
	    
	    	<h1>HSAS 2012: Mixed Media / Other</h1>
		    <h3>Hi, <?php echo $username ?></h3>
		    <h3>Click on thumbnails to see enlarged image with accurate dimensions</h3>
		    
		    
		    <form action="submit_ranking.php" method="post">
		    <input type="text" name="username" value="<?php echo $username;?>" style="display: none;" />
		    <input type="text" name="password" value="<?php echo $password;?>" style="display: none;" />
		    <input type="text" name="category" value="mixed" style="display:none;" />
		    
		    <div class="category_photo_wrapper">
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/107.jpg" title="Dimensions: 28 x 30 in. Drawing."><img src="images/submissions_thru/107_small.jpg" alt="" class="category_photo" /></a>
				<h4>Past Paste</h4>
				<p class="photo_detail"><span class="bold">Concept:</span> Past Paste the third piece of a series of drawings that focus on portraying small, paper-related objects interacting with toothpaste in some way. The objects each reference travel, or things colleted during a trip in some capacity. The works incorporate a combination of graphic and representational marks. Either a diptych or triptych, each work seeks to address the question of what the eye wants or hopes to see, and what it finds in reality.<br/>
		    	<span class="bold">Process:</span> Drawn from a constructed piece of the calendar fragment and toothpaste.<br/>
		    	<span class="bold">Materials:</span> Charcoal, paper</p>
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="image_107">Rank: </label>
		  		<select name="image_107">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/Seoul_City3.jpg" title="Dimensions: 20 x 12 in. Drawing."><img src="images/submissions_thru/Seoul_City3_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Seoul City</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> I explored various areas of the city, and drew different cityscapes using various mediums. The city of Seoul transforms swiftly. Unstable elements are scattered throughout in the fleeting city.<br/>
		    	<span class="bold">Process:</span> Drawing.<br/>
		    	<span class="bold">Materials:</span> Charcoal.</p>
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="Seoul_City3">Rank: </label>
		  		<select name="Seoul_City3">
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
		   		<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/wall_art_3.jpg" title="Dimensions: 18 x 24 in. Drawing."><img src="images/submissions_thru/wall_art_3_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Wall Art</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> Redefining what we put on a wall, and how we do it.<br/>
		    	<span class="bold">Process:</span> Hand drawn.<br/>
		    	<span class="bold">Materials:</span> Charcoal & gessoed paper.</p>
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="wall_art_3">Rank: </label>
		  		<select name="wall_art_3">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/BlackEnso-Dairyu-Sojo.jpg" title="Dimensions: 13 x 19 in. Print."><img src="images/submissions_thru/BlackEnso-Dairyu-Sojo_small.jpg" alt="" class="category_photo"  style="margin: 0px 5px;"/></a>
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/WhiteEnso-Torei-Enji.jpg" title="Dimensions: 23 x 19 in. Print."><img src="images/submissions_thru/WhiteEnso-Torei-Enji_small.jpg" alt="" class="category_photo" style="margin: 0px 5px;"/></a>
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/BlackEnso-Torei-Enji.jpg" title="Dimensions: 13 x 19 in. Print."><img src="images/submissions_thru/BlackEnso-Torei-Enji_small.jpg" alt="" class="category_photo" style="margin: 0px 5px;"/></a>
		    	<h4 style="width: 610px;">Black Enso (Dairyu Sojo) / Black Enso (Torei Enji) / White Enso (Torei Enji)</h4>
		    	<p class="photo_detail" style="width: 610px;"><span class="bold">Concept:</span> This piece is part of a series of works replicating the Zen circle or "enso" paintings of famous Zen masters from the 18th and 19th centuries. These enso paintings were made with a single stroke of the master's brush, revealing the wholeness of his inner character. Here, the original painting by the master Dairyu Sojo (1694-1751) is screenprinted on decorative Japanese rice paper. The minimalist, masculine gesture of the Zen monk is re-contextualized against a background of domesticity, femininity, and materialism. Recalling, too, the transition between Abstract Expressionism and Pop Art, the series is an artistic as well as religious commentary about modern culture.<br/>
		    	<span class="bold">Process:</span> Extracted image from archived image of historical artwork (left out artists inscriptions and decorative seals), exposed image onto silkscreen and applied to paper.<br/>
		    	<span class="bold">Materials:</span> Acrylic screenprinting ink on printed Japanese decorative paper (chiyogami).</p>
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="black_enso">Rank: </label>
		  		<select name="black_enso">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/Natures_Paintbrush_II-V.jpg" title="Dimensions: 6 x 12 in. Sculpture."><img src="images/submissions_thru/Natures_Paintbrush_II-V_small.jpg" alt="" class="category_photo" /></a>
		   		<h4>Nature's Paintbrush II-V</h4>
		   		<p class="photo_detail"><span class="bold">Concept:</span> As an artist and art historian, my interest in architectural ruins ignited my interest in the aesthetic relationship between art and decomposition. Nature and time continuously deconstruct form to its basic elements, erasing the past, and creating new compositions. This piece explores the role of the artist and nature in the creation of art. After artwork is completed, nature and time take the control away from the artist and create their own transformative compositions. Nature has no structured form of creating, but continuously creates art around us. The constant transformation in nature gives art movement and life. This rusted metal artwork not only explores the powerlessness of the artist, but considers the role of nature as an artist in our everyday life, the continuous changes within an artwork's life, and decomposition's ability to create compositions.<br/>
		   		<span class="bold">Process:</span> I painted the aluminum sheet with acrylic paint, using water to create different consistencies of paint on the surface. I then wiped off areas of paint to reveal the metal surface beneath. After the paint dried, I used the Sophisticated Finishes: Rust Antiquing Set to create rust on the painted metal, eroding the surface and creating a rusty, orange color. I then sprinkled water and sea-salt on the rusted areas to create further rusting and erosion, three-dimensional protrusions, as well as a yellow rust color.<br/>
		    	<span class="bold">Materials:</span> Aluminum Sheets (4), Acrylic Paint, Water, Sophisticated Furnishings: Rust Antiquing Set, and Sea-Salt.</p>
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="natures">Rank: </label>
		  		<select name="natures">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/photo.JPG" title="Dimensions: 15 x 20 in. Other."><img src="images/submissions_thru/photo_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Prague</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> In this silk screened piece, I used brightly colored textured paper to alter the imagination's perception of the image.<br/>
		   		<span class="bold">Process:</span> Photography and silk-screen.<br/>
		    	<span class="bold">Materials:</span> Acrylic ink and textured paper.</p>
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="photo">Rank: </label>
		  		<select name="photo">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/tangle_of_thorns.jpeg" title="Dimensions: 18 x 24 in. Other."><img src="images/submissions_thru/tangle_of_thorns_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Tangle of Thorns</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> Although each of the pieces have various points of inspiration and tell a different tale, all of the pieces revolve around moments in contemporary culture. They incorporate images of pop culture, but rather than turning pop culture into pop art, the pieces work to tint the lens through which we regard pop culture in order to reveal a darker, more complex side that inevitably arises when we pause long enough to question and consider the moment we are living in.<br/>
		   		<span class="bold">Process:</span> Collage, painting, manual, etc.<br/>
		    	<span class="bold">Materials:</span> Paper, staples, glove, paint, etc.</p>
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="tangle_of_thorns">Rank: </label>
		  		<select name="tangle_of_thorns">
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
    <p class="clear"></p>
    
	<form action="judges_login.php" method="post">    
		<input type="text" name="username" value="<?php echo $username;?>" style="display: none;" />
		<input type="text" name="password" value="<?php echo $password;?>" style="display: none;" />
		<input type="submit" class="back_button" value="Back to Categories" />
	</form>    
    
    <div class="clear"></div>
    </div>
    

</div>

</body>
</html>