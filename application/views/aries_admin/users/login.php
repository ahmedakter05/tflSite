<div class="content">
                
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-ok"></span>
                    </div>
                    <h1><?php echo lang('login_heading');?> <small><?php echo lang('login_subheading');?></small></h1>
                </div>
                
                <div class="row-fluid">
					
					<div class="span3"></div>

                    <div class="span6">                

                        <div class="block" align="center">
                            <div class="head">
                                <div class="head red">                                
                                    <h2><?php echo $message;?></h2> 
                                </div>
									<?php echo form_open("admin/cp/login");?>
									<div class="row-form">
										<div class="span3"><?php echo lang('login_identity_label', 'identity');?></div>
										<div class="span9"><?php echo form_input($identity);?></div>
									</div>
									<div class="row-form">
										<div class="span3"><?php echo lang('login_password_label', 'password');?></div>
										<div class="span9"><?php echo form_input($password);?></div>
									</div>
									<div class="row-form">
									<?php echo lang('login_remember_label', 'remember');?><?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> 
									</div>
									<div class="toolbar bottom tar">
                                    <div class="btn-group">
                                    <?php echo form_submit('submit', lang('login_submit_btn'));?>
                                    </div>
									</div>
									
									<?php echo form_close();?>
                            </div>                                               
                            
						</div>
                    </div>

					<div class="span3"></div>
                    
                </div> 

                <div class="row-fluid">
                    <br></br><br></br><br></br><br></br><br></br>
                </div>                
                

            </div>
            