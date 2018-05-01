<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>REQUEST FORM</h2>
			<ul class="breadcrumb">

			</ul>
		</div>


<div class="row clearfix">
		<div class="col-md-6 col-lg-12">

                <div class="card">
                    <div class="header">
                        <h2> Request Form </h2>
                    </div>
                    <div class="body">
                      <center>

                      <li>Student ID <?php echo $_SESSION['stdid']; ?> </li>

                      <?php 
                        $this->load->model('home_model');
                        $res = $this->home_model->checkReq( $_SESSION['stdid']);
                        if($res){
                              if($res["COOP"]){ ?>
                                 <a href=<?php echo base_url("Project-COOP/FristPageSTD/FristPageSTD/Frist_PageSTD?type=COOP&authid=").$_GET['std_id']; ?> class="btn btn-raised btn-primary waves-effect" >COOPERETIVE</a>
                              <?php }
                              if($res["Internship"]){ ?>
                                 <a href=<?php echo base_url("Project-COOP/FristPageSTD/FristPageSTD/Frist_PageSTD?type=Internship&authid=").$_GET['std_id']; ?> class="btn btn-raised btn-success waves-effect" >INTERNSHIP</a>
                             <?php }
                        }else{
                            echo "<li>หมดช่วงเวลาในการ ขอฝึกงานหรือสหกิจแล้วโปรดติดต่อเจ้าหน้าที่ </li>";
                        }


                      ?>

                         
                         
                        
                      </center>

                    </div>

                </div>
    </div>
</div>
