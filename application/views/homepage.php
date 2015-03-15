<?php
	$user=$this->session->userdata('username');
	$this->db->where('username',$user);
	$query = $this->db->get('membership');
?>
<div class="container" style="color:#ffffff;">
	 <div class="row-fluid" align="center" >
    	<div class="span12">
   		<center><h3> User Profile</h3></center>
   		<ul class="thumbnails" style="width:150px;">
   			<center>
    			<li class="">
    				<div class="thumbnail">
    					<img src="<?php echo base_url('img/profile.jpeg'); ?>" alt="" width="150px" >
    				</div>
    			</li>
    			</center>
    		</ul>
   		<br>
    		<div class="row-fluid" align="center" style="color:#000000;">
    			<center>
    			<?php foreach ($query->result() as $row){ ?>
    			<table class="table table-bordered table-hover" style="background:#ffffff;width:50%;font-size:16px;">
    				<tr>
    					<th class="span2">Nama Lengkap</th>
    					<th class="span4"><?php echo $row->nama_lengkap; ?></th>
    				</tr>
    				<tr>
    					<th class="span2">NIM</th>
    					<th class="span4"><?php echo $row->nim; ?></th>
    				</tr>
    				<tr>
    					<th class="span2">Jurusan</th>
    					<th class="span4">
    					<?php 
    						$this->db->where('kode',$row->jurusan);
    						$query=$query = $this->db->get('jurusan');
    						foreach ($query->result() as $jurusan){
    							echo $jurusan->nama;	
    						}
    					?>
    					</th>
    				</tr>
    				<tr>
    					<th class="span2">Fakultas</th>
    					<th class="span4">
    					<?php 
    						$this->db->where('id',$row->fakultas);
    						$query=$query = $this->db->get('fakultas');
    						foreach ($query->result() as $fakultas){
    							echo $fakultas->nama_lengkap;	
    						}
    					?>
    					</th>
    				</tr>
    				<tr>
    					<th class="span2">Alamat Email</th>
    					<th class="span4"><a href="mailto:<?php echo $row->email; ?>" ><?php echo $row->email; ?></a></th>
    				</tr>
				</table>
				<?php } ?>
    			</center>
    		</div>
    	</div>
    </div>
</div>