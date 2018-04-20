<!-- student function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>student <?php echo $nameMaj; ?></h2>
			<ul class="breadcrumb">
				<table id="example" border = "0" style="width:100%">
					<thead>
						<tr>
							<td>dgdfg</td>
						</tr>
					<tr>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Faculty</td>
						<td>Major</td>
						<td>Status</td>
						<td>COOP 103</td>
						<?php 
							if($type=="COOP"){
								echo "<td>COOP 202-01</td>";
								echo "<td>COOP 202-02</td>";
							}else{
								echo "<td>COOP 202</td>";
							}
						?>
						<td>View</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
					</thead>


				<?php

				$que = "SELECT * FROM `student`,`major`,`faculty`,`student_status`
						WHERE major.Major_ID = student.major_id
						AND major.Fac_ID = faculty.Fac_ID
						AND student_status.STD_ID = student.STD_ID
						AND major.NameMajor_sub = '$nameMaj'
						AND student.std_type = '$type';";
					$res = $this->db->query($que);
					foreach ($res->result() as $key ) {
						$STD_ID = $key->STD_ID;
						echo "<tr>";
						echo "<td>$STD_ID</td>";
						echo "<td>$key->std_name</td>";
						echo "<td>$key->Faculty_name</td>";
						echo "<td>$key->Major_name</td>";
						echo "<td>$key->status</td>";
							$sql = "SELECT count(std_form_103_id) as form_103 FROM `student_form_103` WHERE std_form_103_id =$STD_ID";
							$form_103 = 0;
							$re = $this->db->query($sql);
							foreach ($re->result() as $key) {
								$form_103 = $key->form_103;
							}
							if($form_103==0){
						echo '<td><i class="material-icons">close</i></td>';
							}else{
						echo '<td><i class="material-icons">check</i></td>';
							}
							if($type=="COOP"){
								$sql = "SELECT count(STD_ID) as num_STD from student_company where STD_ID = $STD_ID";
								$num_STD = 0; 
								$re =$this->db->query($sql);
								foreach ($re->result() as $key ) {
									$num_STD=$key->num_STD;
								}
								if($num_STD==0){
						echo '<td><i class="material-icons">close</i></td>';
						echo '<td><i class="material-icons">close</i></td>';
								}else if($num_STD==1){
						echo '<td><i class="material-icons">check</i></td>';
						echo '<td><i class="material-icons">close</i></td>';
								}else if($num_STD==2){
						echo '<td><i class="material-icons">check</i></td>';
						echo '<td><i class="material-icons">check</i></td>';
								}
							}else if($type=="internship"){
								$sql = "SELECT count(STD_ID) as num_STD from student_company where STD_ID = $STD_ID";
								$num_STD = 0; 
								$re =$this->db->query($sql);
								foreach ($re->result() as $key ) {
									$num_STD=$key->num_STD;
								}
								if($num_STD==0){
						echo '<td><i class="material-icons">close</i></td>';
								}else if($num_STD==1){
						echo '<td><i class="material-icons">check</i></td>';
								}
							}
						echo "<td></td>";
						echo "<td></td>";
						echo "<td></td>";
						echo "</tr>";
					}
				?>
			</table>
			</ul>
		</div>



		</div>

</section>

<script type="text/javascript">

var teacher =[];
var table;
$(document).ready(function() {
	table = $('#example').DataTable({

	});
});

</script>
