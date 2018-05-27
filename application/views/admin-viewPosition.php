<section class="content">
    <div class="container-fluid">
<?php
  $responsedata = $responsedata[0];
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
                            <h2>About Postion</h2>
                            <section>

                              <div class="col-md-6">
                              <form name='editform' id="editform" class="" action="<?php echo base_url("project-coop/index.php/company/editPositioninfo") ?>" method="post">
                                <b>Position Name</b>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">computer</i> </span>
                                        <div class="form-line">
                                            <input class="form-control " name="name" id="name" type="text" value=<?php echo $responsedata['Position_name']; ?> disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <b>Skill</b>
                                <div class="form-group ">
                                   <input class="form-control " type="text" name="skill" value= <?php echo $responsedata['Position_skill']; ?> disabled>

                                  </div>
                                  <p><b>Description : </b>  <input class="form-control " name="desc" type="text" value=<?php echo $responsedata['Position_desc']; ?> disabled></p>
                                  <p><b>Number student : </b><input class="form-control " type="text" name="num" value=<?php echo $responsedata['Position_num']; ?> disabled></p>
                                  <p><b>Responsibility : </b> <div class="form-group "><div class="form-line"><input class="form-control " type="text" name="responsibility" value="<?php echo $responsedata['responsibility']; ?>"disabled></div></div></p>
                                  <p><b>candidatereq : </b> <div class="form-group "><div class="form-line"><input class="form-control " type="text" name="candidatereq" value="<?php echo $responsedata['candidatereq']; ?>"disabled></div></div></p>
                                  <input type="hidden" name="posID" value="<?php echo($_GET['posID'])?>">
                                   </form>
                                  <div align = 'right' > <button id="editbtn" class="btn btn-raised btn-primary waves-effect" onclick="showprop()" >Edit</button> </div>

                                </div>



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
