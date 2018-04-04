<!-- main content -->
<section class="content home">
	<form action="<?php echo base_url("/project-coop/index.php/company/insertPosition") ?>" method="post">
	<div class="container-fluid">
		<div class="block-header">
			<h2>หน้าแรก</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Add</a></li>			
				<li class="breadcrumb-item active">Add Job position</li>
			</ul>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 col-lg-12">
				<div class="card visitors-map">
					<div class="header">
						<h2>Add Job position</h2>
					</div>
					<div class="body">

						<div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                        <label class="form-label">Position</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                        <label class="form-label">Skill </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                        <label class="form-label">Coordination</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                        <label class="form-label">Contact</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                        <label class="form-label">Email </label>
                                    </div>
                                </div>
                            </div>
                            
						</div></br>

						<div class="button-demo">
		                            
		                    <button type="button" class="btn  btn-raised btn-success waves-effect">Save Information</button>
		                            
		                </div>
						


								<h2>ชื่อผู้ติดต่อประสานงานกรณีจะต้องทำหนังสือถึง (Coordinator)</h2>
							</div>

							<div class="row clearfix">

	                           
	                            <div class="col-sm-12">
	                                <div class="form-group form-float">
	                                    <div class="form-line">
	                                        <input type="text" class="form-control" name="Position_name">
	                                        <label class="form-label">ตำแหน่งงานที่รับ (Job Position) </label>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-sm-12">
	                                <div class="form-group form-float">
	                                    <div class="form-line">
	                                        <input type="text" class="form-control" name="Position_skill">
	                                        <label class="form-label">ทักษะ (Skill) </label>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-sm-12">
	                                <div class="form-group form-float">
	                                    <div class="form-line">
	                                        <input type="number" class="form-control"  name="Position_num">
	                                        <label class="form-label">จำนวน (Number of students) </label>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-sm-12">
	                                <div class="form-group form-float">
	                                    <div class="form-line">
	                                        <input type="text" class="form-control" name="Position_desc">
	                                        <label class="form-label">ลักษณะงาน (Job Description) </label>
	                                    </div>
	                                </div>
	                            </div>
	                           
	                            

							</div></br>
							
		                    <input type="hidden" name="company_id" value="<?php echo $company_ID; ?>">    
		                    <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Save Information">		                            
		                    

					</div>
				</div>
			</div>
		</div>

		</div>
	</div>
</section>