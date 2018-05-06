<section class="content">

<!-- <?php print_r($data); ?> -->
    <div class="container-fluid">
      <form id='editform' action="<?php echo base_url("Project-COOP/news/edit") ?>" method="post" enctype="multipart/form-data">
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
                        <h2 class="card-inside-title">News Information</h2>
                          <div class="form-group form-float form-group-lg">
                              <div class="form-line">
                                    <textarea name="name" rows="1" class="form-control no-resize" placeholder="คณะ" disabled><?php echo $data[0]['Topic'] ?></textarea>
                              </div>
                          </div>

                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <h2 class="card-inside-title">Faculty </h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea name="about" rows="4" class="form-control no-resize" placeholder="คณะ" disabled><?php echo $data[0]['Fac_ID'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <h2 class="card-inside-title">Old News File</h2>
                                        <div class="form-group form-float form-group-lg">
                                            <div class="form-line">
                                              <textarea name="oldnews" rows="1" class="form-control no-resize" placeholder="หัวข้อข่าว" disabled><?php echo $data['0']['file_name'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="placefile">
              <input type="hidden" name="newsid" value=<?php echo $data[0]['new_id'] ?>>

            </div>
        </div>

        <table align="center">
          <tr>
            <td>
              <a href="#" class="btn " onclick="window.history.back()">back</a>
              <a href="#" class="btn" value='uneditable' id ='uneditable' onclick='edit(this.id)'>edit</a>

              <!-- <input class="btn btn-raised btn-primary waves-effect" type="submit" name="submit" value="Add news"> -->
            </td>
          </tr>
        </table>
</form>
      </div>
</section>



<script>
var id
    function edit(id){
      if (id == 'uneditable') {
          for (var i = 0; i < document.getElementsByTagName('textarea').length; i++) {
            document.getElementsByTagName('textarea')[i].disabled =''
          }



          let editfile = document.createElement("INPUT")
          editfile.type = 'file'
          editfile.name = 'edit'

          document.getElementById('placefile').append(editfile)

          document.getElementById(id).innerHTML = 'save'
          document.getElementById(id).id = 'editable'
        }
        else if (id == 'editable') {
        //  alert('asdasdasdasfdgbesdfbfneh')
        document.getElementById('editform').submit()

        }
      }


</script>

<?php
if (isset($_SESSION['compelte'])) {
echo  "<script type='text/javascript'> alert('".$_SESSION['compelte']."') </script>";
 }
 ?>
