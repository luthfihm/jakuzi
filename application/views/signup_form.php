<script type="text/javascript" >
	/*$("document").ready(function(){
		$("#fakultas").change(function() {	
			alert(value);
			$(".160").css("display","block");
		});		
	});*/
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
		<div class="jumbotron mashead">
			<div class="container-fluid" style="padding-top:20px;">
				<div class="row-fluid">
					
					<div class="span5 offset2" style="color:#ffffff;">
							
							<form action="<?php echo base_url('login/new_member'); ?>" id="signup-form" method="post" accept-charset="utf-8" class="form-horizontal">
								<h4>Buat akun Jakuzi</h4> <br>
								<div class="control-group">
									<label class="control-label" for="nama_lengkap">Nama Lengkap</label>
									<div class="controls">
										<input type="text" name="nama_lengkap" id="nama_lengkap" value="" class="input-xlarge" placeholder="Nama Lengkap">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="username">Username</label>
									<div class="controls">
										<input type="text" name="username" id="username" value="" class="input" placeholder="User Name">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="password">Password</label>
									<div class="controls">
										<input type="password" name="password" id="password" value="" class="input" placeholder="Password">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="email">Alamat Email</label>
									<div class="controls">
										<input type="text" name="email" id="email" value="" class="input-xlarge" placeholder="Alamat Email">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="nim">NIM</label>
									<div class="controls">
										<input type="text" name="nim" id="nim" value="" class="input-small" placeholder="NIM">
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
											<option value="<?php echo $row->id; ?>"><?php echo $row->nama_pendek; ?></option>
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
											<option value="<?php echo $row->kode; ?>" class="<?php echo $row->fakultas; ?>" style="display:none;"><?php echo $row->nama; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<button type="submit" class="btn btn-inverse" id="submit">Create Account</button>
									</div>
								</div>
							</form>
							
						
					</div>				
				</div>			
			</div>
		</div>