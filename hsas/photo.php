<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>HSAS: Photography</title>
	
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
	    
	    	<h1>HSAS 2012: Photography</h1>
	    	<h3>Hi, <?php echo $username ?></h3>
	    	<h3>Click on thumbnails to see enlarged image with accurate dimensions</h3>
	    
		    <form action="submit_ranking.php" method="post">
		    <input type="text" name="username" value="<?php echo $username;?>" style="display: none;" />
		    <input type="text" name="password" value="<?php echo $password;?>" style="display: none;" />
		    <input type="text" name="category" value="photo" style="display:none;" />
		    
		    <div class="category_photo_wrapper">		    
		   		<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/Apple_in_Time.jpg" title="Dimensions: 32x16. Photo."><img src="images/submissions_thru/Apple_in_Time_small.jpg" alt="" class="category_photo" /></a>
		  		<h4>Apple in Time</h4>
		  		<p class="photo_detail"><span class="bold">Concept:</span> A study of time and process.<br />
		  		<span class="bold">Medium:</span> Digital</p>
		  		
		  		<span class="enlarge">Click image to see full size</span>
		  		<label for="apple_in_Time">Rank: </label>
		  		<select name="apple_in_time">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/Marie_I.JPG" title="Dimensions: 36x24. Film."><img src="images/submissions_thru/Marie_I_small.jpg" alt="" class="category_photo" /></a>
		 		<h4>Marie I (Sur la Plage)</h4>
		 		<p class="photo_detail"><span class="bold">Concept:</span> Her colors, the saltwater, the light of a summer afternoon in Nice.<br/>
		    	<span class="bold">Process:</span> I shoot on an old Canon my mother gave me. Film, no digital alterations.<br/>
		    	<span class="bold">Medium:</span> Film</p>
		    	<span class="enlarge">Click image to see full size</span>
		 		
		 		<label for="marie_i">Rank: </label>
		  		<select name="marie_i">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/Clavicle_and_Scapula.jpg" title="Dimensions: 48x20. Film."><img src="images/submissions_thru/Clavicle_and_Scapula_small.jpg" alt="" class="category_photo" /></a>
		   		<h4>Clavicle/Scapula</h4>
		   		<p class="photo_detail"><span class="bold">Concept:</span> I consider these portraits psychological studies. One by one, I sat with my subjects in a cabin in the woods of Northern Michigan. They all wore the same shirt. I asked each subject to tell me about the worst thing that happened to her, a question that solicited laughter and then contemplation. Even sitting silently, nothing could be kept secret. Even a hand or a foot or a collarbone, can expose so much of someone's inner life, and the projection of my own emotions onto my subject.<br/>
		   		<span class="bold">Process:</span> Two silver gelatin prints.<br/>
		    	<span class="bold">Materials:</span> Hand printed from 4x6 negatives.</p>
		    	<span class="enlarge">Click image to see full size</span>
		   		
		   		<label for="clavicle">Rank: </label>
		  		<select name="clavicle">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/LuciesSpine.jpg" title="Dimensions: 11x14. Film."><img src="images/submissions_thru/LuciesSpine_small.jpg" alt="" class="category_photo" /></a>
				<h4>Vertebrae</h4>
				<p class="photo_detail"><span class="bold">Concept:</span> I consider these portraits psychological studies. One by one, I sat with my subjects in a cabin in the woods of Northern Michigan. They all wore the same shirt. I asked each subject to tell me about the worst thing that happened to her, a question that solicited laughter and then contemplation. Even sitting silently, nothing could be kept secret. Even a hand or a foot or a collarbone, can expose so much of someone's inner life, and the projection of my own emotions onto my subject.<br/>
		   		<span class="bold">Process:</span> Silver Gelatin Print.<br/>
		    	<span class="bold">Materials:</span> Hand made silver gelatin print from 35mm negative.</p>
		    	<span class="enlarge">Click image to see full size</span>
				
				<label for="lucies">Rank: </label>
		  		<select name="lucies">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/Fireball.jpg" title="Photo."><img src="images/submissions_thru/Fireball_small.jpg" alt="" class="category_photo"/></a>
		    	<h4>Fireball</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> Art form in nature.<br/>	
		    	<span class="bold">Medium:</span> Digital</p>	
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="fireball">Rank: </label>
		  		<select name="fireball">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/DSC_0114.JPG" title="Dimensions: 10x8. Photo."><img src="images/submissions_thru//DSC_0114_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Chair and Bike</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> This is a photograph of a portion of sidewalk in Marrakesh, Morocco. I imagine that the bike has a greater chance of being retrieved than the chair.<br />
		    	<span class="bold">Medium:</span> Digital</p>	
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="DSC_0114">Rank: </label>
		  		<select name="DSC_0114">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/DSC_0527.JPG" title="Dimensions: 11x17. Photo."><img src="images/submissions_thru/DSC_0527_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Window</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> The derelict and forlorn window screams for attention.<br/>
				<span class="bold">Medium:</span> Digital</p>	
				<span class="enlarge">Click image to see full size</span>
				
				<label for="DSC_0527">Rank: </label>
		  		<select name="DSC_0527">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/hannah.jpg" title="Dimensions: 18x14. Photo."><img src="images/submissions_thru/hannah_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Hannah</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> This piece shows Hannah working at her bar with her grandchild by her side.<br/>
		    	<span class="bold">Medium:</span> Digital</p>	
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="hannah">Rank: </label>
		  		<select name="hannah">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/IMG_0159-Version_2.jpg" title="Dimensions: 8x12. Photo."><img src="images/submissions_thru/IMG_0159-Version_2_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Barn Door</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> A barn door I often pass on my dirt road.<br/>
		    	<span class="bold">Medium:</span> Digital</p>
		    	<span class="enlarge">Click image to see full size</span>	
		    	
		    	<label for="IMG_0159">Rank: </label>
		  		<select name="IMG_0159">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/IMG_0443.JPG" title="Dimensions: 8x12. Photo."><img src="images/submissions_thru/IMG_0443_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Puddle Wonderful</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> A still puddle after a day of rain reflecting the entrance to the Barker Center.<br/>
		    	<span class="bold">Medium:</span> Digital</p>	
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="IMG_0443">Rank: </label>
		  		<select name="IMG_0443">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/IMG_2235.JPG" title="Dimensions: 24x16. Photo."><img src="images/submissions_thru/IMG_2235_small.jpg" alt="" class="category_photo"/></a>
		    	<h4>Peeking Out</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> As I was walking to pick up my dinner from the home of a family in the camp one afternoon, I saw this young girl peeking at me through the handrails of her home's steps. Her two brothers were just below, working on the engine of a car, and she content to stand, leaning through the bars, and watch the passerby. When I took out my camera and took the photo, she didn\'t flinch; instead, she turned her head to the side and continued watching her brothers work.<br/>
		    	<span class="bold">Medium:</span> Digital</p>
		    	<span class="enlarge">Click image to see full size</span>	
		    	
		    	<label for="IMG_2235">Rank: </label>
		  		<select name="IMG_2235">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/IMG_3713.JPG" title="Dimensions: 18x14. Photo."><img src="images/submissions_thru/IMG_3713_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>By the Road</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> One of the few trees along the side of the highway in South Oregon; something living, dynamic becomes a stationary point amidst moving traffic.<br/>
				<span class="bold">Medium:</span> Digital</p>	
				<span class="enlarge">Click image to see full size</span>
				
				<label for="IMG_3713">Rank: </label>
		  		<select name="IMG_3713">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/last_supper.jpg" title="Dimensions: 20x12. Photo."><img src="images/submissions_thru/last_supper_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Last Supper</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> Depicting and completing the incomplete desire of human beings who, even in their final moments before death still crave food”An interview was conducted with approximately 50 Seoulites to see what food they would like to eat just before they died, upon which was based an installation of an actual banquet. In the moment when one has to wrap up his present life and make a transition to another world after death, choosing his last dish serves as a mediating agency that recalls his life and revives his memories. This work presumes the role of an individual’s psychological medium which allows a momentary opportunity to reflect on his memories and the essence of his life in the traumatic state of life’s success and desires.<br/>
		    	<span class="bold">Medium:</span> Digital</p>
		    	<span class="enlarge">Click image to see full size</span>	
		    	
		    	<label for="last_supper">Rank: </label>
		  		<select name="last_supper">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/obsession.jpg" title="Dimensions: 20x12. Photo."><img src="images/submissions_thru/obsession_small.jpg" alt="" class="category_photo" /></a>
		    	<h4>Obsession</h4>
		    	<p class="photo_detail"><span class="bold">Concept:</span> One can never be free from memories as long as one is equipped with the mechanism of remembering. The act of remembering, even when one is not in a state of collecting sensorial data, is an extremely important mechanism for the human reason and emotions. Trivial everyday objects and adhesives formed a jewel-like object to be kept in a museum. This work suggests the modern man whose excessive memories of everyday behaviors from others in the fierce contemporary life remain a source of anxiety.<br/>
		    	<span class="bold">Medium:</span> Digital</p>
		    	<span class="enlarge">Click image to see full size</span>
		    	
		    	<label for="obsession">Rank: </label>
		  		<select name="obsession">
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
		    	<a class="grouped_elements" rel="group1" class="category_photo" href="images/submissions_thru/submission_topczewska.jpeg" title="Dimensions: 14x10. Photo."><img src="images/submissions_thru/submission_topczewska_small.jpg" alt="" class="category_photo" /></a>
		   		<h4>Progression</h4>
		   		<p class="photo_detail"><span class="bold">Concept:</span> This piece is inspired by modernist photography from the 20th century and the works of artists like Margaret Bourke-White.<br/>
		   		<span class="bold">Medium:</span> Digital</p>
		   		<span class="enlarge">Click image to see full size</span>	
		   		
		   		<label for="submission_topczewska">Rank: </label>
		  		<select name="submission_topczewska">
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