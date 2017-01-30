<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title><?php echo $title ?></title>
    <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>assets/aries/favicon.ico"/>
    
    <link href="<?php echo base_url(); ?>assets/aries/css/stylesheets.css" rel="stylesheet" type="text/css" />
	
    <!--[if lte IE 7]>
        <link href="<?php echo base_url(); ?>assets/aries/css/ie.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
	
	
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/jflot/jquery.flot.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/jflot/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/jflot/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/jflot/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/sparklines/jquery.sparkline.min.js'></script>        
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/aries/js/plugins/uniform/jquery.uniform.min.js"></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/plugins.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/charts.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aries/js/actions.js'></script>
</head>
<body>    
    <div id="loader"><img src="<?php echo base_url(); ?>assets/aries/img/loader.gif"/></div>
    <div class="wrapper">
        
        <div class="sidebar">
            
            <div class="top">
                <a href="<?php echo base_url(); ?>" class="logo"></a>
				
                <div class="search">
					</br>
                    <div class="input-prepend">
                        <span class="add-on orange"><span class="icon-search icon-white"></span></span>
                        <input type="text" placeholder="search..."/>                                                      
                    </div>            
                </div>
            </div>
            <div class="nContainer">                
                <ul class="navigation bordered">         
                    <li class="active"><a href="<?php echo base_url(); ?>admin" class="blblue">Dashboard</a></li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin" class="blyellow">Users Panel</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>admin/index">View User</a></li>
                            <li><a href="<?php echo base_url(); ?>admin/create_user">Create User</a></li>
                            <li><a href="<?php echo base_url(); ?>admin/create_group">Create Groups</a></li>
                            <li><a href="<?php echo base_url(); ?>admin/change_password">Change Password</a></li>
                            <li><a href="<?php echo base_url(); ?>admin/logout">Logout</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="blgreen">Products</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>admins/add/category">Add Category</a></li>
                            <li><a href="<?php echo base_url(); ?>admins/add/product">Add Product</a></li>
                            <li><a href="<?php echo base_url(); ?>admins/view/product">View Products</a></li>
                            <li><a href="<?php echo base_url(); ?>admins/add/product/<?php if (isset($this->session->userdata['user_id'])){ echo $this->session->userdata['user_id'];}?>">Update Client</a></li>  
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="blred">Pages</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>apps/client/search">Frontpage</a></li>
                            <li><a href="<?php echo base_url(); ?>apps/client/index">Service Page</a></li>
                            <li><a href="<?php echo base_url(); ?>apps/client/add">Contact Page</a></li>
                            <li><a href="<?php echo base_url(); ?>apps/payment/add">Payment</a></li>
                        </ul>
                    </li>
                    <li><a href="statistic.html" class="blred">Statistic</a></li>                
                    <li>
                        <a href="#" class="blorange">Other</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="files.html">File handling</a></li>
                            <li><a href="images.html">Images</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="close">
                    <span class="ico-remove"></span>
                </a>
            </div>
            <div class="widget">
                <div class="datepicker"></div>
            </div>
            
        </div>
 
        <div class="body">
            
            <ul class="navigation">
                <li>
                    <a href="index-2.html" class="button">
                        <div class="icon">
                            <span class="ico-monitor"></span>
                        </div>                    
                        <div class="name">Dashboard</div>
                    </a>                
                </li>
                <li>
                    <a href="#" class="button yellow">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-cog-2"></span>
                        </div>                    
                        <div class="name">Clients</div>
                    </a>          
                    <ul class="sub">
                        <li><a href="#">View Clients</a></li>
                        <li><a href="#">Add Clients</a></li>
                        <li><a href="#">Add Payment</a></li>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Delete Client</a></li>
                    </ul>
                </li>                
                <li>
                    <a href="#" class="button green">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-pen-2"></span>
                        </div>                    
                        <div class="name">Agents</div>
                    </a>                
                    <ul class="sub">
                        <li><a href="forms.html">Elements</a></li>
                        <li><a href="validation.html">Validation</a></li>
                        <li><a href="grid.html">Grid</a></li>
                        <li><a href="editor.html">Editors</a></li>
                        <li><a href="wizard.html">Wizard</a></li>
                    </ul>                    
                </li>                        
                <li>
                    <a href="statistic.html" class="button red">
                        <div class="icon">
                            <span class="ico-chart-4"></span>
                        </div>                    
                        <div class="name">Admin Panel</div>
                    </a>                
                </li>                
                <li>
                    <a href="#" class="button dblue">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-layout-7"></span>
                        </div>                    
                        <div class="name">Settings</div>
                    </a> 
                    <ul class="sub">
                        <li><a href="tables.html">Simple</a></li>
                        <li><a href="tables_dynamic.html">Dynamic</a></li>
                    </ul>                                        
                </li>
                <li>
                    <a href="#" class="button purple">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-box"></span>
                        </div>                    
                        <div class="name">About US</div>
                    </a>                
                    <ul class="sub">
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>                                        
                </li>
                <li>
                    <a href="#" class="button orange">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-cloud"></span>
                        </div>                    
                        <div class="name">Other</div>
                    </a>                
                    <ul class="sub">
                        <li><a href="files.html">File handling</a></li>
                        <li><a href="images.html">Images</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="404.html">Error 404</a></li>
                    </ul>                                        
                </li>

				<li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </li>
                <li align="center">
                    <div class="user">
						<a href="#" class="name"></br>
                            <span><?php if (isset($this->session->userdata['username'])){ echo ucfirst($this->session->userdata['first_name'] . ' ' . $this->session->userdata['last_name']);} else {echo 'Guest';} ?></span>
                            <span class="sm"><?php if (isset($this->session->userdata['username'])){ echo ucfirst($this->session->userdata['company']);}?></span>
                        </a>
                    </div>
                </li> 
				<li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </li>
            </ul>
            
				<?php echo $output;?>
				<?php // echo $this->load->get_section('sidebar'); ?>
            
        </div>
        
    </div>
    
    <div class="dialog" id="source" style="display: none;" title="Source"></div>
    
</body>
</html>
