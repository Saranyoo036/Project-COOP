<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>ALL STATUS</h2>
			<ul class="breadcrumb">			
				
			</ul>
		</div>

        <!-- <?php print_r($data); ?>  -->


                   <div class = "container">
                    <center><h4>
                    รายชื่อนักศึกษา คณะเทคโนโลยีและสิ่งแวดล้อมที่ขอปฏิบัติงานสหกิจศึกษา ชั้นปีที่ 3-8<br>
                    <!-- ภาคเรียนที่ 3 (ภาคฤดูร้อน) ปีการศึกษา 2557<br> -->
                    มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ต<br>
                    <!-- ฝึกปฏิบัติงานระหว่างวันจันทร์ที่ 18 พฤษภาคม 2558 – วันศุกร์ที่ 17 กรกฎาคม 2558  -->   
                    
                                        ที่ต้องการออกปฏิบัติงานสหกิจศึกษาในภาคการศึกษานี้
                                    </h4></center>
      <div class="panel panel-default">  
        <div class="panel-body"> 
            <div class="col-md-12">
                
                <table  id="example">
                    <thead>
                        <tr>
                            <th>ที่</th>
                            <th>รหัสนักศึกษา</th>
                            <th>ชื่อ - สกุล</th>
                            <th>สาขา</th>
                            <th>สถานประกอบการที่ขอฝึกงาน 1</th>
                            <th>สถานะ</th>
                            <th>สถานประกอบการที่ขอฝึกงาน 2</th>
                            <th>สถานะ</th>
                            <th>สถานะหลัก</th>
                            </tr>
                    </thead>
                    
                    
                        <?php 
                        $no = 0;
                        foreach ($data as $std) {
                            $no++;
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>$std->std_psuid</td>";
                            echo "<td>$std->std_name $std->std_sname</td>";
                            echo "<td>$std->major_id </td>";
                            echo "<td>- </td>";
                            echo "<td>- </td>";
                            echo "<td>- </td>";
                            echo "<td>- </td>";
                            echo "<td>$std->status </td>";
                            echo "</tr>";
                            
                        } ?>
                                
                </table>
            </div>  
        </div>  
      </div>  
    </div>
		
<script type="text/javascript">

var teacher =[];
var table;
$(document).ready(function() {
    table = $('#example').DataTable({

    });
});

function confirmanddel(url) {
    setTimeout(function()
    {
         window.location = url }
         , 3800);
         showConfirmMessage()

    //showConfirmMessage()
}

</script>