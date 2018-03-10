<!-- student function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>NEWS</h2>
			<ul class="breadcrumb">
				<table border = "0" id="example" style="width:100%">
					<thead>
					<tr>
						<td>NO.</td>
						<td>Topics</td>
						<td>view</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
					</thead>

				
				<?php
				$que = " SELECT * FROM `news`;";

				
				$num = 0;
					$res = $this->db->query($que);
					foreach ($res->result() as $key ) {
						$num++;
						echo "<tr>";
						echo "<td>$num</td>";
						echo "<td>$key->Topic</td>";
						echo "<td></td>";
						echo "<td></td>";
						echo "<td></td>";
						echo "</tr>";
					}
				?>
			</table>
			<a href=<?php echo base_url("Project-COOP/news/addnews") ?> class="btn btn-raise">Add news</a>
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