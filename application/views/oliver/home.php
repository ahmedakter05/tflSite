<!-- Slider -->
 <div class="fullwidthbanner-container" >
	<div class="fullwidthbanner">
		<ul>
			<?php foreach ($slider as $print): ?>
				<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
					<img src="<?php echo $print->imagelink_lg; ?>" alt="slide" data-fullwidthcentering="true">
					<?php if(!empty($print->imagelink_sm_1)){?>
						<div class="tp-caption large_black sfr" data-x="450" data-y="0" data-speed="1500" data-start="600" data-easing="easeInOutBack">
							<img src="<?php echo $print->imagelink_sm_1; ?>" alt="" >
						</div>
					<?php };?>
					<div class="tp-caption large_black sfr carousel-caption-inner" data-x="30" data-y="80" data-speed="1100" data-start="1100" data-easing="easeInOutBack">
						<h3><?php echo $print->title; ?></h3>
					</div>
					<div class="tp-caption large_black sfr carousel-caption-inner" data-x="30" data-y="196" data-speed="1100" data-start="1400" data-easing="easeInOutBack">
						<p><?php echo $print->details; ?></p>
					</div>
					<?php if(!empty($print->button_text)){?>
					<div class="tp-caption lfb carousel-caption-inner" data-x="30" data-y="310" data-speed="1300" data-start="1700" data-easing="easeInOutBack">
						<a href="<?php echo $print->button_href; ?>"><button type="button" class="button-blue" ><?php echo $print->button_text; ?></button></a>
					</div>
					<?php };?>
				</li>
			<?php endforeach; ?>

		</ul>
	</div>
</div>
<!-- Slider -->
<div class="space20"></div>
<!-- Clients -->
<div class="container home-works">
	<div class="row">
      	<div class="col-lg-12">
			<h2 class="section-title"><span>Our Clients</span></h2>
      	</div>
		<div id="client-content" class="owl-carousel">
			<?php foreach ($clienticon as $print): ?>
			<div class="item client-content">
				<img src="<?php echo $print->iconlink; ?>" alt="<?php echo $print->alttext; ?>"/>
			</div>
			<?php endforeach; ?>			
		</div>
	</div>
</div>
<!-- Clients -->

<!-- Services -->
<div class="section">
	<div class="container">
		<div class="col-lg-12">
			<h2 class="section-title"><span>Why TechFocus?</span></h2>
      	</div>
		<?php foreach ($whyus as $print): ?>
			<div class="col-lg-4 col-md-4">
				<div class="services">
					<div class="shadow-right"></div>
					<span class="service-ico1"></span>
			            <h3><?php echo $print->title; ?></h3>
			            <p> <?php echo $print->details; ?></p>	
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- Services -->

<!-- Recent Projects - Carousel -->
<div class="container home-works">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="section-title"><span>Recent Products</span></h2>
		</div>

		<div id="owl-example" class="owl-carousel">
			<div class="item works-content">
				<div class="works-overlay">
			      	<img class="img-responsive" src="http://placehold.it/452x325" alt=""/>
					<div>
						<div class="zoom">
							<div class="zoom-info">
								<a class="lightbox-popup" href="http://placehold.it/452x325">View Larger</a>
		                                    <a href="./portfolio_single1.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Same Project Title <span>Web Design</span></h4>
			</div>

			<div class="item works-content">
				<div class="works-overlay">
			      	<img class="img-responsive" src="http://placehold.it/452x325" alt=""/>
					<div>
						<div class="zoom">
							<div class="zoom-info">
								<a class="lightbox-popup" href="http://placehold.it/452x325">View Larger</a>
		                                    <a href="./portfolio_single1.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Same Project Title <span>Web Design</span></h4>
			</div>

			<div class="item works-content">
				<div class="works-overlay">
			      	<img class="img-responsive" src="http://placehold.it/452x325" alt=""/>
					<div>
						<div class="zoom">
							<div class="zoom-info">
								<a class="lightbox-popup" href="http://placehold.it/452x325">View Larger</a>
		                                    <a href="./portfolio_single1.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Same Project Title <span>Web Design</span></h4>
			</div>

			<div class="item works-content">
				<div class="works-overlay">
			      	<img class="img-responsive" src="http://placehold.it/452x325" alt=""/>
					<div>
						<div class="zoom">
							<div class="zoom-info">
								<a class="lightbox-popup" href="http://placehold.it/452x325">View Larger</a>
		                                    <a href="./portfolio_single1.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Same Project Title <span>Web Design</span></h4>
			</div>

			<div class="item works-content">
				<div class="works-overlay">
	      			<img class="img-responsive" src="http://placehold.it/452x325" alt=""/>
					<div>
						<div class="zoom">
							<div class="zoom-info">
								<a class="lightbox-popup" href="http://placehold.it/452x325">View Larger</a>
		                                    <a href="./portfolio_single1.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Same Project Title <span>Web Design</span></h4>
			</div>

			<div class="item works-content">
				<div class="works-overlay">
			      	<img class="img-responsive" src="http://placehold.it/452x325" alt=""/>
					<div>
						<div class="zoom">
							<div class="zoom-info">
								<a class="lightbox-popup" href="http://placehold.it/452x325">View Larger</a>
		                                    <a href="./portfolio_single1.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Same Project Title <span>Web Design</span></h4>
			</div>

			<div class="item works-content">
				<div class="works-overlay">
			      	<img class="img-responsive" src="http://placehold.it/452x325" alt=""/>
					<div>
						<div class="zoom">
							<div class="zoom-info">
								<a class="lightbox-popup" href="http://placehold.it/452x325">View Larger</a>
		                                    <a href="./portfolio_single1.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Same Project Title <span>Web Design</span></h4>
			</div>

			<div class="item works-content">
				<div class="works-overlay">
			      	<img class="img-responsive" src="http://placehold.it/452x325" alt=""/>
					<div>
						<div class="zoom">
							<div class="zoom-info">
								<a class="lightbox-popup" href="http://placehold.it/452x325">View Larger</a>
		                                    <a href="./portfolio_single1.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Same Project Title <span>Web Design</span></h4>
			</div>

			<div class="item works-content">
				<div class="works-overlay">
			      	<img class="img-responsive" src="http://placehold.it/452x325" alt=""/>
					<div>
						<div class="zoom">
							<div class="zoom-info">
								<a class="lightbox-popup" href="http://placehold.it/452x325">View Larger</a>
		                                    <a href="./portfolio_single1.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Same Project Title <span>Web Design</span></h4>
			</div>

			<div class="item works-content">
				<div class="works-overlay">
			      	<img class="img-responsive" src="http://placehold.it/452x325" alt=""/>
					<div>
						<div class="zoom">
							<div class="zoom-info">
								<a class="lightbox-popup" href="http://placehold.it/452x325">View Larger</a>
		                                    <a href="./portfolio_single1.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Same Project Title <span>Web Design</span></h4>
			</div>
		</div>
	</div>
