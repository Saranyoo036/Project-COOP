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

                    <div class="body">
                        <h2 class="card-inside-title">News Information</h2>
                          <div class="form-group form-float form-group-lg">
                              <div class="form-line">
                                  <input name="name" type="text" class="form-control"/>
                                  <label class="form-label">หัวข้อข่าว</label>
                              </div>
                          </div>

                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <h2 class="card-inside-title">About News </h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea name="about" rows="4" class="form-control no-resize" placeholder="รายละเอียดเกี่ยวกับข่าว"></textarea>
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
              
              <!-- <input type="hidden" name="companytype" value=<?php echo $_GET['type_major']; ?>> -->
              <!-- <a href="#" class="btn btn-raised btn-primary waves-effect"></a> -->
              <input class="btn btn-raised btn-primary waves-effect" type="submit" name="submit" value="Add company">
            </td>
          </tr>
        </table>

      </div>
</section>
