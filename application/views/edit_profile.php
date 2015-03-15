<?php
	$this->db->where('username',$this->session->userdata('username'));
	$query=$this->db->get('membership');
	foreach ($query->result() as $user){
?>
<script type="text/javascript" >
	$("document").ready(function(){
		$(".<?php echo $user->fakultas ?>").css("display","block");		
	});
	function getval(sel){
		var val=sel.value;	
		var fakultas;
		var i=160;
		while(i<=169){
			if(i==val){
				fakultas="."+i;
				$(fakultas).css("display","block");
			}else{
				fakultas="."+i;
				$(fakultas).css("display","none");
			}	
			i++;
		}
		i=197;
		while(i<=199){
			if(i==val){
				fakultas="."+i;
				$(fakultas).css("display","block");
			}else{
				fakultas="."+i;
				$(fakultas).css("display","none");
			}	
			i++;
		}
	}
	$(document).ready(function(){
  		$('#signup-form').validate(
 		{
  			rules: {
    			nama_lengkap: {
      			minlength: 2,
      			required: true
    			},
    		
  			},
  			highlight: function(element) {
    			$(element).closest('.control-group').removeClass('success').addClass('error');
  			},
  			success: function(element) {
    			element.text('OK!').addClass('valid').closest('.control-group').removeClass('error').addClass('success');
  			}
 		});
	}); 
</script>	
<style type="text/css">
	label.valid {
  		width: 24px;
  		height: 24px;

  		display: inline-block;
  		text-indent: -9999px;
	}
	label.error {
  		font-weight: bold;
  		color: red;
  		padding: 2px 8px;
  		margin-top: 2px;
	}
</style>	
<div class="container" style="color:#ffffff;" align="center">
	<div class="" style="width:550px;" align="left">
		<center><h4>Edit Data Profile Anda</h4></center><br>
		<form action="<?php echo base_url('site/save_profile'); ?>" id="signup-form" method="post" accept-charset="utf-8" class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="nama_lengkap">Nama Lengkap</label>
			<div class="controls">
				<input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo $user->nama_lengkap ?>" class="input-xlarge" placeholder="Nama Lengkap">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="email">Alamat Email</label>
			<div class="controls">
				<input type="text" name="email" id="email" value="<?php echo $user->email ?>" class="input-xlarge" placeholder="Alamat Email">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="nim">NIM</label>
			<div class="controls">
				<input type="text" name="nim" id="nim" value="<?php echo $user->nim ?>" class="input-small" placeholder="NIM">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="fakultas">Fakultas</label>
			<div class="controls">
				<select name="fakultas" id="fakultas" onchange="getval(this);">
					<option value="">- Pilih Fakultas -</option>
					<?php 
						$query=$this->db->get('fakultas');
						foreach ($query->result() as $row) {											
					?>
					<option value="<?php echo $row->id; ?>" <?php if($row->id==$user->fakultas){echo "selected";} ?>><?php echo $row->nama_pendek; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="jurusan">Jurusan</label>
			<div class="controls">
				<select name="jurusan">
					<option value="">- Pilih Jurusan -</option>
					<?php 
						$query=$this->db->get('jurusan');
						foreach ($query->result() as $row) {											
					?>
					<option value="<?php echo $row->kode; ?>" class="<?php echo $row->fakultas; ?>" style="display:none;" <?php if($row->kode==$user->jurusan){echo "selected";} ?>><?php echo $row->nama; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<?php if($edit_success){ ?>
		<div align="center">
			<div class="alert alert-success" style="width:200px;" align="center">
    			Edit Data Berhasil dilakukan 
    		</div>
    	</div>
    	<?php } ?>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-inverse" id="submit">Update Profile</button>
			</div>
		</div>
		</form>
	</div>
</div>
<?php } ?>