<!-- student function -->
<!-- student function -->
<section class="content home">
  <div class="container-fluid">
    <div class="block-header">
      <h2>student <?php echo $nameMaj; ?></h2>
      <ul class="breadcrumb">
        <table id="example" border = "0" style="width:100%">
          <thead>
          <tr>
            <td>Student ID</td>
            <td>Student Name</td>
            <td>Faculty</td>
            <td>Major</td>
            <td>Status</td>
            <td>COOP 0103</td>
            <?php

            $j =0;
              if($type=="COOP"){
                echo "<td>COOP 0202-01</td>";
                echo "<td>COOP 0202-02</td>";
              }else{
                echo "<td>COOP 0202</td>";
              }
            ?>

            <td>Print</td>
            <td>Delete</td>
          </tr>
          </thead>



        <?php
        $status = array('Choosing','Approving','Printing','Waiting','Rechoosing','Repair','Accept','Cancel');
         $color = array('Choosing'=>'5bc0de','Approving'=>'d1de10','Printing'=>'FF66FF','Waiting'=>'f0ad4e','Rechoosing'=>'a53ce6','Repair'=>'b36623','Accept'=>'5cb85c','Cancel'=>'777777');

        $que = "SELECT * FROM `student`,`major`,`faculty`,`student_status`
            WHERE major.Major_ID = student.major_id
            AND major.Fac_ID = faculty.Fac_ID
            AND student_status.STD_ID = student.STD_ID
            AND major.NameMajor_sub = '$nameMaj'
            AND student.std_type = '$type';";
          $res = $this->db->query($que);
          foreach ($res->result() as $key ) {

            $STD_ID = $key->STD_ID;
            echo '<tr style="background-color: #'.$color[$key->status].'">';
            echo "<td>$STD_ID</td>";
            echo "<td>$key->std_name $key->std_sname </td>";
            echo "<td>$key->Faculty_name</td>";
            echo "<td>$key->Major_name</td>";
            /////status//////
            echo "<td>";
            echo '<input type="hidden" name = "undoOption" id="undoOption" value="'.$key->status.'-'.$STD_ID.'">';
            echo '<select class="status-select">';
            for ($i=0; $i<count($status);$i++) {
              if($status[$i]==$key->status){
                echo '<option selected = "true" value="'.$status[$i].'-'.$STD_ID.'">'.$status[$i].'</option>';
              }else{
                echo '<option value="'.$status[$i].'-'.$STD_ID.'">'.$status[$i].'</option>';
              }
            }
            echo "</select>";
            echo "</td>";
 ////status//////
             ///////form103////
              $sql = "SELECT count(std_form_103_id) as form_103 FROM `student_form_103` WHERE std_form_103_id =$STD_ID";
              $form_103 = 0;
              $re = $this->db->query($sql);
              foreach ($re->result() as $key) {
                $form_103 = $key->form_103;
              }
              if($form_103==0){
            echo '<td><i class="material-icons">close</i></td>';
              }else{
           echo '<td><a  href="'.base_url('Project-COOP/fun_sidebar_admin/view103STD?STD_ID='.$STD_ID).'"><i class="material-icons">description</i></a><a href="'.base_url('Project-COOP/fun_sidebar_admin/edit103STD?STD_ID='.$STD_ID).'"><i class="material-icons">build</i></a></td>';

              }
              ///////form103////////
            //////form202///////
              if($type=="COOP"){
                $sql = "SELECT count(STD_ID) as num_STD from student_company where STD_ID = $STD_ID";
                $num_STD = 0;
                $re =$this->db->query($sql);
                foreach ($re->result() as $key ) {
                  $num_STD=$key->num_STD;
                }
                if($num_STD==0){
            echo '<td><i class="material-icons">close</i></td>';
            echo '<td><i class="material-icons">close</i></td>';
                }else if($num_STD==1){
                  $query = $this->db->query("SELECT student_company.company_id,Position_id,select_print,company.company_name from student_company,company where student_company.company_id = company.company_id
                    AND STD_ID = $STD_ID");
                  $row = $query->result_array();
                  $check = "";
                  

                  if($row[0]['select_print']==1){$check="checked";};
                  echo "<td>
                  <input name='group4' id=".$STD_ID.$j." class='radio-col-deep-purple'  type='radio' ".$check." value=".$row[0]['company_id']." onclick = 'test($STD_ID,this.value,".$row[0]['Position_id'].")'>
                  <label for=".$STD_ID.$j.">".$row[0]["company_name"]."</label>

                  </td>";
                  echo '<td><i class="material-icons">close</i></td>';
                }else if($num_STD==2){
                  $query = $this->db->query("SELECT student_company.company_id,Position_id,select_print,company.company_name from student_company,company 
                    where student_company.company_id = company.company_id
                    AND STD_ID = $STD_ID");
                  $row = $query->result_array();
                  $check1 = "";
                  $check2 = "";
                  if($row[0]['select_print']==1){$check1="checked";};
                  if($row[1]['select_print']==1){$check2="checked";};
                  echo "<td>
                  <input name='group4' id=".$STD_ID.$j." class='radio-col-deep-purple' type='radio' ".$check1." value=".$row[0]['company_id']." onclick = 'test($STD_ID,this.value,".$row[0]['Position_id'].")'>
                  <label for=".$STD_ID.$j.">".$row[0]["company_name"]."</label>

                  </td>";
            //echo '<td><i class="material-icons">check</i></td>';
                  echo "<td><input name='group4' id=".$STD_ID.($j+1)." class='radio-col-deep-purple' ".$check2." type='radio'value=".$row[1]['company_id']." onclick = 'test($STD_ID,this.value,".$row[1]['Position_id'].")'>
                  <label for=".$STD_ID.($j+1).">".$row[1]["company_name"]."</label></td>";

                 } ?>
                  <td><div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">print</i><span class="caret"></span> </button>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href=<?php echo base_url("Project-COOP/coop0103PDF/view0103form/$STD_ID") ?>>COOP 0103</a></li>
                                        <li><a target="_blank" href=<?php echo base_url("Project-COOP/coop0104PDF/view0104/$STD_ID") ?>>COOP 0104</a></li>
                                        <li><a id ="0202" target="_blank" href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/46/21") ?>>COOP 0202</a></li>
                                        <!-- <li><a target="_blank" href=<?php echo base_url("Project-COOP/coop0102PDF/test") ?>><?php echo $STD_ID ?></a></li> -->
                                    </ul>
                                </div>
            </td>

              <?php }else if($type=="internship"){
                $sql = "SELECT count(STD_ID) as num_STD from student_company where STD_ID = $STD_ID";
                $num_STD = 0;
                $re =$this->db->query($sql);
                foreach ($re->result() as $key ) {
                   $num_STD=$key->num_STD;
                }
                if($num_STD==0){
            echo '<td><i class="material-icons">close</i></td>';
                }else if($num_STD==1){
                  $query = $this->db->query("SELECT company_id,Position_id from student_company where STD_ID = $STD_ID");
                  $row = $query->result_array();
                  echo "<td>
                  <input name='group4' id=".$STD_ID.$j." class='radio-col-deep-purple' type='radio' value=".$row[0]['company_id']." onclick = 'test($STD_ID,this.value,".$row[0]['Position_id'].")'>
                  <label for=".$STD_ID.$j.">ใช้ข้อมูลของสถานประกอบการนี้ในแบบฟอร์ม</label>

                  </td>";
            //echo '<td><i class="material-icons">check</i></td>';
                } ?>
                <td><div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">print</i><span class="caret"></span> </button>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href=<?php echo base_url("Project-COOP/coop0103PDF/view0103form/$STD_ID") ?>>COOP 0103</a></li>
                                        <li><a target="_blank" href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/46/21") ?>>COOP 0202</a></li>
                                        <!-- <li><a target="_blank" href=<?php echo base_url("Project-COOP/coop0102PDF/test") ?>><?php echo $STD_ID ?></a></li> -->
                                    </ul>
                                </div>
            </td>

              <?php }

              //$major = $_GET['subname_major'];
           ?>

 <td><a href="<?php echo base_url('Project-COOP/fun_sidebar_admin/deleteSTD?STD_ID='.$STD_ID.'&major='.$nameMaj.'&type='.$type); ?>" onclick="return confirm('Are you sure you want to delete?')"><i class="material-icons">delete</i></a></td>
            <?php
            echo "</tr>";
            $j++;
          }
        ?>
      </table>
      </ul>
      <?php if ($_GET['type_major']== 'COOP') { ?>
        <a href=<?php echo base_url("Project-COOP/matching/matching/").$nameMaj; ?> class="btn btn-raised btn-primary waves-effect">matching</a>
    <?php  } ?>

    </div>
     </div>

</section>

<script type="text/javascript">

var table;


function test(stdid,comid,posid) {
  jQuery.ajax({
            url: "<?php echo base_url("Project-COOP/coop0103PDF/setcompanyinform/")?>"+stdid+'/'+comid+'/'+posid,
            type: 'GET'
          }).done(function(){
            alert('เซ็ทข้อมูลสำหรับแบบฟอร์ม coop0103 เสร็จสิ้น')
            document.getElementById('0202').href = "<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/")?>"+comid+'/'+posid

          });
}

$(document).ready(function() {
  table = $('#example').DataTable({

  });

});

$(".status-select").change(function(){
  var undo = $("#undoOption").val();
  var data = this.value ;
  var sp = data.split('-');
  if(sp[0]=="Approving"){
    alert("ไม่สามารถเปลี่ยนแปลงไปยังสถานะ Approving ได้");
    $(this).val(undo);
  }else{
  jQuery.ajax({
            url: "<?php echo base_url("/project-coop/index.php/student_view_con/change_status?")?>id="+sp[1]+"&status="+sp[0],
            type: 'GET'
          }).done(function(){
            alert("send e-mail to student id = "+sp[1]+" complete")
          });

      $("#undoOption").val(data);
  }
})

</script>
