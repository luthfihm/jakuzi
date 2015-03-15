<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('bootstrap/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url('favicon.png'); ?>">
	<script src="<?php echo base_url('jquery-2.0.3.min.js'); ?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript" ></script>
	<title>Jakuzi </title>
	<script>
		$('.dropdown-toggle').dropdown()	
	</script>
</head>
<body style="background:#4e69a2;">
	<div id="">
	
	<header class="navbar navbar-inverse">
   	<div class="container">
    		<div class="navbar-inner">
     
    			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
    			<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
     
    			<!-- Be sure to leave the brand out there if you want it shown -->
    			<a class="brand" href="<?php echo base_url('site'); ?>">Jakuzi</a>
     
    			<!-- Everything you want hidden at 940px or less, place within here -->
    			<div class="nav-collapse collapse">
    			<!-- .nav, .navbar-search, .navbar-form, etc -->
    				<ul class="nav">
						<li <?php if ($main_content=="homepage"){echo "class='active'";}?>><a href="<?php echo base_url('site'); ?>">Home</a></li>
						<li <?php if ($main_content=="show_subject"){echo "class='active'";}?>><a href="<?php echo base_url('site/subject'); ?>">Daftar Mata Kuliah</a></li>
						<li <?php if ($main_content=="show_schedule"){echo "class='active'";}?>><a href="<?php echo base_url('site/schedule'); ?>">Jadwal Kuliah</a></li>
						<li class="dropdown<?php if (($main_content=='edit_profile')||($main_content=='change_password')){echo ' active';}?>">
                  	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting <b class="caret"></b></a>
                  	<ul class="dropdown-menu">
                    		<li><a href="<?php echo base_url('site/edit_profile'); ?>">Edit Profile</a></li>
                    		<li><a href="<?php echo base_url('site/change_password'); ?>">Change Password</a></li>
                  	</ul>
                	</li>
                	<li></li>
					</ul>
					<?php echo anchor('logout', 'Logout', array('class' => 'btn')); ?>
    			</div>
    		</div>
    	</div>
	</header>
	