<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Harvard Student Art Show</title>
	
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

<div id="container">

	<div id="logo"><img src="images/hsas_logo.png" /></div>

	<img src="images/background_image.png" id="bg" alt="">
	
	<h2>the fourth annual <span class="red_harvard">harvard</span> student art show</h2>
	
    <div id="nav">
    
        <ul id="tabs">
            <li id="home"><a href="index.html">home</a></li>
            <li><a href="about.html" id="about">about</a></li>
            <li id="testimonials"><a href="testimonials.html">testimonials</a></li>
            <li id="gallery"><a href="gallery.html" class="selected">gallery</a></li>
            <li id="contact"><a href="contact.html" id="contact">contact</a></li>
            
        </ul>
                
    </div>
    
    <div id="main_content">
    
    
    <h1>Harvard Student Art Show 2011</h1>
	    <div id="photo_gallery">
	    
	    	
	        <?php>
	            
	        
	        
	        <?>
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/submissions_thru/AO_CN12s.jpg" title="Anna Ondaatje"><img src="images/submissions_thru/AO_CN12s.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/allison_macneil_dailey.jpg" title="Allison MacNeil Dailey"><img src="images/photo_gallery/allison_macneil_dailey_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/anna_liu.jpg" title="Anna Liu"><img src="images/photo_gallery/anna_liu_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/caroline_cuse_2.jpg" title="Caroline Cuse"><img src="images/photo_gallery/caroline_cuse_2_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/caroline_cuse.jpg" title="Caroline Cuse"><img src="images/photo_gallery/caroline_cuse_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/crystal_d_trejo.JPG" title="Crystal D. Trejo"><img src="images/photo_gallery/crystal_d_trejo_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/dan_weissman.jpg" title="Dan Weissman"><img src="images/photo_gallery/dan_weissman_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/jenny_rushmore.jpg" title="Jenny Rushmore"><img src="images/photo_gallery/jenny_rushmore_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/jonathan_finn_gamino.jpg" title="Jonathan Finn-Gamino"><img src="images/photo_gallery/jonathan_finn_gamino_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/lauren_bordes.jpg" title="Lauren Bordes"><img src="images/photo_gallery/lauren_bordes_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/max_hooper_schneider.jpg" title="Max Hooper Schneider"><img src="images/photo_gallery/max_hooper_schneider_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/meryl_natow.jpg" title="Meryl Natow"><img src="images/photo_gallery/meryl_natow_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/michael_peguero.jpg" title="Michael Peguero"><img src="images/photo_gallery/michael_peguero_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/nic_brickley.jpg" title="Nic Brickley"><img src="images/photo_gallery/nic_brickley_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/rebecca_levitan.jpg" title="Rebecca Levitan"><img src="images/photo_gallery/rebecca_levitan_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/samuel_mendez.jpg" title="Samuel Mendez"><img src="images/photo_gallery/samuel_mendez_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/seongmin_lee.JPG" title="Seongmin Lee"><img src="images/photo_gallery/seongmin_lee_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/snoweria_zhang.jpg" title="Snoweria Zhang"><img src="images/photo_gallery/snoweria_zhang_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/vicky_ge.jpg" title="Vicky Ge"><img src="images/photo_gallery/vicky_ge_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/melissa_oppenheim.JPG" title="Melissa Oppenheim"><img src="images/photo_gallery/melissa_oppenheim_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/alex_palmer.JPG" title="Alex Palmer"><img src="images/photo_gallery/alex_palmer_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/alissa_costello.jpg" title="Alissa Costello"><img src="images/photo_gallery/alissa_costello_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/anna_ondaatje.jpg" title="Anna Ondaatje"><img src="images/photo_gallery/anna_ondaatje_small.jpg" alt="" class="gallery_photo" /></a>
		    
		    <a class="grouped_elements" rel="group1" class="gallery_photo" href="images/photo_gallery/david_buckley_borden.jpg" title="David Buckley Borden"><img src="images/photo_gallery/david_buckley_borden_small.jpg" alt="" class="gallery_photo" /></a>
		    
	    
	    </div>
    <p class="clear"></p>
    
    </div>
    <div class="clear"></div>

</div>

</body>
</html>
