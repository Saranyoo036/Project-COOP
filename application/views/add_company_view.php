<section class="content">

    <div class="container-fluid">
      <form class="" action="<?php echo base_url("/project-coop/index.php/company/insertcompany") ?>" method="post">
        <div class="block-header">
            <h2>Basic Form Elements</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href=<?php echo base_url("project-coop/htdocs/") ?>>Home</a></li>
                <li class="breadcrumb-item active">Add Company Form </li>
            </ul>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Company information</h2>
                          <div class="form-group form-float form-group-lg">
                              <div class="form-line">
                                  <input name="name" type="text" class="form-control"/>
                                  <label class="form-label">ชื่อบริษัท</label>
                              </div>
                          </div>
                          <h2 class="card-inside-title">Address</h2>
                          <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class=" form-float form-group">
                                    <div class="form-line">
                                        <input name="num" type="text" class="form-control"  />
                                        <label class="form-label">เลขที่อยู่</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-float form-group ">
                                    <div class="form-line">
                                        <input name="street" type="text" class="form-control"  />
                                        <label class="form-label">ถนน/ตรอก/ซอย</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-float form-group">
                                    <div class="form-line">
                                        <input name="tumbol" type="text" class="form-control"/>
                                        <label class="form-label">แขวง/ตำบล</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-float form-group">
                                    <div class="form-line">
                                        <input name="aumpure" type="text" class="form-control"/>
                                        <label class="form-label">เขต/อำเภอ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-float form-group">
                                    <div class="form-line">
                                        <input name="district" type="text" class="form-control"  />
                                        <label class="form-label">จังหวัด</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-float form-group">
                                    <div class="form-line">
                                        <input name="postcode" type="text" class="form-control"/>
                                        <label class="form-label">รหัสไปรษณีย์</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-float form-group">
                                    <div class="form-line">
                                        <input name="tel" type="text" class="form-control" />
                                        <label class="form-label">หมายเลขโทรศัพท์</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-float form-group">
                                  <div class="form-line">
                                      <input name="fax" type="text" class="form-control" />
                                      <label class="form-label">หมายเลขโทรสาร(แฟกซ์)</label>
                                  </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-float form-group">
                                  <div class="form-line">
                                      <input name="mail" type="text" class="form-control" />
                                      <label class="form-label">อีเมลล์</label>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <h2 class="card-inside-title">About the company </h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea name="about" rows="4" class="form-control no-resize" placeholder="รายละเอียดเกี่ยวกับบริษัท"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="demo-radio-button">
                      <h2 class="card-inside-title">Type of company </h2>
                            <input name="group4" type="radio" id="radio_7" value="COOP" class="radio-col-red" checked="">
                            <label for="radio_7">COOP</label>
                            <input name="group4" type="radio" value="Internship" id="radio_8" class="radio-col-green">
                            <label for="radio_8">Internship</label>

                        </div>
                </div>
            </div>
        </div>
        <table align="center">
          <tr>
            <td>
              <input type="hidden" name="major" value=<?php echo $_GET['subname_major']; ?>>
              <!-- <input type="hidden" name="companytype" value=<?php echo $_GET['type_major']; ?>> -->
              <!-- <a href="#" class="btn btn-raised btn-primary waves-effect"></a> -->
              <input class="btn btn-raised btn-primary waves-effect" type="submit" name="submit" value="Add company">
            </td>
          </tr>
        </table>

      </div>
</section>
