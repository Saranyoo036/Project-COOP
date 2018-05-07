<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>HOME</h2>
			<ul class="breadcrumb">

			</ul>
		</div>


                <div class="card">
                    <div class="body">
                        <div class="header">
                            <h2>ข้อมูลนักศึกษา (Student Information)</h2>


                            <div class="body">
                                <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr >

                                            <th>รหัสนักศึกษา</th>
                                            <th>ชื่อ</th>
											<th>ประเภท</th>
                                            <th>คณะ</th>
                                            <th>สาขา</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

										<td><?php echo $_GET['id']; ?></td>
										<td><?php echo $_GET['name']; ?></td>
										<td><?php echo $_GET['type']; ?></td>
										<td><?php echo $_GET['fac']; ?></td>
										<td><?php echo $_GET['major']; ?></td>

                                        </tr>

                                    </tbody>
                                </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="body">
                        <div class="header">

                            <table class="table ">
                                    <thead>
                                        <tr >

                                            <th>COOP0103 (ใบสมัครงานสหกิจศึกษาและการฝึกงาน)</th>
																						<th><button type="button" class="btn  btn-raised bg-green waves-effect"
                                                onclick="window.location='<?php echo base_url('/Project-COOP/Teacher_con/view103STD?STD_ID='.$_GET['id']); ?>'">View</button></th>



                                        </tr>
                                    </thead>

                                </table>


                        </div>
                    </div>
                </div>
								<?php
		$q = 'SELECT * FROM `student_company`
						WHERE STD_ID = '.$_GET['id'].'
						AND status_student_company_id = 0 ';
		$re=$this->db->query($q);
		foreach ($re->result() as $key) { ?>
			 <div class="card">
						<div class="body">
								<div class="header">
										<table class="table ">
												<thead>
														<tr >
																<th>COOP0202 (แบบเสนองาน)</th>
																<th><button type="button" class="btn  btn-raised bg-green waves-effect"
																		onclick="window.location='<?php echo base_url('/Project-COOP/Teacher_con/teacherview202?type='.$_GET['type'].'&comID='.$key->company_id.'&posID='.$key->Position_id.'&STD_ID='.$key->STD_ID); ?>';" >View</button></th>
														</tr>
												</thead>
										</table>
								</div>
						</div>
				</div>
		<?php }
?>


                 
