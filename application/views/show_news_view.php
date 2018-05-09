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
						<td><a href=<?php echo base_url("Project-COOP/news/editnewsform/$key->new_id") ?> class="btn btn-raised g-bg-blue waves-effect">edit</a></td>
						<?php echo " <td><a href='#' class='btn btn-raised g-bg-blue waves-effect' onclick='deletenews($key->new_id)'>delete</a></td>";
						echo '</tr>';
					}
				?>
			</table>
			<a href=<?php echo base_url("Project-COOP/news/toaddform/").$result[0]['Fac_ID']; ?> class="btn  btn-raised btn-info waves-effect">Add news</a>
			</ul>
		</div>

		</div>

</section>
<script type="text/javascript">

function deletenews(newsid) {
	var result = confirm("Want to delete?");
if (result) {
	jQuery.ajax({
						url: "<?php echo base_url("Project-COOP/news/deletenews/")?>"+newsid,
						type: 'GET'
					}).done(function(){
						alert('ลบข่าวนี้เสร็จสิ้น')
					});
}
}

var teacher =[];
var table;
$(document).ready(function() {
	table = $('#example').DataTable({

	});
});

</script>
