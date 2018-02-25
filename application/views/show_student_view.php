<!-- student function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>student <?php echo $nameMaj; ?></h2>
			<ul class="breadcrumb">
				<table border = "1" style="width:100%">
					<tr>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Faculty</td>
						<td>Major</td>
						<td>Status</td>
						<td>COOP 103</td>
						<td>COOP 202</td>
						<td>View</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>

				
				<?php
				$que = "SELECT * FROM `student_form_103`,`student`,`major`,`student_staus` ,`faculty`
						WHERE major.Major_ID = student.major_id
						AND major.Fac_ID = faculty.Fac_ID
						AND	student_form_103.STD_ID = student.STD_ID
						AND student_staus.std_form_103_id = student_form_103.std_form_103_id
						AND major.NameMajor_sub = '$nameMaj'
						AND student_staus.std_type = '$type';";

					$res = $this->db->query($que);
					foreach ($res->result() as $key ) {
						echo "<tr>";
						echo "<td>$key->std_psuid</td>";
						echo "<td>$key->std_name</td>";
						echo "<td>$key->Faculty_name</td>";
						echo "<td>$key->Major_name</td>";
						echo "<td>$key->status</td>";
						echo "<td></td>";
						echo "<td></td>";
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
