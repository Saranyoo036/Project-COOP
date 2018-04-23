<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Company </h2>
			<ul class="breadcrumb">			
				
			</ul>
		</div>
        <div class="card">
            <div class="body">
                <div class="header">
                    <h2>ข้อมูลสถานประกอบการ (Company Information)</h2>
                </div>
                <div class="body">
                    <?php echo $_GET['comID']; ?>
                    <?php echo $_GET['posID']; ?>
                    <?php echo $_GET['STD_ID']; ?>
                    <button type="button" class="btn  btn-raised bg-green waves-effect"
                    onclick="window.location='<?php echo base_url('Project-COOP/teacher_con/aprroveStudent?STD_ID='.$_GET['STD_ID'].'&comID='.$_GET['comID'].'&posID='.$_GET['posID']); ?>;'" 
                    >Approve</button></th>
                </div>    
            </div>
         </div>
    </div>
</section>
                            

                         




        


		
