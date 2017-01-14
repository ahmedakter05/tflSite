<link href="<?php echo base_url(); ?>assets/tfl1/js/magnific-popup/mpopup.css" rel="stylesheet"/> 
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/tfl1/css/jquery-ui.css">
<link href="<?php echo base_url(); ?>assets/tfl1/js/flexslider/flexslider.css" rel="stylesheet" />

<!-- Page-head -->
<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Product Details</h3>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li>You are here:</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li class="active">Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Page-head -->

<div class="space60"></div>

<div class="container shop-content">
	<div class="row">

		<div class="col-md-6">
			
						<div id="thumb-slider" class="flexslider">
							<ul class="slides">
								<li data-thumb="<?php echo base_url() . $singleproduct['product']['imageurl1']; ?>"><img src="<?php echo base_url() . $singleproduct['product']['imageurl1']; ?>" alt=""/></li>
								<li data-thumb="<?php echo base_url() . $singleproduct['product']['imageurl2']; ?>"><img src="<?php echo base_url() . $singleproduct['product']['imageurl2']; ?>" alt=""/></li>
								<li data-thumb="<?php echo base_url() . $singleproduct['product']['imageurl3']; ?>"><img src="<?php echo base_url() . $singleproduct['product']['imageurl3']; ?>" alt=""/></li>
								<li data-thumb="<?php echo base_url() . $singleproduct['product']['imageurl4']; ?>"><img src="<?php echo base_url() . $singleproduct['product']['imageurl4']; ?>" alt=""/></li>
							</ul>
						</div>

			
		</div>

		<div class="col-md-6">
	
			<div class="product_details">




				<div class="product_title"><?php echo $singleproduct['product']['name']; ?></div>
				<div class="product_price"><h4><?php echo anchor('products/category/'.$singleproduct['product']['categoryid'], $singleproduct['product']['categoryname'].' '); ?></h4></div>
				<div class="line-sep"></div>

				<p><?php echo $singleproduct['product']['details']; ?></p>
					

				<ul class="product-meta">
					<li><b>SKU: </b><?php echo $singleproduct['product']['code']; ?></li>
					<li><b>Tags: </b><a href="<?php echo base_url() . 'products/tag/' . $singleproduct['product']['tags']; ?>"><?php echo $singleproduct['product']['tags']; ?></a>.</li>
				</ul>

			</div>


		</div>

	</div>

	<div class="space30"></div>

	<div class="row">
		<div class="col-md-12 no-padding">
	            <div class="col-md-12 no-padding">
	                <h2 class="section-title"><span>Why Choose Us</span></h2>
	            </div>
	            <div class="col-md-12 no-padding">
	                <ul id="myTab" class="nav nav-tabs">
	                    <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
	                    <li class=""><a href="#tab2" data-toggle="tab">Resoults</a></li>
	                    <li class=""><a href="#tab3" data-toggle="tab">Reviews</a></li>
	                </ul>
	                <div id="myTabContent" class="tab-content">
	                    <div class="tab-pane fade active in clearfix media " id="tab1">
					<h5>Product Description</h5>
	                        <p>Lorem ipsum dolor slo onsec designs tueraliquet Morbi nec In Curabitur lreaoreet nislsus lorem in pellente e vidicus pannel impirus sadintas. Lorem ipsum dolor slo onsec  designs tueraliquet Morbi nec In Curabitur lreaoreet</p>
	                        <p>Lorem ipsum dolor slo onsec designs tueraliquet Morbi nec In Curabitur lreaoreet nislsus lorem in pellente e vidicus pannel impirus sadintas. Lorem ipsum dolor slo onsec  designs tueraliquet Morbi nec In Curabitur lreaoreet</p>

	                    </div>
	                    <div class="tab-pane fade clearfix media " id="tab2">
					<h5>Product Description</h5>
	                        <p>Lorem ipsum dolor slo onsec designs tueraliquet Morbi nec In Curabitur lreaoreet nislsus lorem in pellente e vidicus pannel impirus sadintas. Lorem ipsum dolor slo onsec  designs tueraliquet Morbi nec In Curabitur lreaoreet</p>
	                        <p>Lorem ipsum dolor slo onsec designs tueraliquet Morbi nec In Curabitur lreaoreet nislsus lorem in pellente e vidicus pannel impirus sadintas. Lorem ipsum dolor slo onsec  designs tueraliquet Morbi nec In Curabitur lreaoreet</p>
	                    </div>
	                    <div class="tab-pane fade clearfix media " id="tab3">
					<h5>Product Reviews</h5>
	                        <p>Lorem ipsum dolor slo onsec designs tueraliquet Morbi nec In Curabitur lreaoreet nislsus lorem in pellente e vidicus pannel impirus sadintas. Lorem ipsum dolor slo onsec  designs tueraliquet Morbi nec In Curabitur lreaoreet</p>
	                        <p>Lorem ipsum dolor slo onsec designs tueraliquet Morbi nec In Curabitur lreaoreet nislsus lorem in pellente e vidicus pannel impirus sadintas. Lorem ipsum dolor slo onsec  designs tueraliquet Morbi nec In Curabitur lreaoreet</p>
	                    </div>
	                </div>
	            </div>
	    
	    </div>
	</div>
</div>

<div class="space60"></div>



</div>
</div>
