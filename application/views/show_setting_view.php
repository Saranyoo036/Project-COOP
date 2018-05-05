<section class="content home">



	<!--DateTime Picker -->
          <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12">
                 <div class="card">
                     <div class="header">
                         <h2 class="card-inside-title"> Time Setting  </h2>
                     </div>
                     <?php
                    
                                      $request=null;
                                      $choosing=null; 
                                      $rechoosrepair=null; 
                                          foreach ($data as $key ) {
                                            if($key['status_id']==1){
                                              $request = $key;
                                            }else if($key['status_id']==2){
                                              $choosing =$key;
                                            }else if($key['status_id']==5){
                                              $rechoosrepair = $key ; 
                                            }
                                          }


                      ?>


                     <div class="body">
                       <form class="" name="settimeform" id="settimeform" action=<?php echo base_url("Project-COOP/index.php/time_setting/updatetime") ?> method="post">
                        <div class="row clearfix">

                          <?php
                              if($request==null){?>
                                 <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><h2 class="card-inside-title">Request</h2> 
                                      <div class="form-line">
                                        FROM
                                        <input type="text" id='requestfrom' name="requestfrom" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                      </div>
                                    </div>
                                  </div>
                                <div class="col-sm-12 col-md-6" >
                                  <div class="form-group">
                                    <div class="form-line">
                                      TO
                                      <input type="text" id='requestto' name="requestto" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                    </div>
                                  </div>
                                </div>
                          <?php }
                          else{ ?>
                              <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><h2 class="card-inside-title">Request</h2> 
                                      <div class="form-line">
                                        FROM
                                        <input type="text" id='requestfrom' name="requestfrom" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $request['start_date'];?>'>
                                      </div>
                                    </div>
                                  </div>
                                <div class="col-sm-12 col-md-6" >
                                  <div class="form-group">
                                    <div class="form-line">
                                      TO
                                      <input type="text" id='requestto' name="requestto" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $request['end_date'];?>'>
                                    </div>
                                  </div>
                                </div>
                                <?php } ?>


                             <?php
                              if($choosing==null){ ?>
                                 <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><h2 class="card-inside-title">Choosing</h2> 
                                      <div class="form-line">
                                        FROM
                                         <input type="text" id='choosingfrom' name="choosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                      </div>
                                    </div>
                                  </div>
                                <div class="col-sm-12 col-md-6" >
                                  <div class="form-group">
                                    <div class="form-line">
                                      TO
                                     <input type="text" id='choosingto' name="choosingto" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                    </div>
                                  </div>
                                </div>
                          <?php }
                          else{ ?>
                              <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><h2 class="card-inside-title">Choosing</h2> 
                                      <div class="form-line">
                                        FROM
                                        <input type="text" id='requestfrom' name="choosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $choosing['start_date'];?>'>
                                      </div>
                                    </div>
                                  </div>
                                <div class="col-sm-12 col-md-6" >
                                  <div class="form-group">
                                    <div class="form-line">
                                      TO
                                      <input type="text" id='requestto' name="choosingto" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $choosing['end_date'];?>'>
                                    </div>
                                  </div>
                                </div>
                                <?php } ?>

                            <?php
                              if($rechoosrepair==null){?>
                                 <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><h2 class="card-inside-title">Rechoosing and Repair</h2> 
                                      <div class="form-line">
                                        FROM
                                          <input type="text" id='requestfrom' name="rechoosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                      </div>
                                    </div>
                                  </div>
                                <div class="col-sm-12 col-md-6" >
                                  <div class="form-group">
                                    <div class="form-line">
                                      TO
                                      <input type="text" id='requestto' name="rechoosingto" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                    </div>
                                  </div>
                                </div>
                          <?php }
                          else{ ?>
                              <div class="col-sm-12 col-md-6">
                                    <div class="form-group"><h2 class="card-inside-title">Rechoosing and Repair</h2> 
                                      <div class="form-line">
                                        FROM
                                        <input type="text" id='requestfrom' name="rechoosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $rechoosrepair['start_date'];?>'>
                                      </div>
                                    </div>
                                  </div>
                                <div class="col-sm-12 col-md-6" >
                                  <div class="form-group">
                                    <div class="form-line">
                                      TO
                                      <input type="text" id='requestto' name="rechoosingto" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $rechoosrepair['end_date'];?>'>
                                    </div>
                                  </div>
                                </div>
                                <?php } ?>

                         <input type="hidden" name="fac" value=<?php echo $_GET['subname_Fac']; ?>>
                         <input type="hidden" name="type" value=<?php echo $_GET['type_major']; ?>>
                         
                         <table align="right">
                           <tr>
                             <td>
                              <a href="#" class="btn btn-raised btn-primary waves-effect" onclick="document.getElementById('settimeform').submit()">save</a></td>
                           </tr>
                         </table>
                         
                         </form>
                     </div>
                 </div>
             </div>
         </div> 
         <!--#END# DateTime Picker -->


</section>
