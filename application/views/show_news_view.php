<!-- student function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>NEWS <?php echo $nameMaj; echo $type; ?></h2>
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
				$que = " SELECT * FROM `major`,`major_news`,`news`
						WHERE major.Major_ID = major_news.Major_ID
						AND major_news.new_id = news.new_id
						AND major.NameMajor_sub = '$nameMaj '
						AND major_news.news_type = '$type';
				";


				$num = 0;
					$res = $this->db->query($que);
					foreach ($res->result() as $key ) {
						$num++;
						echo "<tr>";
						echo "$num";
						echo "<td>$key->topic_news</td>";
						echo "<td></td>";
						echo "<td></td>";
						echo "<td></td>";
						echo "</tr>";
					}
				?>
			</table>
			<a href=<?php echo base_url("Project-COOP/news/toaddform"); ?> class="btn  btn-raised btn-info waves-effect">Add news</a>
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
