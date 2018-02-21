<!-- student function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>NEWS <?php echo $nameFac; echo $type; ?></h2>
			<ul class="breadcrumb">
				<table border = "1" style="width:100%">
					<tr>
						<td>NO.</td>
						<td>Topics</td>
						<td>view</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>

				
				<?php
				$que = " SELECT * FROM `major`,`faculty`,`major_news`
						WHERE major.Major_ID = major_news.Major_ID
						AND major.Fac_ID = faculty.Fac_ID
						AND faculty.NameFac_sub = '$nameFac '
						AND major_news.Major_news_type = '$type' ;
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
			</ul>
		</div>
	
		
		
		</div>
	
</section>
