<!-- main content -->
<section class="content home">
	<form action="<?php echo base_url("/project-coop/index.php/fun_sidebar_admin/addfac") ?>" method="post">
	<div class="container-fluid">
		<div class="block-header">
			<h2>หน้าแรก</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Add</a></li>			
				<li class="breadcrumb-item active">Add Faculty</li>
			</ul>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 col-lg-12">
				<div class="card visitors-map">
					<div class="header">
						<h2>ADD Faculty</h2>
					</div>
					<div class="body">
						<h2 class="card-inside-title">เพ่ิมคณะ/ add Faculty</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namefac_thai">
                                        <label class="form-label">ชื่อคณะ (ภาษาไทย)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namefac_eng">
                                        <label class="form-label">ชื่อคณะ (ภาษาอังกฤษ)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namefac_sub">
                                        <label class="form-label">อักษรย่อคณะภาษาอังกฤษ </label>
                                    </div>
                                </div>
                            </div>

                            
		                    <div class="button-demo">
		                            
		                        <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Add Faculty">
		                            
		                    </div>
		                    



                        </div>
					</div>
				</div>
			</div>
		</div>
		
		
		</div>
	</div>
</section>