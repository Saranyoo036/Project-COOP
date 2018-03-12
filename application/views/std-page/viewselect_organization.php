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
														<td>View</td>

													</tr>
												</thead>
												<?php

													$no = 0;
													foreach ($data as $company ) {
														$no++;
														echo "<tr>";
														echo "<td>$no</td>";
														echo "<td>$company->company_name</td>";
														echo "<td>$company->address</td>";
														echo "<td>$company->provice</td>";
														echo "<td>$company->contract $company->Tel</td>";

														 ?>
														 	<td>
							 <a href= <?php echo base_url("Project-COOP/STDPage/viewselectorganization/showview/".$company->company_id) ?> >
								  <img src = <?php echo base_url("Project-COOP/assets/images/view.png");?> height='25'>
								 </a>
					</td>

														
															

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


								</script>