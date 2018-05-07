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
        $que = "SELECT * FROM `student`,`major`,`faculty`,`student_status`
            WHERE major.Major_ID = student.major_id
            AND major.Fac_ID = faculty.Fac_ID
            AND student_status.STD_ID = student.STD_ID
            AND major.NameMajor_sub = '$nameMaj'
            AND student.std_type = '$type';";
          $res = $this->db->query($que);
          foreach ($res->result() as $key ) {
            $STD_ID = $key->STD_ID;
            echo "<tr>";
            echo "<td>$STD_ID</td>";
            echo "<td>$key->std_name</td>";
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
            echo '<td><i class="material-icons">check</i></td>';
            echo '<td><i class="material-icons">close</i></td>';
                }else if($num_STD==2){
            echo '<td><i class="material-icons">check</i></td>';
            echo '<td><i class="material-icons">check</i></td>';
                } ?>
                  <td><div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">print</i><span class="caret"></span> </button>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href=<?php echo base_url("Project-COOP/coop0103PDF/view0103form/$STD_ID") ?>>COOP 0103</a></li>
                                        <li><a target="_blank" href=<?php echo base_url("Project-COOP/coop0104PDF/view0104/$STD_ID") ?>>COOP 0104</a></li>
                                        <li><a target="_blank" href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/39/3") ?>>COOP 0202</a></li>
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
            echo '<td><i class="material-icons">check</i></td>';
                } ?>
                <td><div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">print</i><span class="caret"></span> </button>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href=<?php echo base_url("Project-COOP/coop0103PDF/view0103form/$STD_ID") ?>>COOP 0103</a></li>
                                        <li><a target="_blank" href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/39/3") ?>>COOP 0202</a></li>
                                        <!-- <li><a target="_blank" href=<?php echo base_url("Project-COOP/coop0102PDF/test") ?>><?php echo $STD_ID ?></a></li> -->
                                    </ul>
                                </div>
            </td>

              <?php }

              $major = $_GET['subname_major'];
           ?>


            <td><a href="<?php echo base_url('Project-COOP/fun_sidebar_admin/deleteSTD?STD_ID='.$STD_ID.'&major='.$nameMaj.'&type='.$type); ?>" onclick="return confirm('Are you sure you want to delete?')"><i class="material-icons">delete</i></a></td>
            <?php
            echo "</tr>";
          }
        ?>
      </table>
      </ul>
      <a href=<?php echo base_url("Project-COOP/matching/matching/").$major; ?> class="btn">matching</a>
    </div>
     </div>

</section>

<script type="text/javascript">

var table;
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
