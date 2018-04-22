<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>HOME</h2>
			<ul class="breadcrumb">			
				
			</ul>
		</div>


                <div class="card">
                    <div class="body">
                        <div class="header">
                            <h2>ข้อมูลนักศึกษา (Student Information)</h2>
                            

                            <div class="body">
                                <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr >
                                            
                                            <th>รหัสนักศึกษา</th>
                                            <th>ชื่อ</th>
                                            <th>คณะ</th>
                                            <th>สาขา</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td><?php echo $_GET['id']; ?></td>
                                            <td><?php echo $_GET['name']; ?></td>
                                            <td><?php echo $_GET['fac']; ?></td>
                                            <td><?php echo $_GET['major']; ?></td>
                                            
                                        </tr>
                                                
                                    </tbody>
                                </table>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="body">
                        <div class="header">
                            
                            <table class="table ">
                                    <thead>
                                        <tr >
                                            
                                            <th>COOP0103 (ใบสมัครงานสหกิจศึกษาและการฝึกงาน)</th>
                                            <th><button type="button" class="btn  btn-raised bg-green waves-effect">View</button></th>
                                            <th><button type="button" class="btn  btn-raised btn-info waves-effect">Print</button></th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                </table>

                            
                        </div>
                    </div>
                </div>


                 <div class="card">
                    <div class="body">
                        <div class="header">
                            
                            <table class="table ">
                                    <thead>
                                        <tr >
                                            
                                            <th>COOP0202 (แบบเสนองาน)</th>
                                            <th><button type="button" class="btn  btn-raised btn-warning waves-effect">Comment</button></th>
                                            <th><button type="button" class="btn  btn-raised bg-green waves-effect">View</button></th>
                                            <th><button type="button" class="btn  btn-raised btn-info waves-effect">Print</button></th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                </table>

                            
                        </div>
                    </div>
                </div>


                <div class="body">
                        <div class="button-demo">
                            
                            <center>
                                <button type="button" class="btn  btn-raised btn-success waves-effect">อนุมัติ</button>
                            
                                <button type="button" class="btn  btn-raised btn-danger waves-effect">ไม่อนุมัติ</button>
                            </center>
                        </div>
                </div>



        


		
