<script>
	$(document).ready(function(){
		$("#username").focus();	
	});
</script>
<?php //$this->load->view('includes/header'); ?>
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
							<?php echo form_open('login/validate_credentials'); ?>
								<h4>Login dengan akun Anda</h4> <br>
								<div class="control-group">
										<input type="text" name="username" id="username" value="" class="input-span3" placeholder="Username" style="width:100%">
								</div>
								<div class="control-group">
										<input type="password" name="password" value="" class="input-span3" placeholder="Password" style="width:100%">
								</div>
									<?php if ($invalid_login){ echo "<span class='label label-warning'>Username atau Passoword Salah</span><br><br>"; } ?>
								<div class="control-group">
										<button type="submit" class="btn btn-inverse">Login</button>
										<?php echo anchor('login/signup', 'Create Account', array('class' => 'btn btn-inverse')); ?>
								</div>
							</form>
							
						
					</div>				
				</div>			
			</div>
		</div>
<?php //$this->load->view('includes/footer'); ?>