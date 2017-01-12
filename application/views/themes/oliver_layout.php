<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Multipress - Responsive Multipurpose HTML5 Template">
	<meta name="author" content="">

	<title>Oliver - Responsive HTML5 Multipurpose theme</title>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/tfl1/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/tfl1/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/tfl1/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/tfl1/img/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/tfl1/img/apple-touch-icon-144x144.png">

	<!-- Web Fonts  -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100italic,100,300,300italic,400italic,500,700,700italic,900italic,900,500italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
	<script src="<?php echo base_url(); ?>assets/tfl1/js/libs/respond.min.js"></script>
	<![endif]-->

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>assets/tfl1/css/bootstrap.css" rel="stylesheet">

	<!-- FontAwesome icons CSS -->
	<link href="<?php echo base_url(); ?>assets/tfl1/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Theme Styles CSS-->
	<link href="<?php echo base_url(); ?>assets/tfl1/css/styles.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/tfl1/css/accordion.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/tfl1/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/tfl1/js/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/tfl1/js/rs-plugin/css/settings.css" rel="stylesheet" />

	<!--[if lt IE 9]>
	<script src="<?php echo base_url(); ?>js/libs/html5.js"></script>
	<![endif]-->

</head>
<body>
<div class="body">

<!-- Top-wrap -->
<div class="top-wrap">
	<div class="container top-wrap-inner">
		<div class="col-md-12">
			<div class="top-login">
				Welcome Guest! <a href="#">Login</a>
			</div>

			<a href="#">
				<div class="top-language">Mobile: +8801712203145</div>
			</a>

			<a href="#">
				<div class="top-cart">Email: sales@techfocusltd.com, </n> hr@techfocusltd.com</div>
			</a>
		</div>
	</div>
</div>
<!-- Top-wrap -->

<!-- Header -->
<header>
   <div class="container">
      <div class="col-md-12">
         <!-- Logo -->
         <div class="col-md-2">
            <h1 class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/tfl1/images/logo.png" alt="" width="120%"/></a></h1>
         </div>
         
        <!-- Navmenu -->
         <div class="col-md-8">
            <nav id='topnav'>
               <ul class="top-menu">
                  <li class='<?php echo (isset($activepage) ? ($activepage=='Home' ? 'active' : '') : '');?> has-sub'>
                     <a href='<?php echo base_url(); ?>'><span>Home</span></a>
                  </li>
                  <li class='<?php echo (isset($activepage) ? ($activepage=='Products' ? 'active' : '') : '');?> has-sub-full'>
                     <a href='#'><span>Products</span></a>
                     <ul class="full-sub">
                        <li class="col-md-3">
                           <ul>
                              <li class="sub-head">Categories</li>
                              <li><a href="./full-width.html">Category 1</a></li>
                              <li><a href="./right_side_navigator.html">Category 2</a></li>
                              <li><a href="./left_side_navigator.html">Category 3</a></li>
                              <li><a href="./testimonials_1">Category 4</a></li>
                              <li><a href="./testimonials_2">Category 5</a></li>
                              <li><a href="./404.html">Category 6</a></li>
                           </ul>
                        </li>
                        <li class="col-md-3">
                           <ul>
                              <li class="sub-head">Industry</li>
                              <li><a href="./pricing.html">Pricing Table </a></li>
                              <li><a href="./shop.html">Product Page</a></li>
                              <li><a href="./shop_single.html">Product Single</a></li>
                              <li><a href="./services.html">Service Page 1</a></li>
                              <li><a href="./services_1.html">Service Page 2</a></li>
                              <li><a href="./forums_1.html">Forum Page 1</a></li>
                           </ul>
                        </li>
                        <li class="col-md-3">
                           <ul>
                              <li class="sub-head">Technology</li>
                              <li><a href="./about_1.html">About Us Page 1</a></li>
                              <li><a href="./about_2.html">About Us Page 2</a></li>
                              <li><a href="./about_3.html">About Us Page 3</a></li>
                              <li><a href="./about_4.html">About Us Page 4</a></li>
                              <li><a href="./testimonials_1.html">Testimonials page 1</a></li>
                              <li><a href="./testimonials_2.html">Testimonials page 1</a></li>
                           </ul>
                        </li>
                        <li class="col-md-3">
                           <ul>
                              <div class="col-lg-12 no-padding clearfix media ">
                                 <img class="pull-left" src="<?php echo base_url(); ?>assets/tfl1/images/menug.png" alt=""/>
                                 <p>Since the beginning, we’ve focused on providing the best user experience possible. Whether we’re designing a new Internet browser or a new tweak to the look of the homepage, we take great care to ensure that they will ultimately serve you, rather than our own internal goal or bottom line.</p>
                              </div>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class='<?php echo (isset($activepage) ? ($activepage=='Services' ? 'active' : '') : '');?> has-sub'>
                     <a href='#'><span>Services</span></a>
                     <ul>
                        <li>
                           <a class="nav-sub" href='#'><span>Solution</span></a>
                        </li>
                        <li>
                           <a href='#'><span>Installation</span></a>
                        </li>
                        <li><a href='./shortcodes.html'><span>Maintenance</span></a></li>
                        <li><a href='./pricing.html'><span>Pricing Table</span></a></li>
                        <li><a href='./full-width.html'><span>Grid System</span></a></li>
                     </ul>
                  </li>
                  <li class="<?php echo (isset($activepage) ? ($activepage=='Services' ? 'active' : '') : '');?> has-sub">
                       <a href='#'><span>New Features</span></a>
                       <ul>
                         <li><a href="./shop.html">Shop - Home</a></li>
                         <li><a href="./shop_single.html">Shop Single</a></li>
                       </ul>
                  </li>
                  
                  <li class="<?php echo (isset($activepage) ? ($activepage=='Services' ? 'active' : '') : '');?> has-sub">
                     <a href='#'><span>Contact</span></a>
                     <ul>
                        <li><a href="./contact.html">Contact 1</a></li>
                        <li><a href="./contact_1.html">Contact 2</a></li>
                        <li><a href="./contact_2.html">Contact 3</a></li>
                     </ul>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="col-md-2">
            <nav id='topnav'>
               <ul class="top-menu">
                  <li>
                     <button onclick="location.href ='gshop';" type="button" class="btn btn-info">GameShop</button>
                  </li>
               </ul>
            </nav>
         </div>

	<!-- Search -->
	<div class="head-search">
		<form id="header-search">
			<input type="search" name="s" id="s" placeholder="Search">
		</form>
	</div>

      </div>
   </div>
