<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Status</h2>
			<ul class="breadcrumb">

			</ul>
		</div>
<!-- <?php print_r($mystatus);  ?> -->

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

                                                    <a href="#" class="btn btn-default btn-block btn-lg disabled">
            เอกสารยังไม่ครบ
        </a>
        </div>
