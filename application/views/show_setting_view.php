<!-- student function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Time Setting</h2>
			<ul class="breadcrumb">
				<?php
					$sql = "SELECT * FROM `major_setting`,`major` 
							WHERE major_setting.major_id = major.Major_ID
							AND major.NameMajor_sub = '$nameMaj'
							AND major_setting.SETTING_TYPE ='$type'
							LIMIT 1 ;";

					$query = $this->db->query($sql);
					$row = $query->row();
					

				?>
				<?php
					if($row==null){
						?>
						<form action="" method="">
							1.Requesting<br>
							<input type="date" name="ReqBg"> to <input type="date" name="ReqEnd"><br>
							2.Choosing<br>
							<input type="date" name="choosBg"> to <input type="date" name="choosEnd"><br>
					</form>
						<?php
					}else{
				?>
				<form action="" method="">
					
					1.Requesting<br>
					<input type="date" name="ReqBg" value="<?php echo $row->start_date_Req;?>"> to <input type="date" name="ReqEnd" value="<?php echo $row->end_date_Req;?>"><br>
					2.Choosing<br>
					<input type="date" name="choosBg" value="<?php echo $row->start_date_choosing;?>" > to <input type="date" name="choosEnd" value="<?php echo $row->end_date_choosing;?>"><br>
				</form>
				<?php } 
				?>
			</ul>
		</div>
	</div>
</section>
