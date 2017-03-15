<!-- wrapper --> 
	<div id="wrapper">	
		<div id="full-carousel" class="ken-burns carousel slide full-carousel carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<?php $c = '0'; ?> 
				<?php foreach ($slider as $value): ?>
				<li data-target="#full-carousel" data-slide-to="<?php echo $c++; ?>" class="active"></li>
				<?php endforeach; ?>
			</ol>
			<div class="carousel-inner">
				<?php $c = '0'; ?> 
				<?php foreach ($slider as $value): ?>
				<div class="item<?php if ($c == '0'){ echo ' active inactiveUntilOnLoad'; $c++;}?>">
					<img src="<?php echo base_url() . 'assets/uploads/files/' . $value['imagebg']; ?>" alt="<?php echo $value['name'];?>">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 bounceInDown"><?php echo $value['title'];?></h1>
							<p data-animation="animated animate7 fadeInUp"><?php echo $value['details'];?></p>
							<?php if(!empty($value['button_href']) && !empty($value['button_text'])){ ?>
								<a href="<?php echo $value['button_href'];?>" data-toggle="modal" class="btn btn-primary btn-lg btn-rounded" data-animation="animated animate10 fadeIn"><?php echo $value['button_text'];?></a>
							<?php }?>
						</div>		
					</div>
				</div>
				<?php endforeach; ?>			
				<a class="left carousel-control" href="<?php echo base_url(); ?>assets/gameforest/#full-carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				</a>
				<a class="right carousel-control" href="<?php echo base_url(); ?>assets/gameforest/#full-carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</a>
			</div>
		</div>
		
		<section class="bg-white no-padding hidden-xs border-bottom-1 border-grey-300" style="height: 54px">
			<div class="tab-select text-center sticky">
				<div class="container">
					<ul class="nav nav-tabs">
						<?php foreach ($gameshop_tags_menu as $value): ?>
						<li><a href="<?php echo base_url() . 'games/query/' . $value['tagsname']; ?>"><?php echo $value['tagstitle'];?></a></li>
						<?php endforeach; ?>	
						<!--li class="active"><a href="#"><i class="fa fa-star"></i> Puzzle</a></li>
						<li><a href="#"><i class="fa fa-pencil"></i> Strategic</a></li>
						<li><a href="#"><i class="fa fa-image"></i> XBOX</a></li>
						<li><a href="#"><i class="fa fa-video-camera"></i> PS4</a></li>
						<li><a href="#"><i class="fa fa-quote-left"></i> PC</a></li-->
					</ul>
				</div>
			</div>
		</section>

		<section class="bg-grey-50 border-bottom-1 border-grey-200 relative">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="title outline">
							<h4><i class="fa fa-heart"></i> Latest Games</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu leo lobortis, aliquam dui.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card card-hover">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/blog/md/1.jpg" alt="">
								<div class="category"><span class="label label-warning">Price: 250tk</span></div>
								<div class="meta"><a href="<?php echo base_url(); ?>buy/productid/"><i class="fa fa-shopping-bag"></i> <span>Buy Now</span></a></div>
							</div>
							<div class="caption">
								<h3 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html">Assassin's Creed Syndicate</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras felis mauris, accumsan.</p>
							</div>
						</div>
					</div>
							
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card card-hover">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/blog/md/2.jpg" alt="">
								<div class="category"><span class="label label-success">Xbox One</span></div>
								<div class="meta"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html"><i class="fa fa-heart-o"></i> <span>8</span></a></div>
							</div>
							<div class="caption">
								<h3 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html">Guardians of the Galaxy 2</a></h3>
								<ul>
									<li>March 15, 2016</li>
								</ul>
								<p>Donec maximus sodales tellus a molestie. In eu orci vitae ligula iaculis sollicitudin.</p>
							</div>
						</div>
					</div>
							
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card card-hover">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/blog/md/3.jpg" alt="">
								<div class="category"><span class="label label-primary">PS4</span></div>
								<div class="meta"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html"><i class="fa fa-heart-o"></i> <span>12</span></a></div>
							</div>
							<div class="caption">
								<h3 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html">The Witcher 3: Wild Hunt</a></h3>
								<ul>
									<li>Febr 21, 2016</li>
								</ul>
								<p>Proin at efficitur purus. Suspendisse eu erat ante. Ut lectus arcu, mollis id eleifend et.</p>
							</div>
						</div>
					</div>	
					
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card card-hover">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/blog/md/4.jpg" alt="">
								<div class="category"><span class="label label-danger">Steam</span></div>
								<div class="meta"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html"><i class="fa fa-heart-o"></i> <span>10</span></a></div>
							</div>
							<div class="caption">
								<h3 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html">Grand Theft Auto 5</a></h3>
								<ul>
									<li>Apr 21, 2016</li>
								</ul>
								<p>Suspendisse potenti. Ut pretium, erat a cursus bibendum, nisi lectus egestas.</p>
							</div>
						</div>
					</div>
							
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card card-hover">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/blog/md/5.jpg" alt="">
								<div class="category"><span class="label label-primary">PS4</span></div>
								<div class="meta"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html"><i class="fa fa-heart-o"></i> <span>4</span></a></div>
							</div>
							<div class="caption">
								<h3 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html">Deadpool The Game</a></h3>
								<ul>
									<li>Unknown Release Date</li>
								</ul>
								<p>Nullam eu tellus feugiat, lobortis ante a, pulvinar magna.</p>
							</div>
						</div>
					</div>
							
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card card-hover">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/blog/md/6.jpg" alt="">
								<div class="category"><span class="label label-success">Xbox One</span></div>
								<div class="meta"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html"><i class="fa fa-heart-o"></i> <span>16</span></a></div>
							</div>
							<div class="caption">
								<h3 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/games-single.html">Grand Theft Auto One</a></h3>
								<ul>
									<li>May 30, 2016</li>
								</ul>
								<p> Pellentesque id justo molestie, sodales leo nec, molestie nulla.</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="text-center"><a href="<?php echo base_url(); ?>assets/gameforest/games.html" class="btn btn-primary btn-lg btn-shadow btn-rounded btn-icon-right margin-top-10 margin-bottom-20">Show More <i class="fa fa-angle-right"></i></a></div>
			</div>
		</section>
				
		<section>	
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="title outline">
							<h4><i class="fa fa-star"></i> Consoles & Accessories</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu leo lobortis, aliquam dui.</p>
						</div>
					</div>
				</div>
				<div class="row slider">
					<div class="owl-carousel">
						<div class="card card-list">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/review/1.jpg" alt="">
								<span class="label label-success">7.2</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/reviews-single.html">Uncharted 4</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/review/2.jpg" alt="">
								<span class="label label-warning">5.4</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/reviews-single.html">Hitman: Absolution</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/review/3.jpg" alt="">
								<span class="label label-danger">2.1</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/reviews-single.html">Last of Us 2</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/review/4.jpg" alt="">
								<span class="label label-success">6.9</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/reviews-single.html">Bioshock: Infinite</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/review/5.jpg" alt="">
								<span class="label label-success">7.2</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/reviews-single.html">Grand Theft Auto 5</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/review/6.jpg" alt="">
								<span class="label label-warning">5.4</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/reviews-single.html">DayZ</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						
						<div class="card card-list">
							<div class="card-img">
								<img src="<?php echo base_url(); ?>assets/gameforest/img/review/7.jpg" alt="">
								<span class="label label-danger">2.1</span>
							</div>
							<div class="caption">
								<h4 class="card-title"><a href="<?php echo base_url(); ?>assets/gameforest/reviews-single.html">Liberty City</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
					<a href="<?php echo base_url(); ?>assets/gameforest/#" class="prev"><i class="fa fa-angle-left"></i></a>
					<a href="<?php echo base_url(); ?>assets/gameforest/#" class="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</section>
			
		<div class="background-image margin-top-40" style="background-image: url(<?php echo base_url(); ?>assets/gameforest/img/youtube/maxresdefault.jpg);">
			<span class="background-overlay"></span>
			<div class="container">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IsDX_LiJT7E?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
			
		<section class="bg-primary promo">
			<div class="container">
				<h2>Draw your gaming world with us</h2>
				<a href="http://themeforest.net/item/gameforest-responsive-gaming-html-theme/5007730" target="_blank" class="btn btn-white btn-outline">Purchase Now<i class="fa fa-shopping-cart margin-left-10"></i></a>
			</div>
		</section>
	</div>
	<!-- /#wrapper -->