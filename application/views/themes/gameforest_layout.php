<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gameforest.yakuzi.eu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Mar 2017 03:59:05 GMT -->
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Purchase original games for PC, XBOX, PS4 & other consoles from us. Your one stop destination for all kind of original games, consoles & accessories.">
	<meta name="author" content="TechFocus Ltd.">
	<meta name="robots" content="index,follow">
	
	<title>GameShop - A concern of TechFocus Ltd.</title>
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/gameforest/img/favicon.ico">
	
	<!-- CORE CSS -->
	<link href="<?php echo base_url(); ?>assets/gameforest/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/gameforest/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'> 
    
	<!-- PLUGINS -->
	<link href="<?php echo base_url(); ?>assets/gameforest/plugins/animate/animate.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/gameforest/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

	<!-- THEME CSS -->
	<link href="<?php echo base_url(); ?>assets/gameforest/css/theme.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/gameforest/css/custom.css" rel="stylesheet">
</head>

<body class="fixed-header">
	<header>
		<div class="container">
			<span class="bar hide"></span>
			<a href="<?php echo base_url(); ?>games/" class="logo"><img src="<?php echo base_url(); ?>assets/gameforest/img/logo.png" alt=""></a>
			<nav>
				<div class="nav-control">
					<ul>
						<li>
							<a href="<?php echo base_url(); ?>" class="dropdown-toggle">TechFocus</a>
						</li>
						<li class="dropdown mega-dropdown">
							<a href="<?php echo base_url(); ?>games">Games</a>
							<ul class="dropdown-menu mega-dropdown-menu category">
								<li class="col-md-3">
									<a href="<?php echo base_url(); ?>assets/gameforest/games-single.html">
										<img src="<?php echo base_url(); ?>assets/gameforest/img/game/menu-1.jpg" alt="">
										<div class="caption">
											<span class="label label-warning">Actions</span>
											<h3>Assassin's Creed Syndicate</h3>
											<p>Lorem ipsum dolor sit amet, adipise elit.</p>
										</div>
									</a>
								</li>
								<li class="col-md-3">
									<a href="<?php echo base_url(); ?>assets/gameforest/games-single.html">
										<img src="<?php echo base_url(); ?>assets/gameforest/img/game/menu-2.jpg" alt="">
										<div class="caption">
											<span class="label label-primary">Puzzles</span>
											<h3>Last of Us Remastered</h3>
											<p>Lorem ipsum dolor sit amet, adipise elit.</p>
										</div>
									</a>
								</li>
								<li class="col-md-3">
									<a href="<?php echo base_url(); ?>assets/gameforest/games-single.html">
										<img src="<?php echo base_url(); ?>assets/gameforest/img/game/menu-3.jpg" alt="">
										<div class="caption">
											<span class="label label-success">Strategic</span>
											<h3>Max Payne 3</h3>
											<p>Lorem ipsum dolor sit amet, adipise elit.</p>
										</div>
									</a>
								</li>
								<li class="col-md-3">
									<a href="<?php echo base_url(); ?>assets/gameforest/games-single.html">
										<img src="<?php echo base_url(); ?>assets/gameforest/img/game/menu-4.jpg" alt="">
										<div class="caption">
											<span class="label label-danger">Accessories</span>
											<h3>Hitman Absolution</h3>
											<p>Lorem ipsum dolor sit amet, adipise elit.</p>
										</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="<?php echo base_url(); ?>games/all" class="dropdown-toggle">Products</a>
							<ul class="dropdown-menu default">
								<?php foreach ($gameshop_products_menu as $value):?>
								<li class="dropdown-submenu">
									<a href="<?php echo base_url() . 'games/category/' . $value['curl'];?>"><?php echo $value['cname']?></a>
									<?php if (!empty($value['sub_categories'])){?>
										<ul class="dropdown-menu">
											<?php foreach ($value['sub_categories'] as $value2):?>
											<li><a href="<?php echo base_url() . 'games/category/' . $value2['curl'];?>"><?php echo $value2['cname']?></a></li>
											<?php endforeach; ?>		
										</ul>
										<?php } ?>
								</li>
								<?php endforeach; ?>								
							</ul>
						</li>
						
						<!--li><a href="<?php echo base_url(); ?>assets/gameforest/gallery.html">Gallery</a></li>
						<li><a href="<?php echo base_url(); ?>assets/gameforest/contact.html">Cart (0)</a></li-->
					</ul>
				</div>
			</nav>
			<div class="nav-right">
				<?php if(!empty($userdata['uid'])){?>
				<div class="nav-profile dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>assets/gameforest/img/user/avatar.jpg" alt=""> <span><?php echo $userdata['first_name'] . ' ' . $userdata['last_name'];?></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url(); ?>games/buylist"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="<?php echo base_url(); ?>games/buylist"><i class="fa fa-gamepad"></i> Games</a></li>
						<li><a href="<?php echo base_url(); ?>games/buylist"><i class="fa fa-gear"></i> Settings</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url(); ?>admin/cp/signout"><i class="fa fa-power-off"></i> Sign Out</a></li>
					</ul>
				</div>
				<?php } else { ?>
				<div class="nav-profile">
					<a href="<?php echo base_url(); ?>admin/cp/signin"> Sign In </a>
				</div>
				<?php } ?>
				<div class="nav-dropdown dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Cart &nbsp;&nbsp;<span class="label label-danger">1</span></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header"><i class="fa fa-bell"></i> You added 1 things right now</li>
						<li><a href="#">Alien Isolation</a></li>
						<li><a href="#">Witcher 3 <span class="label label-success">XBOX</span></a></li>
						<li><a href="#">Last of Us</a></li>
						<li><a href="#">Uncharted 4 <span class="label label-primary">PS4</span></a></li>
						<li><a href="#">GTA 5 <span class="label label-warning">PC</span></a></li>
						<li class="dropdown-footer"><a href="<?php echo base_url(); ?>games/cart">Checkout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<!-- /header -->
	


	
	<?php echo $output;?>
	
	
	<!-- footer -->
	<footer>
		
		
		<div class="footer-bottom">
			<div class="container">	
				<ul class="list-inline">
					<li><a href="<?php echo base_url(); ?>assets/gameforest/#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="<?php echo base_url(); ?>assets/gameforest/#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="<?php echo base_url(); ?>assets/gameforest/#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on Google"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="<?php echo base_url(); ?>assets/gameforest/#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on Steam"><i class="fa fa-steam"></i></a></li>
				</ul>
				&copy; 2017 Techfocus. All rights reserved.
			</div>
		</div>
	</footer>	
	<!-- /.footer -->
	
	<div id="signin" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title"><i class="fa fa-user"></i> Sign In to Gameforest</h3>
				</div>
				<div class="modal-body">
					<a class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Connect with Facebook</a>
					<div class="separator"><span>or</span></div>								
					<form>
						<div class="form-group input-icon-left">
							<i class="fa fa-user"></i>
							<input type="text" class="form-control" name="username" placeholder="Username">
						</div>
						<div class="form-group input-icon-left">
							<i class="fa fa-lock"></i>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<button type="button" class="btn btn-primary btn-block">Sign In</button>
									
						<div class="form-actions">
							<div class="checkbox">
								<input type="checkbox" id="checkbox"> 
								<label for="checkbox">Remember me</label>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer text-left">
					Don't have Gameforest account? <a href="<?php echo base_url(); ?>assets/gameforest/register.html">Sign Up Now</a>
				</div>
			</div>
		</div>
	</div><!-- /.modal --> 
	
	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/gameforest/plugins/jquery/jquery-3.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/gameforest/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/gameforest/js/core.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/gameforest/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/jscustom.js'></script>
	<script>
	(function($) {
	"use strict";
		var owl = $(".owl-carousel");
			 
		owl.owlCarousel({
			items : 4, //4 items above 1000px browser width
			itemsDesktop : [1000,3], //3 items between 1000px and 0
			itemsTablet: [600,1], //1 items between 600 and 0
			itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
		});
			 
		$(".next").click(function(){
			owl.trigger('owl.next');
			return false;
		})
		$(".prev").click(function(){
			owl.trigger('owl.prev');
			return false;
		})
	})(jQuery);
	</script>
</body>

<!-- Mirrored from gameforest.yakuzi.eu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Mar 2017 03:59:05 GMT -->
</html>