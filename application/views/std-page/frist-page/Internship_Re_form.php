<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Internship Request form</h2>
			<ul class="breadcrumb">

			</ul>
		</div>


<div class="row clearfix">
		<div class="col-md-6 col-lg-12">

                <div class="card">
                    <div class="header">
                        <h2> Internship Request form </h2>
                    </div>
										<form class="" id="sendrequestform" action=<?php echo base_url("Project-COOP/FristPageSTD/FristPageSTD/sendrequest"); ?> method="post">


                    <div class="body">


                      <li>Student ID 5730213036</li>

                       <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name='tel'>
                                        <label class="form-label">Telephone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <div class="form-line">
                                        <input type="text" name='mail' class="form-control" placeholder="Email" value=<?php echo $data['mail'] ?>>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <center>

													<input type="hidden" name="authid" value=<?php echo $_GET['authid']; ?>>
													<input type="hidden" name="type" value=<?php echo $_GET['type']; ?>>
                          <a href='#' onclick="document.getElementById('sendrequestform').submit()" class="btn btn-raised btn-success waves-effect" >SEND</a>


                        </center>

                    </div>
										</form>

                </div>
    </div>
</div>
