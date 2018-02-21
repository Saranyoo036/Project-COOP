<!-- Company function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Company<?php echo $nameMaj; ?></h2>
			<ul class="breadcrumb">
				<table border = "1" style="width:100%">
					<tr>
						<td>NO.</td>
						<td>Name</td>
						<td>Address</td>
						<td>Provice</td>
						<td>Contract</td>
						<td>Note</td>
						<td>Edit</td>
						<td>View</td>
						<td>Delete</td>
					</tr>

				
				<?php
				$que = "SELECT * FROM `major`,`company` ,`faculty`
						WHERE major.Major_ID = company.Major_ID
						AND faculty.Fac_ID = major.Fac_ID
						AND major.NameMajor_sub = '$nameMaj'
						AND company.company_type = '$type';";

					$res = $this->db->query($que);
					$no = 0;
					foreach ($res->result() as $key ) {
						$no++;
						echo "<tr>";
						echo "<td>$no</td>";
						echo "<td>$key->company_name</td>";
						echo "<td>$key->address</td>";
						echo "<td>$key->provice</td>";
						echo "<td>$key->contract $key->Tel</td>";
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
