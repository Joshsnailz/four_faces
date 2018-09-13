<?php get_header(); ?>
<!-- main-banner-slider -->
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
					<h2>Get a trip for 5 in Victoria Falls</h2> 
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
	<article>
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
		<?php the_excerpt(); ?>
		</article>
        <p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"class="button">Read More</a></p>
		
	<?php endwhile; ?>
<?php else: ?>
	<h2>Can't Find Post</h2>
	<p>Sorry, we were unable to find the page you requested.</p>
<?php endif; ?>

	<!-- popular-places -->
	<div class="agileits-popular-places">
			<div class="container">
				<div class="w3layouts-title">
					<h3>Popular Trips</h3>
					<!-- <p>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </p> -->
				</div>
				<div class="grid">
					<figure class="effect-marley">
						<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-2.jpg" alt="image"/>
						<figcaption>
							<h3>Family <span> Trip</span></h3>
							<p>Family package
								<br>
								...click for more...
							</p>
								<!-- Button trigger modal -->
							<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#familyCenter">
								View more
							</a>
							<!-- Button trigger modal -->
							<!-- Modal -->
							<div class="modal fade" id="familyCenter" tabindex="-1" role="dialog" aria-labelledby="familyCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
									<h5 class="modal-title" id="familyLongTitle">Family</h5>
									</div>
									<div class="modal-body" style="color: black">
										<h4 class="text-lowercase text-center">We understand that holidays are important for families to bond and reenergize away from their daily routines. Our Clubs include fun-filled relaxing activities that cater for the dynamic needs of families. There is something exciting for every member of the family to look forward to.  Through our online platform, you can easily save up for your family and we will do all the planning for you. </h4>
									</div>
									<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
									<!--button type="button" class="btn btn-primary" style="background-color: goldenrod">Save changes</button-->
									</div>
								</div>
								</div>
							</div>
						</figcaption>			
						
					</figure>
					<figure class="effect-marley">
						<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-4.jpg" alt="image"/>
						<figcaption>
							<h3>Friends <span> Trip</span></h3>
							<p>Friends package
								<br>
								...click for more...
							</p>
							<!-- Button trigger modal -->
							<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#friendsCenter">
									View more
							</a>
								<!-- Button trigger modal -->
								<!-- Modal -->
							<div class="modal fade" id="friendsCenter" tabindex="-1" role="dialog" aria-labelledby="friendsCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="friendsLongTitle">Friends</h5>
										</div>
										<div class="modal-body" style="color: black">
											<h4 class="text-lowercase text-center">Holidays are always more exciting with your buddies by your side, but planning for it is not always easy. This is where our team takes over from you. We take the time to understand your needs and together we come up with saving plans suitable to your needs, your Holiday Club and desired destination. 
													Get your friends together and sign up today for that exciting trip.</h4>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
										<!--button type="button" class="btn btn-primary" style="background-color: goldenrod">Save changes</button-->
										</div>
									</div>
									</div>
							</div>
						</figcaption>			
					</figure>
					<figure class="effect-marley">
						<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-5.jpg" alt="image"/>
						<figcaption>
							<h3>Church<span> Trip</span></h3>
							<p>Church package
								<br>
								...click for more...
							</p>
							<!-- Button trigger modal -->
							<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#churchCenter">
									View more
							</a>
								<!-- Button trigger modal -->
								<!-- Modal -->
							<div class="modal fade" id="churchCenter" tabindex="-1" role="dialog" aria-labelledby="churchCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="churchLongTitle">Church</h5>
										</div>
										<div class="modal-body" style="color: black">
											<h4 class="text-lowercase text-center">Every once in a while, church groups need to get away for a special holiday to bring them closer together. Be it a peaceful retreat, a congress or whatever you need, Four Faces Holiday Clubs have something ideal for you. We can also make a specific plan for you to make payment of monthly premiums more manageable and you will not need to plan a thing.</h4>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
										<!--button type="button" class="btn btn-primary" style="background-color: goldenrod">Save changes</button-->
										</div>
									</div>
									</div>
							</div>
						</figcaption>			
					</figure>
					<figure class="effect-marley">
						<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-4.jpg" alt="image"/>
						<figcaption>
							<h3>Team Building <span> Trip</span></h3>
							<p>Team Building
								<br>
								...click for more...
							</p>
							<!-- Button trigger modal -->
							<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#team_buildingCenter">
									View more
							</a>
								<!-- Button trigger modal -->
								<!-- Modal -->
							<div class="modal fade" id="team_buildingCenter" tabindex="-1" role="dialog" aria-labelledby="team_buildingCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="team_buildingLongTitle">Team Building</h5>
										</div>
										<div class="modal-body" style="color: black">
											<h4 class="text-lowercase text-center">Strong teams are built in extraordinary places! All you need to do is bring your team and we will build the perfect holiday for you! Our holiday destinations come with activities designed to strengthen teamwork and build better relationships. Sign up today and let us create something suitable for your team. </h4>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
										<!--button type="button" class="btn btn-primary" style="background-color: goldenrod">Save changes</button-->
										</div>
									</div>
									</div>
							</div>
						</figcaption>			
					</figure>
					<figure class="effect-marley">
						<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-3.jpg" alt="image"/>
						<figcaption>
							<h3>University <span> Trip</span></h3>
							<p>...click for more...</p>
							<!-- Button trigger modal -->
							<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#universityCenter">
									View more
							</a>
								<!-- Button trigger modal -->
								<!-- Modal -->
							<div class="modal fade" id="universityCenter" tabindex="-1" role="dialog" aria-labelledby="universityCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="universityLongTitle">University</h5>
										</div>
										<div class="modal-body" style="color: black">
											<h4 class="text-lowercase text-center">Like a Watson Wanders once said, “Travelling is the antidote to ignorance”. Our travel destinations offer a rich source of knowledge of Zimbabwe’s culture and heritage making it perfect for university students. Whether it is an institutional visit or a group of university students planning independently, Four Faces Holiday Clubs offer an easy way to learn, enjoy, plan and save up!</h4>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
										<!--button type="button" class="btn btn-primary" style="background-color: goldenrod">Save changes</button-->
										</div>
									</div>
									</div>
							</div>
						</figcaption>			
					</figure>
					<figure class="effect-marley">
						<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-1.jpg" alt="image"/>
						<figcaption>
							<h3>School <span> Trip</span></h3>
							<p>...click for more...</p>
							<!-- Button trigger modal -->
							<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#schoolCenter">
									View more
							</a>
								<!-- Button trigger modal -->
								<!-- Modal -->
							<div class="modal fade" id="schoolCenter" tabindex="-1" role="dialog" aria-labelledby="schoolCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="schoolLongTitle">School</h5>
										</div>
										<div class="modal-body" style="color: black">
											<h4 class="text-lowercase text-center">With Four Faces Holiday Clubs, schools no longer need to struggle with planning excursions for their students. We cater for from as far as preschool trips to high school short holidays with monitored activities to ensure the best for your students.</h4>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
										<!--button type="button" class="btn btn-primary" style="background-color: goldenrod">Save changes</button-->
										</div>
									</div>
									</div>
							</div>
						</figcaption>			
					</figure>
					<figure class="effect-marley">
						<img src="<?= get_stylesheet_directory_uri() ?>/images/slider-4.jpg" alt="image"/>
						<figcaption>
							<h3>Honeymooners<span> Trip</span></h3>
							<p>...click for more...</p>
							<!-- Button trigger modal -->
							<a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#HoneymoonersCenter">
									View more
							</a>
								<!-- Button trigger modal -->
								<!-- Modal -->
							<div class="modal fade" id="HoneymoonersCenter" tabindex="-1" role="dialog" aria-labelledby="HoneymoonersCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="HoneymoonersLongTitle">Honeymooners</h5>
										</div>
										<div class="modal-body" style="color: black">
											<h4 class="text-lowercase text-center">With Four Faces Holiday Clubs, schools no longer need to struggle with planning excursions for their students. We cater for from as far as preschool trips to high school short holidays with monitored activities to ensure the best for your students.</h4>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
										<!--button type="button" class="btn btn-primary" style="background-color: goldenrod">Save changes</button-->
										</div>
									</div>
									</div>
							</div>
						</figcaption>			
					</figure>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
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
