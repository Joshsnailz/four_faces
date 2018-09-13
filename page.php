<?php get_header(); ?>
<!-- main-banner-slider -->
	<div class="w3layouts-border">			
	</div>
	<!-- //main-banner-slider -->
		
	<!--about-->
	<div id="about" class="about">
		<div class="container">
			<div class="title">
				<h3>Welcome </h3>
				<p>Live life. See the world </p>
			</div>
		</div>
	</div> 
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<!-- <article>
	<h2><a href="<?php //the_permalink() ?>" rel="bookmark" title="<?php //the_title_attribute(); ?>"><?php //the_title(); ?></a></h2> -->
				
		<?php the_content(); ?>
		<!-- </article>
        <p><a href="<?php //the_permalink() ?>" rel="bookmark" title="<?php //the_title_attribute(); ?>"class="button">Read More</a></p>
		 -->
	<?php endwhile; ?>
<?php else: ?>
	<h2>Can't Find Post</h2>
	<p>Sorry, we were unable to find the page you requested.</p>
<?php endif; ?>

	<?php get_sidebar(); ?>
	<!-- //popular-places -->
	<?php get_footer(); ?>

	<!-- footer goes here -->

	<!--script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><-- Required-js >
	<script src="js/bootstrap.min.js"></script><-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
	<!-- banner slider-js >
	<script src='js/jquery.js'></script><-- Required-js>
	<script src="js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script-->		
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