</header>
<!-- Header -->


<?php echo $output;?>


<!-- Social wrap -->
<div class="social">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <p>Stay connected with our social network</p>
         </div>

         <div class="col-md-8">
            <ul class="social-info">
               <?php foreach ($socialshare as $print): ?>
                  <li><a href="<?php echo $print->href; ?>"><span><i class="<?php echo $print->class_ref; ?>"></i></span><?php echo $print->title; ?></a></li>
               <?php endforeach; ?>        
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- Social wrap -->
<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 no-padding">

				<!-- Footer - About -->
				<div class="col-md-3 footer-widget">
					<h6><span>Newsletter/Subscription</span></h6>
					<p>Lorem ipsum dolor slo onsec  tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel</p>
					<div class="newsletter">
						<form>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Email goes here..."/>
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">Subscribe</button>
								</span>
							</div>
						</form>
					</div>
               <div class="newsletter" align="center">
                  <form>
                     <div class="input-group">
                        
                        <span class="input-group-btn">
                           <button class="btn btn-default" type="button">Signup Now</button>
                        </span>
                     </div>
                  </form>
               </div>
				</div>

				<!-- Footer - Recent Tweets -->
				<div class="col-md-3 footer-widget">
					<h6><span>Recent Twittes</span></h6> <div id="tweets" class="tweet"></div>
				</div>

            <!-- Footer - Tags -->
            <div class="col-md-3 footer-widget">
               <h6><span>Top Links</span></h6>

               <ul class="tags-list">
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">Print</a></li>
                  <li><a href="#">Agency</a></li>
                  <li><a href="#">HTML/Css</a></li>
                  <li><a href="#">Ui</a></li>
                  <li><a href="#">Architecture</a></li>
                  <li><a href="#">Movie llustrations</a></li>
                  <li><a href="#">Photography</a></li>
               </ul>
      
            </div>

				<!-- Footer - Flickrfeed -->
				<div class="col-md-3 footer-widget">
					<h6><span>Contacts</span></h6>
					<ul id="flickr" class="thumbs"></ul>
				</div>
			</div>
		</div>		
	</div>
</footer>
<!-- Footer -->

<!-- Footer - Copyright -->
<div class="footer-bottom">
	<a class="back-top" href="#"><i class="fa fa-chevron-up"></i></a>
	<div class="container">
		<div class="row-fluid">
			<div class="col-md-6">
				<p>Copyright 2012.All Rights Reserved / Powered By <a href="#">Wordpress</a></p>
			</div>
			<div class="col-md-6">
				<ul class="top-contact">
					<li><i class="fa fa-phone"></i> 1900-239-533-16</li>
					<li><i class="fa fa-envelope"></i> contact@oliver.com</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Footer - Copyright -->
</div>

<!-- JavaScript -->
<script src="<?php echo base_url(); ?>assets/tfl1/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/rs-plugin/rs.home.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/superTabs.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/flexslider/jquery.flexslider.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/jquery.akordeon.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/jflickrfeed.min.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/tab.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/jquery.mobilemenu.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/magnific-popup/jquery.magnific-popup.js"></script> 
<script src="<?php echo base_url(); ?>assets/tfl1/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/tfl1/tfeed/jquery.tweet.js"></script>

</body>
</html>