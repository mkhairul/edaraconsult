<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

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

					<h2 class="bottommargin-none">Got a Question?</h2>
          <h3 class="bottommargin-10">Please fill in the form and we will respond promptly.</h3>
          <p>All fields marked with <span class="required">*</span> denote required information</p>

						<div class="row clearfix">

							<div class="col-md-12">

								<div class="contact-widget">

									<div class="contact-form-result"></div>

									<form class="nobottommargin" id="template-contactform" name="template-contactform" action="/question" method="post">
                    
                    <?php echo csrf_field(); ?>

										<div class="form-process"></div>

										<div class="col_half">
											<input type="text" 
                             id="template-contactform-first-name" 
                             name="firstname" 
                             value="" 
                             class="sm-form-control border-form-control required" 
                             placeholder="First Name*" />
										</div>
										<div class="col_half col_last">
											<input type="text" 
                             id="template-contactform-last-name" 
                             name="lastname" 
                             value="" 
                             class="required sm-form-control border-form-control" 
                             placeholder="Last Name*" />
										</div>

										<div class="clear"></div>
                    
                    <div class="col_full">
											<input type="text" 
                             id="template-contactform-business-name"
                             name="business-name" 
                             value="" 
                             class="required sm-form-control border-form-control" 
                             placeholder="Business Name*" />
										</div>
                    
                    <div class="col_full">
											<input type="email" 
                             id="template-contactform-email"
                             name="email" 
                             value="" 
                             class="required email sm-form-control border-form-control" 
                             placeholder="Emali Address*" />
										</div>
                    
                    <div class="col_full">
											<input type="text" 
                             id="template-contactform-towncity"
                             name="towncity" 
                             value="" 
                             class="required sm-form-control border-form-control" 
                             placeholder="Town/City*" />
										</div>
                    
                    <div class="col_full">
                      <select class="country-select" name="country">
                        <option value="">-Select a country*-</option>
                        <option value="United States">United States</option>
                        <option value="Canada">Canada</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Britishindian Ocean Territory">Britishindian Ocean Territory</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Dem Rep of Congo (Zaire)">Dem Rep of Congo (Zaire)</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="England">England</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="France, metro">France, metro</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, North">Korea, North</option>
                        <option value="Korea, South">Korea, South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao">Lao</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua new Guinea">Papua new Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent-The Grenadines">Saint Vincent-The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Scotland">Scotland</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovak Republic">Slovak Republic</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Sandwich Islands">South Sandwich Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Pierre and Miquelon">St Pierre and Miquelon</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard-Jan Mayen Islands">Svalbard-Jan Mayen Islands</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Taiwan Region">Taiwan Region</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States Minor Islands">United States Minor Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                        <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                        <option value="Wales">Wales</option>
                        <option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Yugoslavia">Yugoslavia</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                        <option value="Other">Other</option>
                      </select>
										</div>
                    
                    <div class="col_full">
											<label>No of Staff in your business.. <span class="required">*</span></label><br />
                      <input type="radio" name="no_of_employee" value="0-4"> 0-4 Staff<br />
                      <input type="radio" name="no_of_employee" value="5-59"> 5-59 Staff<br />
                      <input type="radio" name="no_of_employee" value="60+"> 60+ Staff<br />
										</div>
                    
                    <div class="col_full">
											<label>You are interested in the following topics.. <span class="required">*</span></label><br/>
                      <input type="checkbox" name="topic[]" value="Turnaround &amp; Transformation"> Turnaround &amp; Transformation<br>
                      <input type="checkbox" name="topic[]" value="Business Organisation &amp; Design"> Business Organisation &amp; Design<br>
                      <input type="checkbox" name="topic[]" value="Business Strategy"> Business Strategy<br>
                      <input type="checkbox" name="topic[]" value="Performance Measures &amp; Feedback"> Performance Measures &amp; Feedback<br>
                      <input type="checkbox" name="topic[]" value="Sales &amp; Marketing"> Sales &amp; Marketing<br>
                      <input type="checkbox" name="topic[]" value="Staff Management"> Staff Management<br>
                      <input type="checkbox" name="topic[]" value="Systems &amp; Process Improvement"> Systems &amp; Process Improvement<br>
										</div>
                    
                    <div class="col_full">
											<input type="text" 
                             id="template-contactform-ref"
                             name="ref" 
                             value="" 
                             class="required sm-form-control border-form-control" 
                             placeholder="Where did you heard about ESC from?" />
										</div>
                    
                    <div class="col_full">
											<textarea 
                             rows="10"
                             id="template-contactform-question"
                             name="question"  
                             class="required question-form sm-form-control border-form-control" 
                             placeholder="Your Question"></textarea>
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