<div class="container" style="color:#ffffff;" align="center">
	<div class="" style="width:550px;" align="left">
		<center><h4>Ubah Password Anda</h4></center><br>
		<form action="<?php echo base_url('site/save_password'); ?>" id="signup-form" method="post" accept-charset="utf-8" class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="password">Old Password</label>
			<div class="controls">
				<input type="password" name="password" id="password" value="" class="input-xlarge" placeholder="Old Password">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="new_password">New Password</label>
			<div class="controls">
				<input type="password" name="new_password" id="new_password" value="" class="input-xlarge" placeholder="New Password">
			</div>
		</div>
		<?php if(isset($edit_success)){ 
					if($edit_success){
		?>
		<div align="center">
			<div class="alert alert-success" style="width:200px;" align="center">
    			Password berhasil diubah
    		</div>
    	</div>
    		<?php }else{ ?>
    	<div align="center">
			<div class="alert alert-error" style="width:200px;" align="center">
    			Password gagal diubah
    		</div>
    	</div>
    	<?php }} ?>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-inverse" id="submit">Ubah Password</button>
			</div>
		</div>
		</form>
	</div>
</div>