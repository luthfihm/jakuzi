<script>
	function show(id){
		var cek="#cek"+id;
		var day="#day"+id;
		var place="#place"+id;
		var kode=$("#kode").val();
		$(cek).css("display","none");
		$(day).val(kode);
		$(place).css("display","block");	
		$(place).focus();
	}
	function tampil(id){
		var cek="#cek"+id;
		var day="#day"+id;
		var tam="#tampil"+id;
		var place="#place"+id;
		var tempat=$(place).val();
		var konten='<span onclick="edit('+id+');">'+tempat+'</span>';
		if(tempat!=""){	
			$(place).css("display","none");
			$(tam).html(konten);
			$(tam).css("display","block");
		}else{
			$(place).css("display","none");
			$(day).val("");
			$(cek).removeAttr('checked');
			$(cek).css("display","block");
		}
	}
	function edit(id){
		var tam="#tampil"+id;
		var place="#place"+id;
		$(tam).css("display","none");
		$(place).css("display","block");	
		$(place).focus();
	}
	function enable_jadwal(){
		var kode=$("#kode").val();
		if	(kode!=""){
			$(".cek").prop('disabled', false);
		}else{
			$(".cek").prop('disabled', true);
		}
	}
</script>
<form action="<?php echo base_url('site/remove_subject'); ?>" method="post" accept-charset="utf-8">
<div class="container">
	<center><h3 style="color:#ffffff;">Daftar Mata Kuliah</h3></center>
	<table class="table table-bordered table-hover" style="background:#ffffff;">
		<thead>
		<tr>
			<th class="span1">No</th>	
			<th class="span2">Kode</th>	
			<th class="span4">Mata Kuliah</th>
			<th class="span4">Dosen</th>
			<th class="span2">SKS</th>
			<th class="span1">Hapus</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$this->db->where('username',$this->session->userdata('username'));
			$this->db->order_by('kode','asc');
			$query=$this->db->get('subject');
			$i=1;
			$sks=0;
			foreach ($query->result() as $row)
			{
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row->kode; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->dosen; ?></td>
			<td><?php echo $row->sks; ?> SKS</td>
			<td>
				<center>
					<input type="checkbox" name="id[]" value="<?php echo $row->id; ?>">
				</center>	
			</td>		
		</tr>	
		<?php 
				$sks+=$row->sks;
				$i++;
			} ?>	
		<tr>
			<th colspan="4">Total SKS yang diambil : <?php echo $sks; ?> SKS</th>
			<td>
				<center><a href="#AddSubject" role="button" class="btn btn-inverse" data-toggle="modal">Tambah</a></center>
			</td>
			<td><center><button type="submit" class="btn btn-inverse" onclick="javascript:if(confirm('Yakin untuk menghapus?')){ return true; } else{ return false;}">Hapus</button></center></td>		
		</tr>
		</tbody>
	</table>
</div>
</form>
<form action="<?php echo base_url('site/save_subject'); ?>" method="post" accept-charset="utf-8" class="form-horizontal">
<div id="AddSubject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<h3 id="myModalLabel">Tambah Mata Kuliah</h3>
	</div>
	<div class="modal-body">
			<div class="control-group">
				<label class="control-label" for="kode">Kode Mata Kuliah</label>
				<div class="controls">
					<input type="text" name="kode" id="kode" value="" class="input-small" placeholder="Kode" onblur="enable_jadwal();">
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
						<span class="add-on">SKS</span>
					</div>
				</div>
			</div>
		<div>
			<table class="table table-borderes">
				<thead>
					<tr>
						<th class="span3"><center>Jam</center></th>
						<th class="span2"><center>Senin</center></th>
						<th class="span2"><center>Selasa</center></th>
						<th class="span2"><center>Rabu</center></th>
						<th class="span2"><center>Kamis</center></th>
						<th class="span2"><center>Jum'at</center></th>			
					</tr>				
				</thead>
				<tbody style="font-size:11px;">
				<?php
					$this->db->where('username',$this->session->userdata('username'));
					$query=$this->db->get('schedule');
					foreach ($query->result() as $row)
					{
						$day1=unserialize($row->day1);
						$day2=unserialize($row->day2);
						$day3=unserialize($row->day3);
						$day4=unserialize($row->day4);
						$day5=unserialize($row->day5);
						
						$place1=unserialize($row->place1);
						$place2=unserialize($row->place2);
						$place3=unserialize($row->place3);
						$place4=unserialize($row->place4);
						$place5=unserialize($row->place5);
						$day=array(
							1 => unserialize($row->day1),
							2 => unserialize($row->day2),
							3 => unserialize($row->day3),
							4 => unserialize($row->day4),
							5 => unserialize($row->day5)						
						);
						$place=array(
							1 => unserialize($row->place1),
							2 => unserialize($row->place2),
							3 => unserialize($row->place3),
							4 => unserialize($row->place4),
							5 => unserialize($row->place5)						
						);	
					}
					$jam=6; 
					for ($i=1;$i<=11;$i++){
						$jam1=$jam+$i;
						$jam2=$jam1+1; 	
						if($jam1 < 10)
						{
							$print="0".$jam1.":00 - ";	
						}
						else
						{
							$print=$jam1.":00 - ";	
						}
					
						if($jam2 < 10)
						{
							$print=$print."0".$jam2.":00";	
						}
						else
						{
							$print=$print.$jam2.":00";	
						}
				?>	
					<tr>
						<td><center><?php echo $print; ?></center></td>
						<?php
						for ($j=1;$j<=5;$j++){
						?>
						<td>
							<center>
							<?php
							$this->db->where('username',$this->session->userdata('username'));
							$this->db->where('kode',$day[$j][$i-1]);
							$query=$this->db->get('subject');
							if($query->num_rows == 1){
								foreach ($query->result() as $row){
									$kuliah=$row->kode;
								}
							?>
							<input type="hidden" name="day<?php echo $j; ?>[]" value="<?php echo $kuliah; ?>">
							<input type="hidden" name="place<?php echo $j; ?>[]" value="<?php echo $place[$j][$i-1]; ?>">
							<span class="label label-important" style="font-size:10px;"><?php echo $kuliah; ?></span>
							<?php }else{ ?>				
							<input type="checkbox" class="cek" id="cek<?php echo $j.$i; ?>" onclick="show('<?php echo $j.$i; ?>');" disabled="disabled">
							<input type="hidden" name="day<?php echo $j; ?>[]" id="day<?php echo $j.$i; ?>">
							<input type="text" name="place<?php echo $j; ?>[]" id="place<?php echo $j.$i; ?>" class="input" style="width:42px;display:none;" placeholder="Ruang" onblur="tampil('<?php echo $j.$i; ?>');">
							<div id="tampil<?php echo $j.$i; ?>" style="display:none;"></div>
							<?php } ?>
							</center>
						</td>
						<?php } ?>
					</tr>
				<?php } ?>			
				</tbody>
			</table>				
		</div>
	</div>
	<div class="modal-footer">
		<div class="control-group">
			<div class="controls">
				<?php echo anchor('site/subject', 'Cancel', array('class' => 'btn btn-info')); ?>
				<button type="submit" class="btn btn-inverse">Tambah</button>
			</div>
		</div>
	</div>
</div>
</form>