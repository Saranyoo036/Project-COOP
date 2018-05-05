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
                              <div class="col-md-6"> <b>Name</b>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">computer</i> </span>
                                        <div class="form-line">
                                            <input class="form-control " type="text" value=<?php echo $responsedata['company_name']; ?> disabled>
                                        </div>
                                    </div>
                                </div>
                                <b>Address</b>
                                <div class="form-group ">
                                  <?php echo $responsedata['address']; ?>
                                  </div>
                                  <p><b>Provice : </b> <?php echo $responsedata['provice']; ?></p>
                                  <p><b>Tel : </b> <?php echo $responsedata['Tel']; ?></p>
                                  <p><b>Email : </b> <?php echo $contact[1]; ?></p>
                                  <table class="table">
                                      <thead>
                                      <tr>
                                        <td>NO.</td>
                                        <td>Position</td>
                                        <td>view</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
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
                                            echo "<td></td>";
                                            echo "<td></td>";
                                            echo "<td></td>";
                                            echo "</tr>";
                                        }
                                      ?>
                            </tbody>
                          </section>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>




















