<!-- teacher function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Teacher <?php echo $nameFac; ?></h2>

			<ul class="breadcrumb">

				
				<input type = "hidden" id = "type"  value="<?php echo $type;?>">
 				<input type = "hidden" id = "major"  value="<?php echo $nameMaj;?>">
 				<input type = "hidden" id = "fac"  value="<?php echo $nameFac;?>">

				<?php
				///check have teacher approve
					$this->db->select('*');
					$this->db->from('major_setting_personnel');
					$this->db->where("major_type='$type'
								AND major_id = (SELECT major_id from `major`
												WHERE NameMajor_sub = '$nameMaj')
								AND personnel_id!='NULL'");
					$MajRes = $this->db->get();

					if($MajRes->result()){

						$aprover = "SELECT *
    						FROM `major_setting_personnel`,`personnel`
    						WHERE major_id=(
        						SELECT major_id
        						from major
        						where NameMajor_sub = '$nameMaj')
        					AND major_setting_personnel.personnel_id = personnel.personnelID
    						AND major_type = '$type'";

    						$sum = $this->db->query($aprover);
    						
						?>
						<h2>approvers</h2>
						<table class="table table-hover table-bordered  table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Major</th>
                                        <th>TYPE</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    		foreach ($sum->result() as $key ) {
                                    			echo "<tr>";
                                    			echo "<td>$key->personnel_id</td>";
                                    			 echo "<td>$key->title</td>";
                                    			 echo "<td>$key->personnelName $key->personnelSName</td>";
                                    			 echo "<td>$nameMaj</td>";
                                    			 echo "<td>$type</td>";
                                    			 echo '<td> <center><a href="'.base_url('project-coop/index.php/Fun_sidebar_admin/delassign?id='.$key->personnel_id.'&type='.$type.'&major='.$nameMaj.'&fac='.$nameFac).'" class="btn btn-raised btn-primary waves-effect">UNAPPROVE</a></center></td>' ;
                                    			 echo "</tr>";
                                    		}
                                    	?>
                                    </tbody>
                            </table>
						<?php
						$que = "SELECT * FROM personnel,faculty 
								WHERE faculty.Fac_ID = personnel.Fac_ID
								AND faculty.NameFac_sub = '$nameFac'
								AND personnel.Position = 'lecture'
								AND personnel.personnelID NOT IN(
		    							SELECT personnel_id 
		    							FROM major_setting_personnel
		    							WHERE major_id =(
												SELECT major_id FROM major WHERE NameMajor_sub = '$nameMaj'
										)
										AND major_type = '$type'
								);";
					}else{

						$que = "SELECT * FROM `personnel`,`faculty`
						WHERE faculty.Fac_ID = personnel.Fac_ID
						AND faculty.NameFac_sub = '$nameFac'
						AND personnel.Position='lecture'";
					}

				?>
				<table  id="example" border = "0" style="width:100%">


					<thead>
					 <tr>
							 
							 <td>ID</td>
							 <td>Title</td>
							 <td>Name</td>
							 <td>Surname</td>
							 <td>Faculty</td>
							 <td></td>

					 </tr>
			 </thead>

				<?php
					$res = $this->db->query($que);
					$no = 0;
					foreach ($res->result() as $key ) {
						$no++;
						echo "<tr>";
						echo "<td>$key->personnelID</td>";
						echo "<td>$key->title</td>";
						echo "<td>$key->personnelName</td>";
						echo "<td>$key->personnelSName</td>";
						echo "<td>$key->NameFac_sub</td>";
						
						echo '<td> <center><a href="'.base_url('project-coop/index.php/Fun_sidebar_admin/assign?id='.$key->personnelID.'&type='.$type.'&major='.$nameMaj.'&fac='.$nameFac).'" class="btn btn-raised btn-primary waves-effect">set approve</a></center></td>' ;
						echo "</tr>";
					}
				?>
			</table>
			</ul>
		</div>
		</div>
		<!-- <button id="btnSelectedRows">
  Get Selected Rows
</button> -->

		<script type="text/javascript">
		var teacher =[];
		var table;
		var type = document.getElementById("type").value;
 		var major = document.getElementById("major").value;
 		var fac = document.getElementById("fac").value;
		$(document).ready(function(){
		  table = $('#example').DataTable({
		    
		  });

		});
		
		</script>

</section>
