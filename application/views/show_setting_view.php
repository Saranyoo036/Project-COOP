<section class="content home">

<?php
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';

$date = '';
//print_r($data);
if ($data == Array ( )) {
  $date = 'false';
}
else {
  //print_r($data);
  $date = 'true';
}

?>

	<!--DateTime Picker -->
         <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12">
                 <div class="card">
                     <div class="header">
                         <h2 class="card-inside-title"> Time Setting  </h2>
                     </div>
                     <div class="body">
                       <form class="" name="settimeform" id="settimeform" action=<?php echo base_url("Project-COOP/index.php/time_setting/updatetime") ?> method="post">
                        <h2 class="card-inside-title">Status</h2>
                        <div class="switch">
                                <label>Inactive
                                    <input type="checkbox" name="status_chk" <?php if($data[0]['status']=="active"){echo "checked";}?> >
                                    <span class="lever"></span>Active</label>
                            </div>
                         <div class="row clearfix">
                             <div class="col-sm-12 col-md-6">
                                 <div class="form-group"><h2 class="card-inside-title">Request</h2> 
                                     <div class="form-line">
                                      FROM
                                      <?php if ($date =='true') {?>
                                        <input type="text" id='requestfrom' name="requestfrom" class="datepicker form-control" placeholder="Please choose a date..." value=<?php echo $data[0]['start_date_Req']; ?>>
                                    <?php  }
                                    else { ?>
                                      <input type="text" id='requestfrom' name="requestfrom" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                    <?php } ?>
                                     </div>
                                 </div>
                             </div>
														 <div class="col-sm-12 col-md-6" >
																 <div class="form-group">
																		 <div class="form-line">
																				<br><br>TO
                                        <?php if ($date =='true') {?>
                                          <input type="text" id='requestto' name="requestto" class="datepicker form-control" placeholder="Please choose a date..." value=<?php echo $data[0]['end_date_Req']; ?>>
                                      <?php  }
                                      else { ?>
                                        <input type="text" id='requestto' name="requestto" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                      <?php } ?>
																		 </div>
																 </div>
														 </div>
                        </div>
												 <div class="row clearfix">
                             <div class="col-sm-12 col-md-6">
                              <h2 class="card-inside-title">Choosing</h2> 
                                 <div class="form-group">
                                     <div class="form-line">
                                      FROM
                                      <?php if ($date =='true') {?>
                                        <input type="text" id='choosingfrom' name="choosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value=<?php echo $data[0]['start_date_choosing']; ?>>
                                    <?php  }
                                    else { ?>
                                      <input type="text" id='choosingfrom' name="choosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                    <?php } ?>
                                     </div>
                                 </div>
                             </div>
														 <div class="col-sm-12 col-md-6" >
																 <div class="form-group">
																		 <div class="form-line">
																				<br>TO
                                        <?php if ($date =='true') {?>
                                          <input type="text" id='choosingto' name="choosingto" class="datepicker form-control" placeholder="Please choose a date..." value=<?php echo $data[0]['end_date_choosing']; ?>>
                                      <?php  }
                                      else { ?>
                                        <input type="text" id='choosingto' name="choosingto" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                      <?php } ?>
																		 </div>
																 </div>
														 </div>
                          </div>
                          <div class="row clearfix">
                             <div class="col-sm-12 col-md-6">
                                 <div class="form-group"><h2 class="card-inside-title">Rechoosing and Repair</h2> 
                                     <div class="form-line">
                                      FROM
                                      <?php if ($date =='true') {?>
                                        <input type="text" id='requestfrom' name="rechoosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value=<?php echo $data[0]['start_date_Rechoosing']; ?>>
                                    <?php  }
                                    else { ?>
                                      <input type="text" id='requestfrom' name="rechoosingfrom" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                    <?php } ?>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-12 col-md-6" >
                                 <div class="form-group">
                                     <div class="form-line">
                                        <br><br>TO
                                        <?php if ($date =='true') {?>
                                          <input type="text" id='requestto' name="rechoosingto" class="datepicker form-control" placeholder="Please choose a date..." value=<?php echo $data[0]['end_date_Rechoosing']; ?>>
                                      <?php  }
                                      else { ?>
                                        <input type="text" id='requestto' name="rechoosingto" class="datepicker form-control" placeholder="Please choose a date..." value=''>
                                      <?php } ?>
                                     </div>
                                 </div>
                             </div>
                          </div>
                         <input type="hidden" name="major" value=<?php echo $_GET['subname_major']; ?>>
                         <input type="hidden" name="type" value=<?php echo $_GET['type_major']; ?>>
                         <input type="hidden" id="date" name="date" value=<?php echo $date; ?>>
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
