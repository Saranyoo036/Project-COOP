<section class="content">
    <div class="container-fluid">
      <?php
      // print_r($responsedata);

        //print_r (explode(",",$responsedata[0]['contract']));
        $contact = explode(",",$responsedata['query'][0]['contract']);
        //echo $responsedata['row']['Postion_id'];

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
                                            <input class="form-control " type="text" value=<?php echo $responsedata['query'][0]['company_name']; ?> disabled>
                                        </div>
                                    </div>
                                </div>
                                <b>Address</b>
                                <div class="form-group ">
                                  <?php echo $responsedata['query'][0]['address']; ?>
                                  </div>
                                  <p><b>Tel : </b> <?php echo $responsedata['query'][0]['Tel']; ?></p>
                                  <p><b>Email : </b> <?php echo $contact[1]; ?></p>
                                  <!-- <?php echo $responsedata[0]['address']; ?> -->
                            </section>
                            <h2>Contact</h2>
                            <section>
                                <div class="col-md-12">
                                  <p> <b>Name :</b> <?php echo $responsedata['query'][0]['company_contract_name'].' '. $responsedata['query'][0]['company_contract_sname'];  ?></p>
                                    <p> <b>Position :</b> <?php echo $responsedata['row']['Position_name']?></p>
                                    <p> <b>Skill :</b> <?php echo $responsedata['row']['Position_skill']?></p>
                                    <p> <b>Position description :</b> <?php echo $responsedata['row']['Position_desc']?></p>

                                </div>
                                <!-- <div class="col-md-6"> <b>Email</b>
                                  <?php echo $responsedata[0]['Tel']; ?>
                                </div> -->
                            </section>
                            <h2>Job description</h2>
                            <section>
                              <div class="col-md-6">
                                <p><b>Job Description</b>
                                </p>

                                <?php echo $responsedata['query'][0]['Note']; ?>

                              </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      
         
          <table align='center'>
            <tr>
              <td>
                <a  class="btn  g-bg-blue" onclick="window.history.back()" name="button">back</a>
              </td>
            </tr>
          </table>

        
    </div>
</section>
<!-- Jquery Core Js -->

</body>
</html>

<script type="text/javascript">

  function showprop() {

  }
</script>


























        


		
