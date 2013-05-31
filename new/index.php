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
					random: 1,
					/*containerResize: 0,
					fit: 1*/
					slideResize: 1,
				});
			}


			/*$(window).resize(function (){
				alert("TEST");
			});*/
		</script>

		<div id="slideshow"></div>

	<!-- and here -->
<?php include "footer.php" ?>
