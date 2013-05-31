<?php include "header.php" ?>
	<!-- put the page between here -->
		<script>
			$(document).ready(function() {
				$.ajax({
					type: 'POST',
					url: 'controllers/index_controller.php',
					success: function(data) {
						document.getElementById('slideshow').innerHTML = data;
						start_slideshow();
	    			}
				});
			})

			function start_slideshow(){
				$('#slideshow').cycle({ 
					fx: 'fade',
					speed: 1000, 
					timeout: 3000,
					random: true,
					containerResize: false,
					slideResize: false,
					fit: true,
					after: function(){
						$('#caption').html(this.alt);
					}
					/*before: function(){

					}*/
				});
			}

			$.idleTimer(2000);

			$(document).bind("idle.idleTimer", function(){
				// function you want to fire when the user goes idle
				$(".fade").fadeOut();
				//$('body').css('cursor', 'none');
			});

			$(document).bind("active.idleTimer", function(){
				// function you want to fire when the user becomes active again
				$(".fade").fadeIn();
				//$('body').css('cursor', 'default');
			});

			/*$(window).resize(function(){
				$('#slideshow').css({
					position:'absolute',
					//left: ($(window).width() - $('.className').outerWidth())/2,
					top: ($(window).height() - $('#slideshow').outerHeight())/2
				});
			});*/
		</script>

		<div id="slideshow"></div>
		<!--<p id="caption"></p>-->

	<!-- and here -->
<?php include "footer.php" ?>
