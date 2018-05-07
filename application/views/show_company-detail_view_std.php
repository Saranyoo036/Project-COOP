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
                    <div class="body">
                       
                            <h2>About Organization</h2>
                            <section>
                              <div class="col-md-6"> <b>Name</b>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">computer</i> </span>
                                        <div class="form-line">
                                            <input class="form-control " type="text" value=<?php echo $responsedata['query'][0]['company_name']; ?> disabled>
                                        </div>
                                    </div>
                                </div>
                                  <p> <b>Address :</b> <?php echo $responsedata['query'][0]['address']; ?></p>
                                  <p> <b>province :</b> <?php echo $responsedata['query'][0]['provice']; ?></p>
                                  <p> <b>Contact Name :</b> <?php echo $responsedata['query'][0]['company_contract_name'].' '. $responsedata['query'][0]['company_contract_sname'];  ?></p>
                                  <p><b>Tel : </b> <?php echo $responsedata['query'][0]['Tel']; ?></p>
                                  <p><b>Email : </b> <?php echo $contact[1]; ?></p>
                                  <!-- <?php echo $responsedata[0]['address']; ?> -->
                            </section>
                            <h2>Job description</h2>
                            <section>
                                    <p> <b>asdasd :</b> <?php echo $responsedata['row']['Position_name']?></p>
                                    <p> <b>Skill :</b> <?php echo $responsedata['row']['Position_skill']?></p>
                                    <p> <b>Position description :</b> <?php echo $responsedata['row']['Position_desc']?></p>
                                    <p> <b>Number of students :</b> <?php echo $responsedata['row']['Position_num']?></p>
                            </section>

                         <form id="selectform" class="" action=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/checkcompany") ?> method="post">
          <input type="hidden" name="companyid" value=<?php echo $responsedata['query'][0]['company_id'] ?>>
          <input type="hidden" name="positionid" value=<?php echo $responsedata['row']['Position_id'] ?>>
          <h2>Relevant Subject</h2>
                            <section>
                                    <p> <b>รหัสวิชา-ชื่อ : </b> <select id="selectSubject">
                                                              <option value=" ">None</option>
                                                                  <?php
                                                                  $query = "SELECT *  FROM subject,student_register WHERE subject.subject_id = student_register.subject_id AND STD_ID = $_SESSION[stdid]";
                                                                  $res  = $this->db->query($query);
                                                                  foreach ($res->result() as $key ) { ?>
                                                                     <option value="<?php echo $key->Grade.'|'.$key->semester.'|'.$key->subject_id;?>"><?php echo $key->subject_id.' '.$key->subject_name_en ;?></option>   
                                                                <?php }
                                                              ?></select></p>
                                                               <input type="hidden" name="subjectcode" id="subjectcode" value="">
                                    <p> <b>ภาคการศึกษาที่เรียน : </b> <input type="text" id="subjectyear" name="subjectyear" required ></p>
                                    <p> <b>เกรดที่ได้ : </b><input type="text"  id="subjectresult" name="subjectresult" required ></p>
                                    <p> <b>ใบประกาศนีย์บัตร-หัวข้อที่อบรม : </b> <input type="text" name="certificate"></p>
                                    <p> <b>ช่วงเวลาอบรม : </b> <input type="text" name="time"></p>
                                    <p> <b>เริ่ม : </b> <input type="date" name="start_cer"></p>
                                    <p> <b>ถึง : </b> <input type="date" name="end_cer"></p>
                            </section>
          <table align='center'>
            <tr>
              <td>
                <a  class="btn  g-bg-blue" onclick="window.history.back()" name="button">back</a>
              </td>
              <td>
                <a class="btn g-bg-blue" name="button" onclick="$('#selectform').submit()">select company</a>
              </td>
            </tr>
          </table>

        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example | Horizontal Layout -->
       
    </div>
</section>
<!-- Jquery Core Js -->

</body>
</html>

<script type="text/javascript">

$("#selectSubject").change(function(){
    var str = $("#selectSubject").val().split("|");
    $("#subjectyear").val(str[1]);
    $("#subjectresult").val(str[0]);
    $("#subjectcode").val(str[2]);
});

  function showprop() {

  }
</script>
