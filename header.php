<!DOCTYPE html>
<html lang="en"> 
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>ComplianceTrack</title>

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		 <link rel="icon"  type="image/png" href="<?php echo base_url();?>assets/favicon.ico">
		<!-- text fonts -->
		<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" /> -->

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
		<![endif]-->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
		<style type="text/css">
			.shadow
			{
				background: white;
				border-radius: 10px;
				padding: 10px;
				margin-bottom:  5px;	
				 box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
				width: inherit;
    			display: inline-block;
			} 
			.logo
			{
				width: 300px;
			    height: 47px;
			    margin-top: -12px;
			    padding: 5px;
			}
			.navbar-brand{
				padding: 0;
			}
			@media only screen and (max-width: 991px)
			.logo{

				width: 300px;
			    height: 47px;
			    margin-top: -12px;
			    padding: 5px;

			}	
			.footer .footer-inner .footer-content {
				border-top: 0;
			}
			.btn{
				padding: 4px 10px;
				border: 0;
				border-radius: 5px;
				text-shadow: none;
			}
			
		</style>
		
	</head>

	<body class="skin-1">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">

						<img class="logo" src="<?php 
						// if($this->session->LOGO)
						// {
						// 	echo $this->session->LOGO;
						// }else{
								echo base_url('assets/log.png');
							//}
						?>"  />
						<!-- <small>
							<i class="fa fa-leaf"></i>
							Attendance APP
						</small> -->
					</a>
				</div>
				
				<?php 
						if (IS_COMPANY == TRUE || IS_BRANCH == TRUE || IS_SPG == TRUE || IS_SPGUSER == TRUE) { 
						?>					
							<span class="navbar-form navbar-left" style="color: white;
							   text-align: center;
							   margin-left: 25%;
							   margin-top: 1%; 
							   font-weight: bolder;">
							   
							<?php 
							if (user_id() != 14000130004) {	
								// If user is SPG or SPGUSER, fetch username from the user table
								if (IS_SPG == TRUE || IS_SPGUSER == TRUE) {
									$query = $this->db->select('username')->where('custid', user_id())->get('users'); 
									$user_info = $query->row();
									$user_name = !empty($user_info->username) ? $user_info->username : $this->session->SESS_CUST_NAME;
								} else {
									$user_name = !empty($info->entity_name) ? $info->entity_name : $this->session->SESS_CUST_NAME;
								}
								
								echo $user_name;
							} 
							?>
							</span> 
						<?php 
						} else {
							echo "</span>"; 
						} 
						?>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">

					<ul class="nav ace-nav">
					

						<li class="light-blue dropdown-modal">
							<!-- <a data-toggle="dropdown" href="#" class="dropdown-toggle"> -->
								<!-- <img class="nav-user-photo" src="<?php //echo base_url();?>assets/images/avatars/user.jpg" alt="Jason's Photo" /> -->
								<!-- <span class="user-info" style="max-width: 200px">
									<small>Welcome to,</small>
									Compliancetrack 2.0
								</span> -->

								<!-- <i class="ace-icon fa fa-caret-down"></i>
							</a> -->

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close" style="display: none;">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="<?php echo base_url('profile');?>">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url('login/quite');?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar  responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				
				<?php
					
				function nest_list($array,$flag=TRUE)
				{
					if ($flag==TRUE) {
						$flag=FALSE;
						$output= "<ul class='nav nav-list'>";		
					}
					else
					{
						$output= "<ul class='submenu'>";
					}
					if (!empty($array)) {

						
						foreach ($array as $key ) {	
						// 	
							if ($key->active=='YES') {

								$a_link=$key->link=='#'?'#':base_url($key->link);	
							$output.="<li class='hover'> 
										<a href='".$a_link."'>
											<i class='menu-icon fa ".$key->icon."'></i>
											<span class='menu-text'> ".$key->name." </span>
										</a>

										<b class='arrow'></b>";
							
									if (!empty($key->child)) {
														
										$output.= nest_list($key->child,FALSE);
									}
									
							$output.= "</li>";
							}			
						}
					}
					return $output.= "</ul>";
					
				}
					echo nest_list($menu_list,TRUE);
				 	
				?>
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			
			</div>

			<div class="main-content" style="height: 70vh">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn" onclick="window.history.go(-1); return false;" title="GoTo Back">
								<i class="ace-icon fa fa-backward bigger-130"></i>
							</div>							
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								<?php echo $where;?>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									 <?php echo $sub_menu;?> <i class="hidden-sm hidden-xs sidebar-collapse  ace-icon fa fa-angle-double-up" data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down" data-target="#sidebar"></i>
								</small>
							</h1>
						</div>
						<?php
						 
						$alert = show_msg();
							if (!empty($alert)) {
								if ($alert['status']==200) {
									$class='alert-success';
								}
								elseif ($alert['status']==500) {
									$class='alert-danger';
								}
								elseif ($alert['status']==307) {
									$class='alert-warning';
								}
								else{
									$class='alert-info';
								}
								if (is_array($alert['msg'])) {
									foreach ($alert['msg'] as $key ) {
										echo '<div class="alert '.$class.' alert-dismissible fade in">
											    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											    <strong>'.$key.'</strong> 
											</div>';
									}
									# code...
								}else{
								echo '<div class="alert '.$class.' alert-dismissible fade in">
									    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									    <strong>'.$alert['msg'].'</strong> 
									</div>';
								}

							}

						?>

						<div style="margin-bottom: 25px; display: flex;">
						
						
						