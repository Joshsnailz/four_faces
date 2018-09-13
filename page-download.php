<?php get_header(); ?>

	<div class="w3layouts-border">			
	</div>
	<!-- //main-banner-slider -->

	<!-- PAGE DETAILS GO HERE -->
			<!-- main-banner-slider -->
		<div class="w3layouts-slider_downloads col-md-12" style="background-color: aqua">
			<div class="agileits w3layouts" align="center"  style="margin-left: auto;margin-right: auto; padding: 70px 0;" id="about">
				<div class="col-md-6">
					<p>
						Below are the application form as word document<br>
						<a href="Downloads/Application Form.docx" download="Application Form">
							<button type="button" class="btn btn-danger">Application Form(word)</button>
						</a>
						<br>
						in pdf format &darr;
						<br>
						<a href="Downloads/Application Form.pdf" download="Application Form">
							<button type="button" class="btn btn-danger">Application Form(pdf)</button>
						</a>
					</p>
				</div>

				<div class="col-md-6">
					<p>
						Download the <b>Corporate</b> application form as word document below<br>
						<a href="Downloads/Corporate Application Form.docx" download="Corporate Application Form">
							<button type="button" class="btn btn-danger">Corporate Application Form(word)</button>
						</a>
						<br>
						in pdf format &darr;
						<br>
						<a href="Downloads/Corporate Application Form.pdf" download="Corporate Application Form">
							<button type="button" class="btn btn-danger">Corporate Application Form(pdf)</button>
						</a>
					</p>
				</div>

				<div class="col-md-12">
					<p>
						<br>
						Download the <b>student</b> application form as word document<br>
						<a href="Downloads/Student application form.docx" download="Student Application Form">
							<button type="button" class="btn btn-danger">Student Application Form(word)</button>
						</a>
						<br>
						in pdf format &darr;
						<br>
						<a href="Downloads/Student application form.pdf" download="Student Application Form">
							<button type="button" class="btn btn-danger">Student Application Form(pdf)</button>
						</a>
					</p>
					<br>
				</div>

			</div>
		</div>
		<!-- //main-banner-slider -->


	<?php get_sidebar(); ?>
	<!-- //popular-places -->
	<?php get_footer(); ?>

<script type="text/javascript">
	
		$(function(){
			$('#maximage').maximage({
				cycleOptions: {
					fx: 'fade',
					speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
					timeout: 0,
					prev: '#arrow_left',
					next: '#arrow_right',
					pause: 1,
					before: function(last,current){
						if(!$.browser.msie){
							// Start HTML5 video when you arrive
							if($(current).find('video').length > 0) $(current).find('video')[0].play();
						}
					},
					after: function(last,current){
						if(!$.browser.msie){
							// Pauses HTML5 video when you leave it
							if($(last).find('video').length > 0) $(last).find('video')[0].pause();
						}
					}
				},
				onFirstImageLoaded: function(){
					jQuery('#cycle-loader').hide();
					jQuery('#maximage').fadeIn('fast');
				}
			});
	
			// Helper function to Fill and Center the HTML5 Video
			jQuery('video,object').maximage('maxcover');
	
			// To show it is dynamic html text
			jQuery('.in-slide-content').delay(1200).fadeIn();
		});
	</script>	
	<!-- //banner slider-js -->
	
	<!-- login popop responsive tabs -->
		<!--script src="js/easyResponsiveTabs.js" type="text/javascript"></script-->
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});
		</script>
	<!-- //login popop responsive tabs -->
		
	<!-- here starts scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
										
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>
		
		<!-- start-smoth-scrolling -->
		<!--<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script-->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->
	<?php wp_footer(); ?>
	</body>
	<!-- //body -->

</html>
<!-- //html -->
