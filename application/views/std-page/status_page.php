<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Status</h2>
			<ul class="breadcrumb">

			</ul>
		</div>
<!-- <?php print_r($mystatus[2]);
 ?> -->

                  <div class="alert alert-info" role="alert">
            <strong>สถานะ <?php echo $mystatus[0]['status'] ?> </strong>
            : นักศึกษากรอกข้อมูลส่วนตัว และเลือกสถานประกอบการ
        </div>

                <div class="">
            <div class="panel-heading">
                <h3>ข้อมูลนักศึกษา (Student Information)</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2">
                           <div class="info-icons">
                                <center><i class="fa fa-user fa-5x"></i></center>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-hover table-bordered  table-striped">
                                <thead>
                                    <tr>
                                        <th>รหัสนักศึกษา</th>
                                        <th>ชื่อ</th>
                                        <th>คณะ</th>
                                        <th>สาขา</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $mystatus[0]['STD_ID'] ?></td>
                                        <td><?php echo $mystatus[0]['std_name'].' '.$mystatus[0]['std_sname'] ?></td>
                                        <td><?php echo $mystatus[0]['faculty'] ?></td>
                                        <td><?php echo $mystatus[0]['major'] ?></td>
                                        <td><?php echo $mystatus[0]['status'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">


				<?php
				if ($_SESSION['std_status'] == "Choosing"|| $_SESSION['std_status'] == "choosing") {

					if ($_SESSION['std_type']=='COOP' ||$_SESSION['std_type']=='coop') { ?>
						<div class="col-md-12">

								<table class="table table-hover table-bordered  table-striped">
						<tbody>
							<tr>
									<td><h5>COOP0103</h5></td>
									<?php if ($mystatus[1] == Array()) { ?>
										<td> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/cooppage_form"); ?>  class="btn btn-raised g-bg-blue waves-effect"> Add</a> </td>
										<td><a href="#" class="btn btn-raised g-bg-blue waves-effect" >Edit</a> </td>
										<td><a href="#" class="btn">view</a></td>

									<?php }
									else{ ?>
										<td> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/cooppage_form"); ?> class="btn btn-raised g-bg-blue waves-effect"> Sent</a> </td>
										<td> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/edit103form") ?> class="btn btn-raised g-bg-blue waves-effect" >Edit your 103 form</a> </td>
										<td><a  href=<?php echo base_url("Project-COOP/STDPage/cooppageform/view/").$_SESSION['stdid']; ?>  class="btn btn-raised g-bg-blue waves-effect">view</a></td>

									<?php } ?>

							</tr>
							</tbody>
							</table>
						<div class="row clearfix">
													<div class="col-md-6">

													<table class="table table-hover table-bordered  table-striped">

															<tbody>
																	<tr>
																		<?php if ($mystatus[2]==Array()) { ?>
																			<td><h5>COOP0202-1</h5></td>
																			<td><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/viewselect_organization"); ?>  class="btn btn-raised g-bg-blue waves-effect"> add</a> </td>
																			<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
																			<td><a href="#" class="btn btn-raised g-bg-blue waves-effect">view</a></td>
																		<?php }
																		else{ ?>
																			<td><h5>COOP0202-1</h5></td>
																			<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect"> sent</a> </td>
																			<td><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/viewselect_organization"); ?>  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
																			<td><a target="_blank" href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][0]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

																		<?php }
																		 ?>

																	</tr>
															</tbody>
													</table>

											</div>



											<div class="col-md-6">


													<table class="table table-hover table-bordered  table-striped">

															<tbody>
																	<tr>
																		<?php if ($mystatus[2][1]==Array()) { ?>
																			<td><h5>COOP0202-2</h5></td>
																			<td><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/viewselect_organization"); ?>  class="btn btn-raised g-bg-blue waves-effect"> add</a> </td>
																			<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
																			<td><a href="#" class="btn btn-raised g-bg-blue waves-effect">view</a></td>
																		<?php }
																		else{ ?>
																			<td><h5>COOP0202-2</h5></td>
																			<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect"> sent</a> </td>
																			<td><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/viewselect_organization"); ?>  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
																			<td><a target="_blank" href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][1]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

																		<?php }
																		 ?>

																	</tr>
															</tbody>
													</table>
											</div>
											</div>


					<?php }
					else{ ?>
						<div class="col-md-12">

								<table class="table table-hover table-bordered  table-striped">
						<tbody>
							<tr>
									<td><h5>COOP0103</h5></td>
									<?php if ($mystatus[1] == Array()) { ?>
										<td> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/cooppage_form"); ?>  class="btn btn-raised g-bg-blue waves-effect"> Add</a> </td>
										<td><a type="button" name="button" class="btn btn-raised g-bg-blue waves-effect" >Edit</a> </td>
										<td><button type="button" name="button" class="btn">view</button></td>

									<?php }
									else{ ?>
										<td> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/cooppage_form"); ?> class="btn btn-raised g-bg-blue waves-effect"> Sent</a> </td>
										<td> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/edit103form") ?> class="btn btn-raised g-bg-blue waves-effect" >Edit your 103 form</a> </td>
										<td><a  href=<?php echo base_url("Project-COOP/STDPage/cooppageform/view/").$_SESSION['stdid']; ?>  class="btn btn-raised g-bg-blue waves-effect">view</a></td>

									<?php } ?>

							</tr>
							</tbody>
							</table>
						</div>
						<div class="col-md-12">

								<table class="table table-hover table-bordered  table-striped">

										<tbody>
												<tr>
													<?php if ($mystatus[2]==Array()) { ?>
														<td> <h6>COOP0202-1</h6> </td>
														<td><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/viewselect_organization"); ?>  class="btn btn-raised g-bg-blue waves-effect"> add</a> </td>
														<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
														<td><a href="#" class="btn btn-raised g-bg-blue waves-effect">view</a></td>
													<?php }
													else{ ?>
														<td><h5>COOP0202-1</h5></td>
														<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect"> sent</a> </td>
														<td><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/viewselect_organization"); ?>  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
														<td><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][0]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

													<?php }
													 ?>

												</tr>
										</tbody>
								</table>
						</div>

				<?php	}
			}
			else if ($_SESSION['std_status']=='Approving'||$_SESSION['std_status']=='Waiting'||$_SESSION['std_status']=='Accept') {
				if ($_SESSION['std_type']=='COOP' ||$_SESSION['std_type']=='coop') { ?>
					<div class="col-md-12">

							<table class="table table-hover table-bordered  table-striped">
					<tbody>
						<tr>
								<td><h5>COOP0103</h5></td>
								<?php if ($mystatus[1] == Array()) { ?>
									<td> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/cooppage_form"); ?>  class="btn btn-raised g-bg-blue waves-effect"> Add</a> </td>
									<td><a type="button" name="button" class="btn btn-raised g-bg-blue waves-effect" >Edit</a> </td>
									<td><button type="button" name="button" class="btn">view</button></td>

								<?php }
								else{ ?>
									<td> <a href="#" class="btn btn-raised g-bg-blue waves-effect"> Sent</a> </td>
									<td> <a href="#" class="btn btn-raised g-bg-blue waves-effect" >Edit your 103 form</a> </td>
									<td><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/view/").$_SESSION['stdid']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

								<?php } ?>

						</tr>
						</tbody>
						</table>
					</div>

<div class="row clearfix">
							<div class="col-md-6">

							<table class="table table-hover table-bordered  table-striped">

									<tbody>
											<tr>
												<?php if ($mystatus[2]==Array()) {
													// code...
												}
												else{ ?>
													<td><h5>COOP0202-1</h5></td>
													<td><a href='#'  class="btn btn-raised g-bg-blue waves-effect"> sent</a> </td>
													<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
													<td><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][0]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

												<?php }
												 ?>

											</tr>
									</tbody>
							</table>

					</div>



					<div class="col-md-6">


							<table class="table table-hover table-bordered  table-striped">

									<tbody>
											<tr>
												<?php if ($mystatus[2][1]==Array()) {
													// code...
												}
												else{ ?>
													<td><h5>COOP0202-2</h5></td>
													<td><a href='#'  class="btn btn-raised g-bg-blue waves-effect"> sent</a> </td>
													<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
													<td><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][1]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

												<?php }
												 ?>
											</tr>
									</tbody>
							</table>
					</div>
					</div>


			<?php	}
				else{ ?>
					<div class="col-md-12">

							<table class="table table-hover table-bordered  table-striped">
					<tbody>
						<tr>
								<td><h5>COOP0103</h5></td>
								<?php if ($mystatus[1] == Array()) { ?>
									<td> <a href="#"  class="btn btn-raised g-bg-blue waves-effect"> Add</a> </td>
									<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect" >Edit</a> </td>
									<td><a class="btn btn-raised g-bg-blue waves-effect">view</a></td>

								<?php }
								else{ ?>
									<td> <a href="#" class="btn btn-raised g-bg-blue waves-effect"> sent</a> </td>
									<td> <a href="#" class="btn btn-raised g-bg-blue waves-effect" >Edit your 103 form</a> </td>
									<td> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/view/").$_SESSION['stdid']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

								<?php } ?>

						</tr>
						</tbody>
						</table>
					</div>
					<div class="col-md-12">

							<table class="table table-hover table-bordered  table-striped">

									<tbody>
											<tr>
												<?php if ($mystatus[2]==Array()) {
													// code...
												}
												else{ ?>
													<td><h5>COOP0202-1</h5></td>
													<td><a href='#'  class="btn btn-raised g-bg-blue waves-effect"> sent</a> </td>
													<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
													<td><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][0]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

												<?php }
												 ?>

											</tr>
									</tbody>
							</table>
					</div>

			<?php	}
			}
			else if ($_SESSION['std_status']=='Rechoosing'||$_SESSION['std_status']=='Repair') {
				if ($_SESSION['std_type']=='COOP' ||$_SESSION['std_type']=='coop') { ?>
					<div class="col-md-12">

							<table class="table table-hover table-bordered  table-striped">
					<tbody>
						<tr>
								<td><h5>COOP0103</h5></td>
								<?php if ($mystatus[1] == Array()) { ?>
									<td> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/cooppage_form"); ?>  class="btn btn-raised g-bg-blue waves-effect"> Add</a> </td>
									<td><a  class="btn btn-raised g-bg-blue waves-effect" >Edit</a> </td>
									<td><a  href=<?php echo base_url("Project-COOP/STDPage/cooppageform/view/").$_SESSION['stdid']; ?> class="btn">view</a></td>

								<?php }
								else{ ?>
									<td> <a href="#" class="btn btn-raised g-bg-blue waves-effect"> Sent</a> </td>
									<td> <a href="#" class="btn btn-raised g-bg-blue waves-effect" >Edit your 103 form</a> </td>
									<td><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/view/").$_SESSION['stdid']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

								<?php } ?>

						</tr>
						</tbody>
						</table>
					</div>

<div class="row clearfix">
							<div class="col-md-6">

							<table class="table table-hover table-bordered  table-striped">

									<tbody>
											<tr>
												<?php if ($mystatus[2]==Array()) {
													// code...
												}
												else{ ?>
													<td><h5>COOP0202-1</h5></td>
													<td><a href='#'  class="btn btn-raised g-bg-blue waves-effect"> sent</a> </td>
													<td><a href=""  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
													<td><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][0]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

												<?php }
												 ?>

											</tr>
									</tbody>
							</table>

					</div>



					<div class="col-md-6">


							<table class="table table-hover table-bordered  table-striped">

									<tbody>
											<tr>
												<?php if ($mystatus[2][1]==Array()) {
													// code...
												}
												else{ ?>
													<td><h5>COOP0202-1</h5></td>
													<td><a href='#'  class="btn btn-raised g-bg-blue waves-effect"> sent</a> </td>
													<td><a href="#"  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
													<td><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][1]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></td>

												<?php }
												 ?>

											</tr>
									</tbody>
							</table>
					</div>
					</div>


			<?php	}
				else{ ?>
					<div class="col-md-12">

							<table class="table table-hover table-bordered  table-striped">
					<tbody>
						<tr>
								<td><h5>COOP0103</h5></td>
								<?php if ($mystatus[1] == Array()) { ?>
									<td> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/cooppage_form"); ?>  class="btn btn-raised g-bg-blue waves-effect"> Add</a> </td>
									<td><a  class="btn btn-raised g-bg-blue waves-effect" >Edit</a> </td>
									<td><a  class="btn btn-raised g-bg-blue waves-effect" >view</a></td>

								<?php }
								else{ ?>
									<td> <a href="#" class="btn btn-raised g-bg-blue waves-effect"> Sent</a> </td>
									<td> <a href="#" class="btn btn-raised g-bg-blue waves-effect" >Edit your 103 form</a> </td>
									<td> <a href="" class="btn btn-raised g-bg-blue waves-effect">view</a></td>

								<?php } ?>

						</tr>
						</tbody>
						</table>
					</div>
					<div class="col-md-12">

							<table class="table table-hover table-bordered  table-striped">

									<tbody>
											<tr>
												<?php if ($mystatus[2]==Array()) {
													// code...
												}
												else{ ?>
													<td><h5>COOP0202-1</h5></td>
													<td><a href='#'  class="btn btn-raised g-bg-blue waves-effect"> sent</a> </td>
													<td><a href=""  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a> </td>
													<td><a href="#" class="btn btn-raised g-bg-blue waves-effect">view</a></td>

												<?php }
												 ?>

											</tr>
									</tbody>
							</table>
					</div>

			<?php	}
			}
			else{ ?>
				<div class="alert alert-danger">
					<center>
          <strong>ขออภัย : </strong>
					<a  href="javascript:void(0);" class="alert-link">ขณะนี้ระบบไม่อยู่ในช่วงที่เปิดให้เลือกสถานประกอบการ</a>
					กรุณาเข้าสู่ระบบอีกครั้งเมื่อถึงเวลา
				</center>
        </div>
			<?php }

			 ?>

        </div>
