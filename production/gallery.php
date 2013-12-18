<?php include('top.php') ?>
	<div id="gallery">
		<!-- Stuff -->
		<div id="push-down"></div>
		<div id="all-img">
			<div class="gal-thumb gal-img" onClick="showGal('y-2011');">
				<img src="img/Jared_Rosen.jpg"/>
				<span class="gal-text">2011</span>
			</div>
			<div class="gal-thumb gal-img" onClick="showGal('y-2012');">
				<img src="img/Kevin_Rosen.jpg"/>
				<span class="gal-text">2012</span>
			</div>
			<div class="gal-thumb gal-img" onClick="showGal('y-2013');">
				<img src="img/Jared_Rosen.jpg"/>
				<span class="gal-text">2013</span>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" charset="utf-8">
		function hideGal(){
			$("#y-2011").hide();
			$("#y-2012").hide();
			$("#y-2013").hide();
		};

		function loadGal(){
			$.ajax({
			type: 'POST',
			url: 'controller/gallery_controller.php',
			success: function(data) {
				$("#gallery").append(data);
				hideGal();
				startPP();
    		}
			});
		};

		$(document).ready(function(){
			loadGal();
			hideGal();
			startPP();
		});

		function showGal(year){
			hideGal();
			$("#"+year).show();
			$("#Test").show();
		};

		$(document).keyup(function(e) {
  			if (e.keyCode == 27) { // esc
  				hideGal();
  			}   
		});	

		function startPP(){
			$("a[rel^='prettyPhoto']").prettyPhoto({
				animation_speed: 'fast', /* fast/slow/normal */
				slideshow: false, /* false OR interval time in ms */
				autoplay_slideshow: false, /* true/false */
				opacity: 0.80, /* Value between 0 and 1 */
				show_title: false, /* true/false */
				allow_resize: true, /* Resize the photos bigger than viewport. true/false */
				default_width: 400,
				default_height: 300,
				counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
				theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
				horizontal_padding: 20, /* The padding on each side of the picture */
				hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
				wmode: 'opaque', /* Set the flash wmode attribute */
				autoplay: false, /* Automatically start videos: True/False */
				modal: false, /* If set to true, only the close button will close the window */
				deeplinking: false, /* Allow prettyPhoto to update the url to enable deeplinking. */
				overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
				keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
				changepicturecallback: function(){}, /* Called everytime an item is shown/changed */
				callback: function(){}, /* Called when prettyPhoto is closed */
				ie6_fallback: true,
				social_tools: false,
			});
		}	
	</script>
	<script type="text/javascript" charset="utf-8">
		$(".gal-img").imgLiquid({
			fill : true,
			verticalAlign : 'center',
			horizontalAlign : 'center'
		});
	</script>
<?php include('bottom.php') ?>