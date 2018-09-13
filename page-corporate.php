<?php get_header(); ?>
<div class="w3layouts-slider">
		<a href="index.html" id="logo">
			<!-- Add Media Screen: Had raised margin-top -->
			<img src="<?= get_stylesheet_directory_uri() ?>/images/logo.png"  style="width: 35%; margin-top: -1.8em; background: #fff; border-radius: 8px;">
		</a>
		<a href="#" id="arrow_left"><img src="<?= get_stylesheet_directory_uri() ?>/images/arrow_left.png" alt="Slide Left" /></a>
		<a href="#" id="arrow_right"><img src="<?= get_stylesheet_directory_uri() ?>/images/arrow_right.png" alt="Slide Right" /></a>
		
		<img id="cycle-loader" src="<?= get_stylesheet_directory_uri() ?>/images/ajax-loader.gif" alt="" />
		<div id="maximage">
			<div>
				<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-1.jpg" alt="" />
				<img id="gradient" src="<?= get_stylesheet_directory_uri() ?>/images/gradient.png" alt="" />
				<div class="in-slide-content" style="display:none;">
					<h2>Get a trip from our Corporate Package</h2> 
				</div>
			</div>
			<div class="video">
				<img  src="<?= get_stylesheet_directory_uri() ?>/images/pattern.jpg" alt="" />
				
				<video controls="controls" muted="muted" poster="<?= get_stylesheet_directory_uri() ?>/images/video-image.jpg">
					
					<source src="<?= get_stylesheet_directory_uri() ?>/video/video.mp4" type="video/mp4" />
					<source src="" type="video/webm" />
					<source src="" type="video/ogg" />
					Your browser does not support HTML5 videos.
				</video>
			</div>
			<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-2.jpg" alt="Vic Falls" />
			<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-3.jpg" alt="slider image" />
			<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-4.jpg" alt="slider image" />
			<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-5.jpg" alt="slider image" />
		</div>			
	</div>
<!-- main-banner-slider -->
	<div class="w3layouts-border">			
	</div>
	<!-- //main-banner-slider -->

	<!-- PAGE DETAILS GO HERE -->
		<!-- main-content -->
		<div class="wthree-main-content w3layouts-contact">
			<!-- about -->
		<div class="agileits contact">
			<div class="container">
				<!-- <h2 class="agile-inner-title">Silver-lite</h2>						 -->
				<div class="agileits w3layouts">
		<div class="col-top agileits w3layouts" id="about">
			<!---->
			<div class="tab-pane  text-style" id="tab6">
					<div class="facts">
						
						<h4>Corporate Club</h4>
						<p> 
						   <ul>
							   <li style="list-style: none;">•	<b>Annual Membership fee:</b> 	<u>$30/year</u></li>
							   <li style="list-style: none;">•	<b>Minimum monthly subscription:</b> <u>$50/month</u></li>
						   </ul> 
						   <br>
						   Holidays are a great way for team building and group connections.
						   <br>
						   This is why we have this special club for corporates to enjoy group holiday, conferences, strategic retreats and hosting.
						   <br>
						   All groups can benefit from this club including churches, youth groups, sports clubs, social clubs, professional associations, unions etc.
						   <br>
						    Team up with us and get the best for your team!</p>
							<p>
									<div class="btn-group">
											<button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#corporateModal">View Destinations</button>
											  <!-- Modal -->
											  <div class="modal fade bd-example-modal-lg" id="corporateModal" tabindex="-1" role="dialog" aria-labelledby="corporateModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
												  <div class="modal-content">
													<div class="modal-body-fluid">
														<div class="container-fluid">
														  <div class="table-responsive">
															<table class="table table-striped">
																<thead>
																	<tr>
																	  <td><h3><b>Clubs</b></h3></td>
																	</tr>
																  </thead>  
																  <tbody>
																  <tr>
																	  <td>Zim on wheels</td>
																	  <td>Team building</td>
																	  <td>Strategic retreats</td>
																	  <td>Awards and prices</td>
																  </tr>
																  <tr>
																	  <td>International travel</td>
																	  <td>Hosting</td>
																	  <td>End of year events</td>
																	  <td>Incentive scheme for employees</td>
																  </tr>
																  
																</tbody>
															</table>
														  </div>
														</div>
													</div>
													<div class="modal-footer">
													  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													  <a href="login.html"><button type="button" class="btn btn-primary">Take offer</button></a>
													</div>
												  </div>
												</div>
											  </div>
											<!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
									</div>
							</p>					 
					</div>
			  </div>
			<!---->
		</div>
		<!---->
				
			</div>
		</div>
	<!-- // about -->

	<!--//about-->
		</div>
		<!-- //main-content -->	



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
