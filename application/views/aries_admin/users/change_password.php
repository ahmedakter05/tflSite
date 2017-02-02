           <div class="content">
                
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-arrow-right"></span>
                    </div>
                    <h1>User Panel <small><?php echo lang('change_password_heading');?></small></h1>
                </div>
                
				
				<div class="row-fluid">
				
					<div class="span1"></div>
				
                    <div class="span10">
						<div class="block">
                            <div class="head blue">
                                <h2><?php echo $message;?></h2>
							</div>
						</div>
						
						<div class="data-fluid">
						
							<?php echo form_open("admin/cp/change_password");?>

								  <p>
										<?php echo lang('change_password_old_password_label', 'old_password');?> <br />
										<?php echo form_input($old_password);?>
								  </p>

								  <p>
										<label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
										<?php echo form_input($new_password);?>
								  </p>

								  <p>
										<?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
										<?php echo form_input($new_password_confirm);?>
								  </p>

								  <?php echo form_input($user_id);?>
								  <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

							<?php echo form_close();?>
						
						
						</div>
                    </div>
					
                	<div class="span1"></div>
				
				</div>

				<div class="row-fluid">
                    <br></br><br></br><br></br><br></br><br></br>
                </div>
                
				
                 
				
            </div>
  