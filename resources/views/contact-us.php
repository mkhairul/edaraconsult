<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Edara Strategic Consultancy" />
  <meta property="og:image" content="images/edara-logo-in-blue-small.png" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Montserrat:400,700|Merriweather" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />

	<!-- Media Agency Demo Specific Stylesheet -->
	<link rel="stylesheet" href="demos/media-agency/media-agency.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="one-page/css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="demos/media-agency/fonts.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Edara Strategic Consultancy Sdn. Bhd. (830767 M)</title>

</head>

<body class="" data-loader="14">

	<div class="side-cover-wrapper full-screen visible-lg visible-md">
		<div class="fslider" data-speed="3000" data-pause="5000" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
			<div class="flexslider" style="height: 100% !important;">
				<div class="slider-wrap" style="height: inherit !important;">
					<div class="slide full-screen force-full-screen" style="background: url('demos/media-agency/images/3.jpg') center right; background-size: cover; height: 100% !important;"></div>
					<div class="slide full-screen force-full-screen" style="background: url('demos/media-agency/images/4.jpg') center right; background-size: cover; height: 100% !important;"></div>
					<div class="slide full-screen force-full-screen" style="background: url('demos/media-agency/images/5.jpg') center right; background-size: cover; height: 100% !important;"></div>
					<div class="slide full-screen force-full-screen" style="background: url('demos/media-agency/images/6.jpg') center right; background-size: cover; height: 100% !important;"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="nobottomborder no-sticky">

			<div id="header-wrap">

				<div class="container-fluid clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/edara-logo-in-blue-small.png"><img src="images/edara-logo-in-blue-small.png" alt="Edara Strategic Consultancy Sdn. Bhd."></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/edara-logo-in-blue-small.png"><img src="images/edara-logo-in-blue-small.png" alt="Edara Strategic Consultancy Sdn. Bhd."></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-2">

						<ul>
              <li class="<?php echo ($page_title === 'home') ? 'current':'' ?>"><a href="<?php echo url('/'); ?>"><div>Home</div></a></li>
							<li class="<?php echo ($page_title === 'about-us') ? 'current':'' ?>"><a href="<?php echo url('about-us'); ?>"><div>About Us</div></a></li>
							<li class="<?php echo ($page_title === 'our-methods') ? 'current':'' ?>"><a href="<?php echo url('our-methods'); ?>"><div>Our Methods</div></a></li>
							<li class="<?php echo ($page_title === 'our-commitment') ? 'current':'' ?>"><a href="<?php echo url('our-commitment'); ?>"><div>Our Commitment</div></a></li>
							<li class="<?php echo ($page_title === 'who-we-are') ? 'current':'' ?>"><a href="<?php echo url('who-we-are'); ?>"><div>Who We Are</div></a></li>
							<li class="<?php echo ($page_title === 'contact-us') ? 'current':'' ?>"><a href="<?php echo url('contact-us'); ?>"><div>Contact Us</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<div class="clear"></div>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div id="section-about" class="container-fluid page-section clearfix">
				
					<div id="section-contact" class="page-section">

					<h2 class="bottommargin">Contact Us.</h2>

						<div class="row clearfix">

							<div class="col-md-8">

								<div class="contact-widget">

									<div class="contact-form-result"></div>

									<form class="nobottommargin" id="template-contactform" name="template-contactform" action="/contact" method="post">
                    
                    <?php echo csrf_field(); ?>

										<div class="form-process"></div>

										<div class="col_half">
											<input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
										</div>
										<div class="col_half col_last">
											<input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
										</div>

										<div class="clear"></div>

										<div class="col_full">
											<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control border-form-control" placeholder="Subject" />
										</div>

										<div class="col_full">
											<textarea class="required sm-form-control border-form-control" id="message" name="message" rows="7" cols="30" placeholder="Your Message"></textarea>
										</div>

										<div class="col_full">
											<button class="button button-black noleftmargin topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
										</div>

										<div class="clear"></div>

										<div class="col_full hidden">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div>

									</form>

								</div>

							</div>

							<div class="col-md-4">
                
                <h4 class="bottommargin-10"><strong>Edara Strategic Consultancy Sdn Bhd</strong></h4>

								<div style="font-size: 16px; line-height: 1.7;">
									<address style="line-height: 1.7;">
										No.&nbsp;17-2,Section 9,<br>
										Jalan 9/9C, Bandar Baru Bangi<br />
                    43650 Kajang, <br />
                    Selangor Darul Ehsan, <br />
                    Malaysia<br />
									</address>

									<div class="clear topmargin"></div>

									<abbr title="Phone Number"><strong>Phone:</strong></abbr> +603 8920 1608<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> +603 8912 3154<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@edaraconsult.com
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div id="copyrights" style="background-color:#111;">
				<div class="container-fluid">

					&copy; 2016 Edara Strategic Consultancy Sdn. Bhd. (830767 M) | All Rights Reserved | <a href="<?php echo url('/privacy-policy'); ?>">Privacy Policy</a>

				</div>
			</div>
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript">

		jQuery(window).load(function(){

			jQuery(window).resize(function() {
				SEMICOLON.portfolio.portfolioDescMargin();
			});

			var t = setTimeout(function(){ SEMICOLON.portfolio.portfolioDescMargin(); }, 200);
			
			jQuery(window).on('hashchange', function (e) {
				console.log(location.hash);
			});

			if (window.location.hash) {
				jQuery(window).trigger('hashchange')
			}

		});

	</script>

</body>
</html>