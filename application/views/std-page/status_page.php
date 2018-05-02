<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Status</h2>
			<ul class="breadcrumb">

			</ul>
		</div>
 
 
                  <div class="alert alert-info" role="alert">
            <strong>สถานะ <?php echo $mystatus[0]['status'] ?> </strong>
            : นักศึกษากรอกข้อมูลส่วนตัว และเลือกสถานประกอบการ
        </div>

                <div class="">
            <div class="panel-heading">
                <h3>ข้อมูลนักศึกษา (Student Information)</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2">
                           <div class="info-icons">
                                <center><i class="fa fa-user fa-5x"></i></center>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-hover table-bordered  table-striped">
                                <thead>
                                    <tr>
                                        <th>รหัสนักศึกษา</th>
                                        <th>ชื่อ</th>
                                        <th>คณะ</th>
                                        <th>สาขา</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $mystatus[0]['STD_ID'] ?></td>
                                        <td><?php echo $mystatus[0]['std_name'].' '.$mystatus[0]['std_sname'] ?></td>
                                        <td><?php echo $mystatus[0]['faculty'] ?></td>
                                        <td><?php echo $mystatus[0]['major'] ?></td>
                                        <td><?php echo $mystatus[0]['status'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    		<?php
    			$coop0103 =true ; 
    			if($mystatus[1]==Array()){
    				$coop0103 = false;
    			}
    			$coop0202_1 =true ;
    			$coop0202_2 =true ; 
    			if($mystatus[2]==Array()){
    				$coop0202_1 =false;
    			}
    			if(count($mystatus[2])==2){
    				$coop0202_2 = true;
    			}else{
    				$coop0202_2 = false;
    			} 

    		?>

    		
						
			<?php
				if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&(!$mystatus[3])){ ?>
				<div class="alert alert-danger">
					<center>
          				<strong>ขออภัย : </strong>
							<a  href="javascript:void(0);" class="alert-link">ขณะนี้ระบบไม่อยู่ในช่วงที่เปิดให้เลือกสถานประกอบการหรือปิดให้การเลือกสถานบริการแล้ว</a>
								กรุณาเข้าสู่ระบบอีกครั้งเมื่อถึงเวลา
					</center>
        		</div>
        		<?php  
							if($coop0103){ ?>
        		<div class="col-md-12">
				<table class="table table-hover table-bordered  table-striped">
					<tbody>
						<td><center><h5>COOP0103</h5></center></td>
						
								<td><center><a  href=<?php echo base_url("Project-COOP/STDPage/cooppageform/view/").$_SESSION['stdid']; ?>  class="btn btn-raised g-bg-blue waves-effect">view</a></center></td>
						

					</tbody>
				</table>
			</div>
			<?php } ?>
				<?php  if($coop0202_1){ ?>
				<div class="col-md-12">
				<table class="table table-hover table-bordered  table-striped">
					<tbody>
						<td><center><h5>COOP0202-1</h5></center></td>
								<td><center><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][0]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></center></td>
						</tbody>
				</table>
			</div>
			<?php } ?>
			<?php if($_SESSION['std_type']=="COOP"){ 
								if($coop0202_2){ ?>
					<div class="col-md-12">
						<table class="table table-hover table-bordered  table-striped">
							<tbody>
								<td><center><h5>COOP0202-2</h5></center></td>
								<td><center><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][1]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></center></td>
							</tbody>
						</table>
					</div>
								<?php } ?>
								<?php } ?>

			<?php }else{ ?>
				<div class="col-md-12">
				<table class="table table-hover table-bordered  table-striped">
					<tbody>
						<td><center><h5>COOP0103</h5></center></td>
						<?php 
							
							if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&(!$coop0103)&&($mystatus[3])){ ?>
									<td> <center><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/cooppage_form"); ?>  class="btn btn-raised g-bg-blue waves-effect"> Add</a></center></td>

						<?php }
							if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&($coop0103)&&($mystatus[3])){ ?>
								<td><center> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/edit103form") ?> class="btn btn-raised g-bg-blue waves-effect" >Edit your 103 form</a></center></td>
						<?php } 
							if($coop0103){ ?>
								<td><center><a  href=<?php echo base_url("Project-COOP/STDPage/cooppageform/view/").$_SESSION['stdid']; ?>  class="btn btn-raised g-bg-blue waves-effect">view</a></center></td>
						<?php }
						?>
					</tbody>
				</table>
			</div>

			<div class="col-md-12">
				<table class="table table-hover table-bordered  table-striped">
					<tbody>
						<td><center><h5>COOP0202-1</h5></center></td>
						<?php
							if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&$mystatus[3]&&!$coop0202_1){ ?>
								<td><center><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/viewselect_organization"); ?>  class="btn btn-raised g-bg-blue waves-effect"> add</a></center></td>
							<?php }
							if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&$mystatus[3]&&$coop0202_1){ ?>
								<td><center><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/editselect_organization?company_id=".$mystatus[2][0]['company_id']."&Position_id=".$mystatus[2][0]['Position_id']); ?>  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a></center></td>
							<?php } 
							if($coop0202_1){ ?>
								<td><center><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][0]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></center></td>
							<?php } ?>
							</tbody>
					</table>
				</div>
				<?php 
				if($_SESSION['std_type']=="COOP"){ ?>
					<div class="col-md-12">
						<table class="table table-hover table-bordered  table-striped">
							<tbody>
								<td><center><h5>COOP0202-2</h5></center></td>
								<?php
								if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&$mystatus[3]&&!$coop0202_2){?>
									<td><center><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/viewselect_organization"); ?>  class="btn btn-raised g-bg-blue waves-effect"> add</a></center></td>
								<?php } 
								if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&$mystatus[3]&&$coop0202_2){ ?>
									<td><center><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/editselect_organization?company_id=".$mystatus[2][1]['company_id']."&Position_id=".$mystatus[2][1]['Position_id']); ?>  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a></center></td>
								<?php } 
								if($coop0202_2){ ?>
									<td><center><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][1]['company_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></center></td>
								<?php } ?>
								</tbody>
					</table>
				</div>
				<?php }
				if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&($_SESSION['std_type']=="COOP")&&$coop0202_2&&$coop0202_1&&$coop0103){ ?>
						<div class="col-md-12">
							<table class="table table-hover table-bordered  table-striped">
								<tbody>
									<td><center><a href="<?php echo(base_url('Project-COOP/STDPage/statuspage/sentChoosing?std_id='.$_SESSION['stdid']));?>" class="btn btn-raised g-bg-blue waves-effect">Sent</a></center></td>
								</tbody>
							</table>
						</div>
				<?php } 
				if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&($_SESSION['std_type']=="Internship")&&$coop0202_2&&$coop0103){ ?>
						<div class="col-md-12">
							<table class="table table-hover table-bordered  table-striped">
								<tbody>
									<td><center><a href="<?php echo(base_url('Project-COOP/STDPage/statuspage/sentChoosing?std_id='.$_SESSION['stdid']));?>" class="btn btn-raised g-bg-blue waves-effect">Sent</a></center></td>
								</tbody>
							</table>
						</div>
				<?php } ?>
			<?php } ?>


			</div>
		</section>