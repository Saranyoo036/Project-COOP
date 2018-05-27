<section class="content">
    <div class="container-fluid">

        <!-- Basic Example | Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <!-- <h2>BASIC EXAMPLE - HORIZONTAL LAYOUT</h2> -->

                    </div>

                    <div class="body">
                        <div id="wizard_horizontal">
                            <h2>About Postion</h2>
                            <section>

                              <div class="col-md-6">
                              <form name='editform' id="editform" class="" action="<?php echo base_url("project-coop/index.php/company/addPositioninfo") ?>" method="post">
                                <b>Position Name</b>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">computer</i> </span>
                                        <div class="form-line">
                                            <input class="form-control " name="name" id="name" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <b>Skill</b>
                                <div class="form-group ">
                                   <div class="form-line">
                                   <input class="form-control " type="text" name="skill" value="">
                                  </div>
                                  </div>
                                  <p><b>Description : </b> <div class="form-group "><div class="form-line"><input class="form-control " name="desc" type="text" value=""></div></div></p>
                                  <p><b>Number student : </b> <div class="form-group "><div class="form-line"><input class="form-control " type="text" name="num" value=""></div></div></p>
                                  <p><b>Responsibility : </b> <div class="form-group "><div class="form-line"><input class="form-control " type="text" name="responsibility" value=""></div></div></p>
                                  <p><b>candidatereq : </b> <div class="form-group "><div class="form-line"><input class="form-control " type="text" name="candidatereq" value=""></div></div></p>
                                  <input type="hidden" name="comID" value="<?php echo($_GET['comID'])?>">
                                  <input type="hidden" name="subname_fac" value="<?php echo($_GET['subname_fac'])?>">
                                  <input type="hidden" name="type_major" value="<?php echo($_GET['type_major'])?>">
                                  <div align = 'right' > <button id="editbtn" type="submit" class="btn btn-raised btn-primary waves-effect">ADD</button> </div>

                                </div>
                            </form>


                          </section>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </section>
