<!-- main content -->
<section class="content home">
    <form action="<?php echo base_url("/project-coop/index.php/fun_sidebar_admin/addmaj") ?>" method="post">
	<div class="container-fluid">
		<div class="block-header">
			<h2>หน้าแรก</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Add</a></li>			
				<li class="breadcrumb-item active">Add Major</li>
			</ul>
		</div>
		<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Add Major  </h2>
                        
                        </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12 col-md-12">
                                <select class="form-control show-tick" name="FacSelect">
                                    <?php 
                                        $sql = "SELECT * FROM faculty;";
                                        $query = $this->db->query($sql);
                                        foreach ($query->result() as $key) {
                                            ?><option value="<?php echo $key->Fac_ID; ?>"><?php echo $key->Faculty_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="majname_thai">
                                        <label class="form-label">ชื่อสาขา (ภาษาไทย) </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="majname_eng">
                                        <label class="form-label">ชื่อสาขา (ภาษาอังกฤษ) </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="majname_sub">
                                        <label class="form-label">อักษรย่อประจำสาขาวิชา (ภาษาอังกฤษ) </label>
                                    </div>
                                </div>
                            </div>

                            <div class="button-demo">
		                            
		                        <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Add Major">
		                            
		                    </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Select --> 

		</div>
	</div>
</section>