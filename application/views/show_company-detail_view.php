<section class="content">
    <div class="container-fluid">
      <?php
      $responsedata = $responsedata[0];
      $contact = explode(",",$responsedata['contract']);

       ?>

        <!-- Basic Example | Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <!-- <h2>BASIC EXAMPLE - HORIZONTAL LAYOUT</h2> -->

                    </div>

                    <div class="body">
                        <div id="wizard_horizontal">
                            <h2>About Organization</h2>
                            <section>

                              <div class="col-md-6">
                              <form name='editform' id="editform" class="" action="<?php echo base_url("project-coop/index.php/company/editcompanyinfo") ?>" method="post">
                                <b>Name</b>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">computer</i> </span>
                                        <div class="form-line">
                                            <input class="form-control " name="name" id="name" type="text" value=<?php echo $responsedata['company_name']; ?> disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <b>Address</b>
                                <div class="form-group ">
                                   <input class="form-control " type="text" name="address" value= <?php echo $responsedata['address']; ?> disabled>

                                  </div>
                                  <p><b>Sub-District : </b>  <input class="form-control " name="subdistrict" type="text" value=<?php echo $responsedata['Sub_district']; ?> disabled></p>
                                  <p><b>District : </b>  <input class="form-control " name="District" type="text" value=<?php echo $responsedata['District']; ?> disabled></p>
                                  <p><b>Provice : </b>  <input class="form-control " name="Provice" type="text" value=<?php echo $responsedata['provice']; ?> disabled></p>
                                  <p><b>Tel : </b><input class="form-control " type="text" name="Tel" value=<?php echo $responsedata['Tel']; ?> disabled>
                                   </p>
                                  <p><b>Email : </b><input class="form-control " type="text" name="email" value=<?php echo $contact[1]; ?> disabled> </p>
                                  <p><b>Post code : </b><input class="form-control " type="text" name="postcode" value=<?php echo $responsedata['postcode']; ?> disabled> </p>
                                  <p><b>Contract : </b><br>Name :<input class="form-control " type="text" name = "contract_name" value=<?php echo $responsedata['company_contract_name']; ?> disabled>
                                   Surname : <input class="form-control " type="text" name = "contract_sname" value=<?php echo $responsedata['company_contract_sname']; ?> disabled>
                                   Position : <input class="form-control " type="text" name = "contacter_position" value=<?php echo $responsedata['contacter_position']; ?> disabled>
                                    <input type="hidden" name="Fac" value="<?php echo $_GET['subname_fac']; ?>">
                                  <input type="hidden" name="type" value="<?php echo $_GET['type_major']; ?>">
                                  <input type="hidden" name="comID" value="<?php echo $_GET['company_viewid']; ?>">
                                   </form>
                                  <div align = 'right' > <button id="editbtn" class="btn btn-raised btn-primary waves-effect" onclick="showprop()" >Edit</button> </div>

                                </div>


                                  <table class="table">
                                      <thead>
                                      <tr>
                                        <td>NO.</td>
                                        <td>Position</td>
                                        <td>view/edit</td>

                                        <td>Delete</td>
                                        <td><div align = 'right' ><a href="<?php echo(base_url('Project-COOP/index.php/company/addPos?comID='.$responsedata['company_id'].'&subname_fac='.$_GET['subname_fac'].'&type_major='.$_GET['type_major']))?>"><i class="material-icons">add_to_queue</i></a></div</td>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                        $sql = "SELECT * from company,company_position where company.company_id = company_position.company_id AND company.company_id = ".$responsedata['company_id'];

                                        $res = $this->db->query($sql);
                                        $num = 0;
                                        foreach ($res->result() as $key) {
                                            $num++;
                                            echo "<tr>";
                                            echo "<td>$num</td>";
                                            echo "<td>$key->Position_name</td>";
                                            echo '<td><a href="'.base_url('Project-COOP/fun_sidebar_admin/viewPostion?posID='.$key->Position_id).'"><i class="material-icons">description</i></a></td>'; ?>

                                            <td><a href= <?php echo base_url("Project-COOP/index.php/company/delPosition?posID=".$key->Position_id."&company_viewid=".$_GET['company_viewid']."&subname_fac=".$_GET['subname_fac']."&type_major=".$_GET['type_major']); ?> ><img src = <?php echo base_url("Project-COOP/assets/images/trash.png");?> height='25'></a></td>

                                            <?php
                                            echo "<td></td>";
                                            echo "</tr>";
                                        }
                                      ?>
                            </tbody>
                          </table>
                          </section>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </section>


<script type="text/javascript">

  let edit = false
  let inp = document.getElementsByTagName('input')


  function showprop() {
      //alert("hello");
    if (edit == false) {
      // let name =  document.getElementById('name').disabled
       //alert(edit)
       document.getElementById('editbtn').innerHTML = 'Save'

      for (var i = 0; i < inp.length; i++) {
        inp[i].disabled = false
      }

       edit = true
    }
    else if (edit==true) {
       document.getElementById('editbtn').innerHTML = 'Edit'
       document.getElementById('editform').submit()
       //alert(edit)
      // edit = false

    }


  }
</script>
