<div class="container">
	<center><h3 style="color:#ffffff;">Jadwal Kuliah</h3></center>
	<table class="table table-bordered table-hover" style="background:#ffffff;">
		<thead>
			<tr>
				<th class="span2"><center>Jam</center></th>
				<th class="span3"><center>Senin</center></th>
				<th class="span3"><center>Selasa</center></th>
				<th class="span3"><center>Rabu</center></th>
				<th class="span3"><center>Kamis</center></th>
				<th class="span3"><center>Jum'at</center></th>			
			</tr>	
		</thead>	
		<tbody>
			<?php
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
			<tr><td><center><?php echo $print; ?></center></td>
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
					for ($j=1;$j<=5;$j++){
						$this->db->where('username',$this->session->userdata('username'));
						$this->db->where('kode',$day[$j][$i-1]);
						$query=$this->db->get('subject');
						$style="";
						$text="";
						if($query->num_rows == 1)
						{
							foreach ($query->result() as $row){
								$text=$row->nama."<br>Ruang : ".$place[$j][$i-1];	
							}
							$style="background:#98dad3;";
						}			
				?>
				<td style="<?php echo $style; ?>">
					<?php echo $text; ?>
				</td>
			<?php	
					}
			?>
			</tr>
			<?php
				}		
			?>

		</tbody>
	</table>
	<?php echo anchor('site/edit_schedule', 'Edit Jadwal Kuliah', array('class' => 'btn btn-inverse')); ?>
</div>