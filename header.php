<!DOCTYPE html>
<!-- html -->
<html lang="en">
<!-- head -->
<head>   
<title>Home :: Welcome</title>
<!--favicon-->
<link rel="page icon" href="<?= get_stylesheet_directory_uri() ?>/images/logo.png">
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Four Faces : Holiday Clubs, Lodge, Hotel bookings, holiday resorts" />	
<?php wp_head(); ?>		
</head>
<!-- //head -->
	<!-- body -->
	<body>

	<!-- top-strip -->
	<div class="w3layouts-top-strip">
		<div class="container-fluid">
			<div class="w3ls-subscribe">
				<!-- <a class="btn btnprimary scroll" href="#subscribe">Subscribe</a> -->
			</div>
			<!-- Large modal -->
			<div class="w3layouts-login">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login</button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Welcome, Sign in or Sign Up</h4>
								</div>
								<div class="modal-body">
									<div class="sap_tabs">
									<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
										<ul class="resp-tabs-list">
											<li class="resp-tab-item"><span>Login</span></li>
											<li class="resp-tab-item"><span>Register</span></li> 
										</ul>	
										<div class="clearfix"> </div>	
										<div class="resp-tabs-container">
											<div class="tab-1 resp-tab-content">
												<div class="agileits-login">
													<form action="#" method="post">
														<input type="text" class="email" name="Email" placeholder="Username" required=""/>
														<input type="password" class="password" name="Password" placeholder="Password" required=""/>
														<div class="wthree-text"> 
															<ul> 
																<li>
																	<label class="anim">
																		<input type="checkbox" class="checkbox">
																		<span> Remember me ?</span> 
																	</label> 
																</li>
																<li> <a href="#">Forgot password?</a> </li>
															</ul>
															<div class="clearfix"> </div>
														</div>  
														<div class="w3ls-submit">
															<div class="submit-text">
																<input type="submit" value="LOGIN"> 
															</div>	
														</div>	
													</form>
												</div> 
											</div>
											<div class="tab-1 resp-tab-content">
												<div class="login-top sign-top">
													<div class="agileits-login">
														<form action="#" method="post">
															<input type="text" name="Username" placeholder="Username" required="">
															<input type="email" class="email" name="Email" placeholder="Email" required=""/>
															<input type="password" class="password" name="Password" placeholder="Password" required=""/>	
															<input type="password" class="password" name="Password" placeholder="Confirm Password" required=""/>	
															<label class="anim">
																<input type="checkbox" class="checkbox">
																<span> I accept the terms of use</span> 
															</label> 
															<div class="w3ls-submit">
																<div class="submit-text">
																	<input class="register" type="submit" value="REGISTER">  
																</div>	
															</div>
														</form> 
													</div>  
												</div>
											</div>
										</div>	
									</div>
									<div class="clearfix"> </div>
								</div>  			
								</div>
							</div>
						</div>
					</div>
			</div>			
			<div class="agileinfo-contact-info">
				<ul>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><a href="tel:+2634300568">+263 4 300 568</a></li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@fourfaces.co.zw">info@fourfaces.co.zw</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
	<!-- //top-strip -->
		
		<!-- navigation -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a class="active" href="<?= get_home_url() ?>">Home</a></li>
					<!-- <li><a href="services.html">Services</a></li> -->
					<li><a href="<?= get_permalink(get_page_by_path('Gallery')) ?>">Gallery</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clubs<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="<?= get_permalink(get_page_by_path('silver-lite')) ?>"">Silver-Lite</a></li>
						<li><a href="<?= get_permalink(get_page_by_path('silver')) ?>"">Silver</a></li>
						<li><a href="<?= get_permalink(get_page_by_path('gold')) ?>">Gold</a></li>
						<li><a href="<?= get_permalink(get_page_by_path('african-safari')) ?>"">African Safari Club</a></li>
						<li><a href="<?= get_permalink(get_page_by_path('corporate')) ?>"">Corporate Club</a></li>
						<li><a href="<?= get_permalink(get_page_by_path('student')) ?>"">Student Club</a></li>
						<li><a href="<?= get_permalink(get_page_by_path('same-day-travels')) ?>"">Same day travel</a></li>
					  </ul>
					</li> 
					<li><a href="<?= get_permalink(get_page_by_path('about-2')) ?>"">About</a></li>
					<li><a href="<?= get_permalink(get_page_by_path('downloads')) ?>"">Downloads</a></li>
					<!-- <li><a href="contact.html">Contact</a></li> -->
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- //navigation -->
		
		
	