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
					random: false,
					containerResize: false,
					slideResize: false,
					fit: true,
					//delay: 2000
				});
			}
			
			$.idleTimer(3000);

			$(document).bind("idle.idleTimer", function(){
				// function you want to fire when the user goes idle
				//window.scrollTo(0, 0);
				$(".fade").fadeOut();
				$("body").css("background-color", "black");
				//$('body').css('cursor', 'none');
			});

			$(document).bind("active.idleTimer", function(){
				// function you want to fire when the user becomes active again
				$(".fade").fadeIn();
				$("body").css("background-color", "white");
				//$('body').css('cursor', 'default');
			});

			/*****
			$(window).load(function(){
 				
				})
			
			setTimeout(function(){ 
					//funtion here
				}
			);
			*****/
		</script>

		<div id="slideshow"></div>
		<div class="bottom_box fade"></div>
		<div class="bottom_box fade" id="marg"></div>
		<div class="bottom_box fade"></div>

	<!-- and here -->
<?php include "footer.php" ?>
