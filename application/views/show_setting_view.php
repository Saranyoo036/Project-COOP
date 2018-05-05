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
                        

                          <?php
                              if($request==null){?>

                              <h2 class="card-inside-title">REQUEST</h2>
                                <div class="row clearfix">
                                   <div class="col-md-12 col-lg-6">
                                      <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            From
                                            </span>
                                        <div class="form-line">
                                          <input type="text" id='requestfrom' name="requestfrom" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="col-md-12 col-lg-6">
                                    <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            To
                                            </span>
                                      <div class="form-line">
                                        <input type="text" id='requestto' name="requestto" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                      </div>
                                    </div>
                                  </div>
                                </div></br></br>

                          <?php }
                          else{ ?>

                          <h2 class="card-inside-title">REQUEST</h2>
                                <div class="row clearfix">
                                   <div class="col-md-12 col-lg-6">
                                      <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            From
                                            </span>
                                        <div class="form-line">
                                          <input type="text" id='requestfrom' name="requestfrom" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $request['start_date'];?>'>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="col-md-12 col-lg-6">
                                    <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            To
                                            </span>
                                      <div class="form-line">
                                        <input type="text" id='requestto' name="requestto" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $request['end_date'];?>'>
                                      </div>
                                    </div>
                                  </div>
                                </div></br></br>

                          <?php } ?>


                             <?php
                              if($choosing==null){ ?>

                                <h2 class="card-inside-title">CHOOSING</h2>
                                <div class="row clearfix">
                                   <div class="col-md-12 col-lg-6">
                                      <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            From
                                            </span>
                                        <div class="form-line">
                                          <input type="text" id='choosingfrom' name="choosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="col-md-12 col-lg-6">
                                    <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            To
                                            </span>
                                      <div class="form-line">
                                        <input type="text" id='choosingto' name="choosingto" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                      </div>
                                    </div>
                                  </div>
                                </div></br></br>
 
                          <?php }
                          else{ ?>

                                <h2 class="card-inside-title">CHOOSING</h2>
                                <div class="row clearfix">
                                   <div class="col-md-12 col-lg-6">
                                      <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            From
                                            </span>
                                        <div class="form-line">
                                          <input type="text" id='requestfrom' name="choosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $choosing['start_date'];?>'>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="col-md-12 col-lg-6">
                                    <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            To
                                            </span>
                                      <div class="form-line">
                                        <input type="text" id='requestto' name="choosingto" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $choosing['end_date'];?>'>
                                      </div>
                                    </div>
                                  </div>
                                </div></br></br>

                            <?php } ?>

                            <?php
                              if($rechoosrepair==null){?>

                              <h2 class="card-inside-title">RECHOOSING AND REPAIR</h2>
                                <div class="row clearfix">
                                   <div class="col-md-12 col-lg-6">
                                      <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            From
                                            </span>
                                        <div class="form-line">
                                          <input type="text" id='requestfrom' name="rechoosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="col-md-12 col-lg-6">
                                    <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            To
                                            </span>
                                      <div class="form-line">
                                        <input type="text" id='requestto' name="rechoosingto" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                      </div>
                                    </div>
                                  </div>
                                </div></br>
                          <?php }
                          else{ ?>

                          <h2 class="card-inside-title">RECHOOSING AND REPAIR</h2>
                                <div class="row clearfix">
                                   <div class="col-md-12 col-lg-6">
                                      <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            From
                                            </span>
                                        <div class="form-line">
                                          <input type="text" id='requestfrom' name="rechoosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $rechoosrepair['start_date'];?>'>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="col-md-12 col-lg-6">
                                    <div class="input-group input-group-lg"> <span class="input-group-addon">
                                            To
                                            </span>
                                      <div class="form-line">
                                        <input type="text" id='requestto' name="rechoosingto" class="datepicker form-control" placeholder="Please choose a date..." value='<?php echo $rechoosrepair['end_date'];?>'>
                                      </div>
                                    </div>
                                  </div>
                                </div></br>
                            <?php } ?>

                         <input type="hidden" name="major" value=<?php echo $_GET['subname_major']; ?>>
                         <input type="hidden" name="type" value=<?php echo $_GET['type_major']; ?>>
                         
                         <table align="left">
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
