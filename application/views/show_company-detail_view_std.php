<section class="content">
  <?php
  $responsedata = $responsedata[0];
  $contact = explode(",",$responsedata['contract']);
  $address = explode(" ",$responsedata['address']);
  //print_r($contact);

   ?>

    <div class="container-fluid">
      <form name='editform' id="editform" class="" action="<?php echo base_url("project-coop/index.php/company/editcompanyinfo") ?>" method="post">
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
                        <h2 class="card-inside-title">Company information</h2>
                          <div class="form-group form-float form-group-lg">
                              <div class="form-line">
                                  <input id="name" name="name" type="text" class="form-control" placeholder="ชื่อบริษัท" value= <?php echo $responsedata['company_name'] ?> placeholder="ชื่อบริษัท" disabled />

                              </div>
                          </div>
                          <h2 class="card-inside-title">Address</h2>
                          <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class=" form-float form-group">
                                    <div class="form-line">
                                        <input name="num" type="text" class="form-control" placeholder="เลขที่อยู่" value=<?php echo $address[0]; ?>  disabled />

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-float form-group ">
                                    <div class="form-line">
                                        <input name="street" type="text" class="form-control" placeholder="ถนน/ตรอก/ซอย" value=<?php echo $address[1]; ?> disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-float form-group">
                                    <div class="form-line">
                                        <input name="tumbol" type="text" class="form-control"  placeholder="แขวง/ตำบล" value= <?php echo $address[2]; ?> disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-float form-group">
                                    <div class="form-line">
                                        <input name="aumpure" type="text" class="form-control" placeholder="เขต/อำเภอ" value= <?php echo $address[3]; ?> disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-float form-group">
                                    <div class="form-line">
                                        <input name="district" type="text" class="form-control" placeholder="จังหวัด" value=<?php echo $address[4]; ?> disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-float form-group">
                                    <div class="form-line">
                                        <input name="postcode" type="text" class="form-control" placeholder="รหัสไปรษณีย์" value=<?php echo $address[5]; ?> disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-float form-group">
                                    <div class="form-line">
                                        <input name="tel" type="text" class="form-control" placeholder="หมายเลขโทรศัพท์" value=<?php echo $responsedata['Tel']; ?> disabled />

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-float form-group">
                                  <div class="form-line">
                                      <input name="fax" type="text" class="form-control" placeholder="หมายเลขโทรสาร(แฟกซ์)" value=<?php echo $contact[0]; ?> disabled />

                                  </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-float form-group">
                                  <div class="form-line">
                                      <input name="mail" type="text" class="form-control" placeholder="ที่อยู่อีเมลล์" value=<?php echo $contact[1] ?> disabled />

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
                                                    <textarea name="about" rows="4" class="form-control no-resize" placeholder="รายละเอียดเกี่ยวกับบริษัท" disabled> <?php echo $responsedata['Note']; ?> </textarea>
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
                            <input name="group4" type="radio" id="radio_7" value="COOP" class="radio-col-red" checked disabled>
                            <label for="radio_7">COOP</label>
                            <input name="group4" type="radio" value="Internship" id="radio_8" class="radio-col-green" disabled>
                            <label for="radio_8">Internship</label>

                        </div>
                </div>
            </div>
        </div>
        </form>
      </div>
      <table align="center">
        <tr>
          <td>
            
            <!-- <input type="hidden" name="companytype" value=<?php echo $_GET['type_major']; ?>> -->
            <!-- <a href="#" class="btn btn-raised btn-primary waves-effect"></a> -->
            <button type="button" name="button" class="btn btn-raised btn-primary waves-effect" onclick="window.history.back()"> Back</button>
            <button id="editbtn" class="btn btn-raised btn-primary waves-effect" type="submit" name="submit" onclick="showprop()" >select company </button>
          </td>
        </tr>
      </table>
</section>

<script type="text/javascript">

  let edit = false
  let inp = document.getElementsByTagName('INPUT')
  let txt = document.getElementsByTagName('TEXTAREA')

  function showprop() {
    if (edit == false) {
      let name =  document.getElementById('name').disabled
      //alert(edit)
      document.getElementById('editbtn').innerHTML = 'Save'

      for (var i = 0; i < inp.length; i++) {
        inp[i].disabled = false
      }
      txt[0].disabled = false
      edit = true
    }
    else if (edit==true) {
      document.getElementById('editbtn').innerHTML = 'Edit company'
      document.getElementById('editform').submit()
      //alert(inp[1].name)
      edit = false

    }


  }
</script>