</div>
<!-- Recent Projects - Carousel -->
<div class="space40"></div>
<!-- Hot Games -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="section-title"><span>Hot Games &amp; Accessories</span></h2>
		</div>
		<div class="col-md-12">
			<div class="col-md-12 no-padding">
				<div class="row">
					<div class="col-md-2">
						<div class="product-content">
							<img class="img-responsive" src="http://placehold.it/870x1016" alt=""/>
							<div class="product-info">
								<div class="product-info-inner1">
									<ul class="ratings">
										<li><div class="on"></div></li>
										<li><div class="on"></div></li>
										<li><div class="off"></div></li>
									</ul>
									<span class="p-price">$500</span>
								</div>
		
								<div class="product-info-inner2">
									<div class="p-title">Coubter Strike : GO<span><a href="#">More</a></span></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-2">
						<div class="product-content">
							<img class="img-responsive" src="http://placehold.it/870x1016" alt=""/>
							<div class="product-info">
								<div class="product-info-inner1">
									<ul class="ratings">
										<li><div class="on"></div></li>
										<li><div class="on"></div></li>
										<li><div class="off"></div></li>
									</ul>
									<span class="p-price">$500</span>
								</div>
		
								<div class="product-info-inner2">
									<div class="p-title">Coubter Strike : GO<span><a href="#">More</a></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="product-content">
							<img class="img-responsive" src="http://placehold.it/870x1016" alt=""/>
							<div class="product-info">
								<div class="product-info-inner1">
									<ul class="ratings">
										<li><div class="on"></div></li>
										<li><div class="on"></div></li>
										<li><div class="off"></div></li>
									</ul>
									<span class="p-price">$500</span>
								</div>
		
								<div class="product-info-inner2">
									<div class="p-title">Coubter Strike : GO<span><a href="#">More</a></span></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-2">
						<div class="product-content">
							<img class="img-responsive" src="http://placehold.it/870x1016" alt=""/>
							<div class="product-info">
								<div class="product-info-inner1">
									<ul class="ratings">
										<li><div class="on"></div></li>
										<li><div class="on"></div></li>
										<li><div class="off"></div></li>
									</ul>
									<span class="p-price">$500</span>
								</div>
		
								<div class="product-info-inner2">
									<div class="p-title">Coubter Strike : GO<span><a href="#">More</a></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="product-content">
							<img class="img-responsive" src="http://placehold.it/870x1016" alt=""/>
							<div class="product-info">
								<div class="product-info-inner1">
									<ul class="ratings">
										<li><div class="on"></div></li>
										<li><div class="on"></div></li>
										<li><div class="off"></div></li>
									</ul>
									<span class="p-price">$500</span>
								</div>
		
								<div class="product-info-inner2">
									<div class="p-title">Coubter Strike : GO<span><a href="#">More</a></span></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-2">
						<div class="product-content">
							<img class="img-responsive" src="http://placehold.it/870x1016" alt=""/>
							<div class="product-info">
								<div class="product-info-inner1">
									<ul class="ratings">
										<li><div class="on"></div></li>
										<li><div class="on"></div></li>
										<li><div class="off"></div></li>
									</ul>
									<span class="p-price">$500</span>
								</div>
		
								<div class="product-info-inner2">
									<div class="p-title">Coubter Strike : GO<span><a href="#">More</a></span></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
	</div>
</div>


<!-- Hot Games -->

<?php //var_dump("whoweare")  ?>

<div class="section" style="padding-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="col-lg-12 no-padding">
					<h2 class="section-title"><span>What we do</span></h2>
				</div>

				<div class="akordeon">
					
					<?php foreach ($whatwedo as $print): ?>
						<div class="akordeon-item">
							<div class="akordeon-item-head first">
								<div class="akordeon-item-head-container">
									<div class="akordeon-heading"><?php echo $print->title; ?></div>
								</div>
							</div>
							<div class="akordeon-item-body">
								<div class="akordeon-item-content">
									<p><?php echo $print->description; ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="col-lg-6 about-home">
		      	<div class="col-lg-12 no-padding">
			            <h2 class="section-title"><span>Who we are</span></h2>
				</div>
				<?php foreach ($whoweare as $print): ?>
					<div class="col-lg-12 no-padding clearfix media ">
						<img class="pull-left" src="<?php echo $print->imagelink; ?>" alt=""/>
						<p><?php echo $print->details; ?></p>
					</div>

					<div class="white-panel">
						<p><?php echo $print->specialtext; ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
</div>


