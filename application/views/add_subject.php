<div class="container" style="color:#ffffff;" align="center">
	<center><h2>Tambah Mata Kuliah</h2></center><br>
	<div style="width:500px;" align="left">
	<form action="<?php echo base_url('site/save_subject'); ?>" method="post" accept-charset="utf-8" class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="kode">Kode Mata Kuliah</label>
			<div class="controls">
				<input type="text" name="kode" id="kode" value="" class="input-small" placeholder="Kode">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="nama">Nama Mata Kuliah</label>
			<div class="controls">
				<input type="text" name="nama" id="nama" value="" class="input-xlarge" placeholder="Nama Mata Kuliah">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="dosen">Dosen Pengajar</label>
			<div class="controls">
				<input type="text" name="dosen" id="dosen" value="" class="input-xlarge" placeholder="Dosen Pengajar">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="sks">Jumlah SKS</label>
			<div class="controls">
				<div class="input-append">
					<input class="span1" id="appendedInput" type="text" name="sks">
					<span class="add-on" style="background:#333333;">SKS</span>
				</div>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-inverse">Tambah</button>
			</div>
		</div>
	</form>
	</div>
	
</div>