<!-- Company function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Company<?php echo $nameFac; ?></h2>
			<ul class="breadcrumb"> <br/>
				<!-- <a href="#" class="btn  btn-raised btn-info waves-effect"> Add company</a> -->
				<table id="example" border = "0" style="width:100%">
					<thead>
					<tr>
						<td>NO.</td>
						<td>Name</td>
						<td>Address</td>
						<td>Provice</td>
						<td>Contract</td>
						<td>Note</td>
						<td>View/Edit</td>
						<td>Delete</td>
					</tr>
				</thead>


				<?php
				$que = "SELECT * FROM `company` ,`faculty`
						WHERE faculty.Fac_ID = company.Fac_ID
						AND faculty.NameFac_sub = '$nameFac'
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
						echo "<td>$key->Note</td>";
						 ?>
						<td>
							 <a href= <?php echo base_url("Project-COOP/index.php/company/viewcompany?company_viewid=".$key->company_id."&subname_fac=$nameFac&type_major=$type") ?> >
								  <img src = <?php echo base_url("Project-COOP/assets/images/view.png");?> height='25'>
								 </a>
					</td>
						<td>
							<div class="row clearfix js-sweetalert">

								
 								<a data-type="confirm"  href="<?php echo base_url("Project-COOP/index.php/company/deletecompany?company_delid=".$key->company_id."&subname_fac=$nameFac&type_major=$type"); ?>"><img src = <?php echo base_url("Project-COOP/assets/images/trash.png");?> height='25'
								onclick="return confirm('Are you sure you want to delete?')"> </a> </td>
 								
							</div>


							

						<?php echo "</tr>";
					}
				?>
			</table>
			<a href= <?php echo base_url("Project-COOP/index.php/company/addcompany?subname_fac=$nameFac&type_major=$type"); ?> class="btn  btn-raised btn-info waves-effect"> Add company</a>
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

function confirmanddel(url) {
	setTimeout(function()
	{
		 window.location = url }
		 , 3800);
		 showConfirmMessage()

	//showConfirmMessage()
}

</script>
