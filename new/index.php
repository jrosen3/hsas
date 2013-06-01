<?php include "header.php" ?>
	<!-- put the page between here -->
		<script>
			$(document).ready(function() {
				//$(".fade").hide();
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
					delay: 1500,
				});
			}

			/*setTimeout(function(){ 
				$("#logo").fadeOut(1000);
				}
				, 1500);*/

			/*$.idleTimer(1500);

			$(document).bind("idle.idleTimer", function(){
				// function you want to fire when the user goes idle
				$(".fade").fadeOut();
				//$('body').css('cursor', 'none');
			});

			$(document).bind("active.idleTimer", function(){
				// function you want to fire when the user becomes active again
				$(".fade").show()
				$(".fade").fadeIn();
				//$('body').css('cursor', 'default');
			});*/

			
/*
			$(window).resize(function(){
				$('#logo').css({
					position:'absolute',
					left: ($(window).width() - $('#logo').outerWidth())/2,
					top: ($(window).height() - $('#logo').outerHeight())/2
				});
			});*/
		</script>

		<div id="slideshow"></div>
		<!--<img id="logo" src="img/misc/logo.png" alt="hsas logo"/>-->

	<!-- and here -->
<?php include "footer.php" ?>
