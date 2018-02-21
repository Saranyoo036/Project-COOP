<!-- teacher function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>teacher <?php echo $nameFac; ?></h2>
			<ul class="breadcrumb">
				<table border = "1" style="width:100%">
					<tr>
						<td></td>
						<td>NO.</td>
						<td>Title</td>
						<td>Name</td>
						<td>Surname</td>
						<td>Faculty</td>
					</tr>

				
				<?php
				$que = "SELECT * FROM `teacher` ,`faculty`
						WHERE faculty.Fac_ID = teacher.Fac_ID
						AND faculty.NameFac_sub = '$nameFac';";

					$res = $this->db->query($que);
					$no = 0;
					foreach ($res->result() as $key ) {
						$no++;
						echo "<tr>";
						echo "<td></td>";
						echo "<td>$no</td>";
						echo "<td>$key->title</td>";
						echo "<td>$key->TeacherName</td>";
						echo "<td>$key->TeacherSName</td>";
						echo "<td>$key->Faculty_name</td>";
						echo "</tr>";
					}
				?>
			</table>
			</ul>
		</div>
	
		
		
		</div>
	
</section>
