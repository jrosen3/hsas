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
						// if verical
						// if horizontal
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


			/*$(window).resize(function (){
				alert("TEST");
			});*/
		</script>
		<div id="box">
		<div id="slideshow"></div>
		<p id="caption"></p>
		</div>

	<!-- and here -->
<?php include "footer.php" ?>
