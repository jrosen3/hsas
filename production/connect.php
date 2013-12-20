<?php include('top.php') ?>
	<div id="connect">
		<!-- Stuff -->
		<div id="push-down"></div>
		<p> You can email us at <a class="link" href="mailto:harvardstudentartshow@gmail.com">harvardstudentartshow@gmail.com</a> or you can sign up for our email list below</p>
		<div id="email-list">
			<form id="email-list">
				<input type="email" name="email">
				<input type="submit" name"submit">
			</form>
			<script>
				$(function() {
					$('#email-list').submit(function() {
						$.ajax({
							type: 'POST',
							url: 'https://zapier.com/hooks/catch/n/myg56/',
							data: {'email': $(this).email.value}
        				});
        				return false;
					}); 
				});
			</script>
		</div>
	</div>
<?php include('bottom.php') ?>