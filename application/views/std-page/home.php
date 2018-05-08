<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>HOME</h2>
			<ul class="breadcrumb">

			</ul>
		</div>
<!-- <?php
// echo '<pre>';
 print_r($news);
//print_r($_SESSION);
// echo '</pre>';
?> -->

                  <div class="card">
                    <div class="body">
                        <div class="comment-box">
                            <h2 class="title">ข่าวสาร (News)</h2>
                            <div class="single-comment-box">
                                  <ul>
																		<?php
																		for ($i=0; $i <count($news) ; $i++) { ?>
																			<a href="<?php echo base_url("Project-COOP").'/uploaded_file/'.$news[$i]['file_name'] ?>" download>
																				<p> <?php echo $news[$i]['Topic'] ?> ( <?php echo $news[$i]['start_date']; ?> )
																					<i class="material-icons">get_app</i> <small>post by <?php echo $news[$i]['add_by'] ?></small>
																				</p>
																				</a>

																	<?php	}
																		 ?>



                            </div>
                        </div>
                    </div>
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
                        </div>
                    </div>
                </div>
