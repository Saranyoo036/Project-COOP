<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Status</h2>
			<ul class="breadcrumb">

			</ul>
		</div>

		  <div class="card">
                    <div class="body">
                        <div class="comment-box">
                            <h4>ความหมายของสถานะ</h4>
                            <div class="single-comment-box">
                                  <div class="row">
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-hover" style="margin-bottom: 0px;">
                                        <tbody>
                                            <tr>
                                                <td><span class="label label-default label-status" style="background-color: #5bc0de;">Choosing</span></td>   
                                                <td class="status-info">นักศึกษากรอกข้อมูลส่วนตัว และเลือกสถานประกอบการ</td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-default label-status" style="background-color: #f0ad4e;">Waiting</span></td>    
                                                <td class="status-info">รอสถานประกอบการตอบรับ</td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-default label-status" style="background-color: #a53ce6;">Rechoosing</span></td> 
                                                <td class="status-info">อาจารย์ปฏิเสธ ให้เลือกสถานประกอบการใหม่</td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-default label-status" style="background-color: #5bc0de;">Printing</span></td> 
                                                <td class="status-info">กำลังดำเนินงานจัดการเรื่องเอกสาร</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-hover" style="margin-bottom: 0px;">
                                        <tbody>
                                            <tr>
                                                <td><span class="label label-default label-status" style="background-color: #d1de10;">Approving</span></td>  
                                                <td class="status-info">รออาจารย์พิจารณาอนุมัติ</td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-default label-status" style="background-color: #5cb85c;">Accept</span></td>     
                                                <td class="status-info">สถานประกอบการตอบรับแล้ว</td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-default label-status" style="background-color: #b36623;">Repair</span></td>     
                                                <td class="status-info">สถานประกอบการปฏิเสธ ให้เลือกสถานประกอบการใหม่</td>
                                            </tr>
                                            <tr>
                                                <td><span class="label label-default label-status" style="background-color: #777777;">Cancel</span></td>     
                                                <td class="status-info">ยกเลิก</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><br><br>
                
 
 <div class="col-md-12">
                  <div class="alert alert-info" role="alert">
            <strong>สถานะ <?php echo $mystatus[0]['status'] ?> </strong>
          
        </div>
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
								<td><center><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][0]['company_id'].'/'.$mystatus[2][0]['Position_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></center></td>
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
								<td><center><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][1]['company_id'].'/'.$mystatus[2][1]['Position_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></center></td>
							</tbody>
						</table>
					</div>
								<?php } ?>
								<?php } ?>

			<?php }else{ ?>
				<div class="col-md-12">
				<table class="table table-hover table-bordered  table-striped">
					<colgroup>
					     <col width="100">
					     <col width="100">
					     <col width="100">
					     <col width="100">
					</colgroup>
					<tbody>
						<td><center><h5>COOP0103</h5></center></td>
						<td><?php 
							if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&(!$coop0103)&&($mystatus[3])){ ?>
									 <center><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/cooppage_form"); ?>  class="btn btn-raised g-bg-blue waves-effect"> Add</a></center>

						<?php } ?></td><td><?php
							if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&($coop0103)&&($mystatus[3])){ ?>
								<center> <a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/edit103form") ?> class="btn btn-raised g-bg-blue waves-effect" >Edit</a></center>
						<?php } ?></td><td><?php
							if($coop0103){ ?>
								<center><a  href=<?php echo base_url("Project-COOP/STDPage/cooppageform/view/").$_SESSION['stdid']; ?>  class="btn btn-raised g-bg-blue waves-effect">view</a></center>
						<?php }
						?>
					</tbody>
				</table>
			</div>

			<div class="col-md-12">
				<table class="table table-hover table-bordered  table-striped">
					<colgroup>
					     <col width="100">
					     <col width="100">
					     <col width="100">
					     <col width="100">
					</colgroup>
					<tbody>
						<td><center><h5>COOP0202<?php if($_SESSION['std_type']=="COOP"){echo "-1";} ?></h5><?php 
						if($coop0202_1){
							if($mystatus[2][0]['note']){
    							echo '<font color="red">*หมายเหตุ : '.$mystatus[2][0]['note'].'</font>';
    						}}
						?>
						</center></td><td>
						<?php
							if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&$mystatus[3]&&!$coop0202_1){ ?>
								<center><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/viewselect_organization"); ?>  class="btn btn-raised g-bg-blue waves-effect"> add</a></center>
							<?php } ?></td><td><?php							if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&$mystatus[3]&&$coop0202_1){ ?>
								<center><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/editselect_organization?company_id=".$mystatus[2][0]['company_id']."&Position_id=".$mystatus[2][0]['Position_id']); ?>  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a></center>
							<?php } ?></td><td><?php
							if($coop0202_1){ ?>
								<center><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][0]['company_id'].'/'.$mystatus[2][0]['Position_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></center>
							<?php } ?>
							</td></tbody>
					</table>
				</div>
				<?php 
				if($_SESSION['std_type']=="COOP"){ ?>
					<div class="col-md-12">
						<table class="table table-hover table-bordered  table-striped">
						<colgroup>
						    <col width="100">
						    <col width="100">
						    <col width="100">
						    <col width="100">
						</colgroup>
							<tbody>
								<td><center><h5>COOP0202-2</h5><?php 
								if($coop0202_2){
									if($mystatus[2][1]['note']){
		    							echo '<font color="red">*หมายเหตุ : '.$mystatus[2][1]['note'].'</font>';
		    						}
		    					}
								?>
						</center></td><td>
								<?php
								if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&$mystatus[3]&&!$coop0202_2){?>
									<center><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/viewselect_organization"); ?>  class="btn btn-raised g-bg-blue waves-effect"> add</a></center>
								<?php } ?></td><td><?php
								if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&$mystatus[3]&&$coop0202_2&&($mystatus[2][1]['status_student_company_id']!=1)){ ?>
									<center><a href=<?php echo base_url("Project-COOP/STDPage/viewselectorganization/editselect_organization?company_id=".$mystatus[2][1]['company_id']."&Position_id=".$mystatus[2][1]['Position_id']); ?>  class="btn btn-raised g-bg-blue waves-effect"  class="btn">Edit</a></center>
								<?php } ?></td><td><?php
								if($coop0202_2){ ?>
									<center><a href=<?php echo base_url("Project-COOP/STDPage/cooppageform/viewcompany/").$mystatus[2][1]['company_id'].'/'.$mystatus[2][1]['Position_id']; ?> class="btn btn-raised g-bg-blue waves-effect">view</a></center>
								<?php } ?>
								</td></tbody>
					</table>
				</div>
				<?php }
				$have_coop0202_2 = true ; 
				if($coop0202_2){
					if($mystatus[2][1]['status_student_company_id']==2){
						$have_coop0202_2 = false;
					}
				}
				if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&($_SESSION['std_type']=="COOP")&&$coop0202_1&&$coop0103&&($mystatus[2][0]['status_student_company_id']!=2)&&$have_coop0202_2){?>
						<div class="col-md-12">
							<table class="table table-hover table-bordered  table-striped">
								<tbody>
									<td><center><a href="<?php echo(base_url('Project-COOP/STDPage/statuspage/sentChoosing?std_id='.$_SESSION['stdid']));?>" class="btn btn-raised g-bg-blue waves-effect">Send</a></center></td>
								</tbody>
							</table>
						</div>
				<?php } 
				if((($mystatus[0]['status']=="Repair")||($mystatus[0]['status']=="Rechoosing")||($mystatus[0]['status']=="Choosing"))&&($_SESSION['std_type']=="Internship")&&$coop0202_1&&$coop0103&&($mystatus[2][0]['status_student_company_id']!=2)){ ?>
						<div class="col-md-12">
							<table class="table table-hover table-bordered  table-striped">
								<tbody>
									<td><center><a href="<?php echo(base_url('Project-COOP/STDPage/statuspage/sentChoosing?std_id='.$_SESSION['stdid']));?>" class="btn btn-raised g-bg-blue waves-effect">Send</a></center></td>
								</tbody>
							</table>
						</div>
				<?php } ?>
			<?php } ?>


			</div>
		</section>