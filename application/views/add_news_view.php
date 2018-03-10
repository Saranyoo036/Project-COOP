<section class="content">

    <div class="container-fluid">
      <form class="" action="<?php echo base_url("project-coop/index.php/news/insertnewstodb") ?>" method="post">
        <div class="block-header">
            <h2>Basic Form Elements</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href=<?php echo base_url("project-coop") ?>>Home</a></li>
                <li class="breadcrumb-item active">Add News Form </li>
            </ul>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Company information</h2>
                          <div class="form-group form-float form-group-lg">
                              <div class="form-line">
                                  <input name="name" type="text" class="form-control"/>
                                  <label class="form-label">หัวข้อเรื่อง</label>
                              </div>
                          </div>
                         
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <h2 class="card-inside-title">เนื้อหา </h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea name="about" rows="4" class="form-control no-resize" placeholder="รายละเอียดเกี่ยวกับข่าว"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="card-inside-title">Choose Type</h2>
                    <div class="row clearfix">
                        <div class ="col-md-6">
                            <input type="checkbox" id="checkbox_1" class="filled-in" >
                            <label for="checkbox_1">Internship</label>
                        </div>
                        <div class ="col-md-6">
                            <input type="checkbox" id="checkbox_2" class="filled-in" >
                            <label for="checkbox_2">COOP</label>
                        </div>
                    </div>
                    <h2 class="card-inside-title">Choose Major</h2>
                    <div class="row clearfix">
                    <?php
                        $que = "select * from major;";
                        $res = $this->db->query($que);
                        $num=0 ; 
                        foreach ($res->result() as $key ) {
                            $num++;
                            echo '<div class ="col-md-4">';
                            echo '<input type="checkbox" id="checkbox_'.$key->NameMajor_sub.'" class="filled-in" >';
                            echo '<label for="checkbox_'.$key->NameMajor_sub.'">'.$key->NameMajor_sub.'</label>';
                            echo "</div>";
                        }
                    ?>
                </div>
                </div>
            </div>
        </div>
        <table align="center">
          <tr>
            <td>
              <!-- <input type="hidden" name="companytype" value=<?php echo $_GET['type_major']; ?>> -->
              <!-- <a href="#" class="btn btn-raised btn-primary waves-effect"></a> -->
              <input class="btn btn-raised btn-primary waves-effect" type="submit" name="submit" value="Add news">
            </td>
          </tr>
        </table>
    </form>

      </div>
</section>

