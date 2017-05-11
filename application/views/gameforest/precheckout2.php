<!-- wrapper -->
	<div id="wrapper">	
		<section class="bg-primary">
			<div class="container">
				<h3 class="color-white font-weight-300">Checkout</h3>
			</div>
		</section>
		<section class="border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="<?php echo base_url()?>games/all">Game Shop</a></li>
							<li><a href="#">Checkout</a></li>
						</ol>	
					</div>
				</div>
			</div>
		</section>

		<section class="profile-nav height-50 border-bottom-1 border-grey-300  hidden-xs">
			<div class="tab-select sticky">
				<div class="container">
					<ul class="nav nav-tabs" role="tablist">
						<li><a href="<?php echo base_url(); ?>games/register">Register</a></li>
						<li><a href="<?php echo base_url(); ?>games/caguest">Continue as a Guest</a></li>
					</ul>
				</div>
			</div>
		</section>
		
		<section class="bg-grey-50 padding-top-60 padding-top-sm-30">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 hidden-xs">
						<div class="widget">
							<div class="panel panel-default">
								<div class="panel-heading">Cart</div>
								<div class="panel-body no-padding">
									<ul class="panel-list-bordered">
										<?php $c = '1';?>
										<?php foreach ($gameshop_menu_cart as $value1): ?>
											<li><a href="<?php echo base_url() . 'games/view/' . $value1['url']; ?>"><?php echo $c . '.&nbsp;' . substr($value1['name'], 0, 25); ?> ...&nbsp;&nbsp;&nbsp;<?php echo $value1['quantity'] . 'x'; ?></a></li>
										<?php $c++; if($c >= '6'){break;} // add +1 for desire value?> 
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>

						<?php $this->view('gameforest/menu_helpline'); ?>
						
					</div>
					
					<div class="col-md-9 col-sm-8">
						
					<div class="panel panel-default">
							<div class="panel-body">

								<div class="headline">
									<h4 class="no-padding-top">Login <small>Already register, please login ...</small></h4>
									
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="panel-body" style="margin-left: 25px;">						
										<?php echo form_open("games/precheck");?>

	                                    <div class="row-form">
	                                        <div class="span12"><?php echo lang('login_identity_label', 'identity');?> &nbsp; &nbsp;<?php echo form_input($identity);?></div>
	                                    </div>
	                                    <br>
	                                    <div class="row-form">
	                                        <div class="span12"><?php echo lang('login_password_label', 'password');?> &nbsp; &nbsp;<?php echo form_input($password);?></div>
	                                    </div>
	                                    <br>
	                                    <div class="row-form">
	                                        <div class="span12"><?php echo lang('login_remember_label', 'remember');?> &nbsp;&nbsp;&nbsp;<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"', 'display="none"');?></div>
	                                    </div>	
	                                   
	                                    <div class="row-form">
	                                        <div class="span12">
	                                            <div class="toolbar bottom tar" style="float: right; margin-right: 60px;">
	                                                <div class="btn-group">
	                                                <?php echo form_submit('submit', '      ' . lang('login_submit_btn') . '      ', 'class="btn btn-info btn-outline" style="float: right;"');?>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
		                                
	                                    <?php echo form_close();?>
							</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-4" style="padding-left: 20px;">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		
		
	</div>
	<!-- /#wrapper -->