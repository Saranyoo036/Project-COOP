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
				if (isset($data['nameFac'])) {
					$queryfacid = "SELECT Fac_ID FROM faculty WHERE NameFac_sub = '".$data['nameFac']."'";
					$result = $this->db->query($queryfacid);
					$result = $result->result_array();
					$que = " SELECT * FROM `news` WHERE Fac_ID = ".$result[0]['Fac_ID'];
				}
				else{
					$que = " SELECT * FROM `news` WHERE Fac_ID = 3 ";
				}

				$num = 0;
					$res = $this->db->query($que);
					foreach ($res->result() as $key ) {
						$num++;
						echo "<tr>";
						 echo "<td>$num</td>";
 						echo "<td>$key->Topic</td>"; ?>
 						<td><a href="#" class="btn btn-raised g-bg-blue waves-effect">view <?php echo $key->new_id; ?></a></td>
						<td><a href=<?php echo base_url("Project-COOP/news/editnewsform/$key->new_id") ?> class="btn btn-raised g-bg-blue waves-effect">edit</a></td>
						<td><a href="#" class="btn btn-raised g-bg-blue waves-effect">delete</a></td>
						</tr>
				<?php	}
				?>
			</table>
			<a href=<?php echo base_url("Project-COOP/news/toaddform/").$result[0]['Fac_ID']; ?> class="btn  btn-raised btn-info waves-effect">Add news</a>
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
