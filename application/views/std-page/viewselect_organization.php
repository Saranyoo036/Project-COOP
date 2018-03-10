<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>COOP0202-1</h2>
			<ul class="breadcrumb">

			</ul>
		</div>


                  <div class="container">
        <div class="row">
            <div class = "col-md-1">
                <i class="fa fa-search fa-1x" id = "fa-search-organization"></i>
            </div>
            <div class="col-md-2 col-md-offset-4">
            <a href="http://webhost.phuket.psu.ac.th/itid/internship/public/student/addcoop0202temp?t=1" class="btn btn-primary btn-block">Add</a>
          	</div>
        </div><!-- .row -->
        <br>
        <div class="row" >
            <div class="table">
                <div class="col-md-12">
                    <div class="panel panel-default">

                      <div class="table-responsive">
												<table id="example" border = "0" style="width:100%">
													<thead>
													<tr>
														<td>NO.</td>
														<th>Name</th>
														<th>Subsidiary</th>
														<th>Province</th>
														<th>Contact</th>
													</tr>
												</thead>
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

														 ?>

														<td>
															<div class="row clearfix js-sweetalert">

														<?php echo "</tr>";
													}
												?>
											</table>
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
