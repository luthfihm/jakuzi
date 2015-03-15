<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('bootstrap/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
	<title>Jakuzi - Login</title>
</head>
<body style="background:#4e69a2;">
	<div id="wrap" style="height:600px;">
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					
				</div>
			</div>
		</div>
		<div class="jumbotron mashead">
			<div class="container-fluid" style="padding-top:80px;">
				<div class="row-fluid">
					<div class="span6 offset1">
						<div class="hero-unit" style="background:#4e69a2; color:#ffffff;">
							<h1>Jakuzi</h1>
							<p>Jadwal Kuliah Terintegrazi</p>						
						</div>
					</div>
					<div class="span3" style="padding-top:50px; padding-left:20px; padding-right:20px; color:#ffffff;">
							<?php echo form_open('login'); ?>
								<h4>Login dengan akun Google</h4> <br>
								<div class="control-group">
										<input type="text" name="inputEmail" value="<?php echo set_value('inputEmail'); ?>" class="input-span3" placeholder="Email" style="width:100%">
								</div>
								<div class="control-group">
										<input type="text" name="inputPassword" value="<?php echo set_value('inputPassword'); ?>" class="input-span3" placeholder="Password" style="width:100%">
								</div>
									<?php echo validation_errors('<div class="error">', '</div>'); ?>
								<div class="control-group">
										<button type="submit" class="btn btn-inverse">Login</button>
										<?php echo anchor('login/signup', 'Create Account', array('class' => 'btn btn-inverse')); ?>
								</div>
							</form>
						
					</div>				
				</div>			
			</div>
		</div>
	</div>
</body>
</html>