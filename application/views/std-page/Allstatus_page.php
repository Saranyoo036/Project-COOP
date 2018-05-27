<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ALL STATUS</h2>
            <ul class="breadcrumb">

            </ul>
        </div>
                  <div class="card">

                        <div class="header">
                            <h2 align="center">รายชื่อนักศึกษา คณะเทคโนโลยีและสิ่งแวดล้อมที่ขอปฏิบัติงานสหกิจศึกษา ชั้นปีที่ 3-8</h2>
                                <h2 align="center">มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ต</h2>
                                <h2 align="center">ที่ต้องการออกปฏิบัติงานสหกิจศึกษาในภาคการศึกษานี้</h2>



                            <div class="body">
                                <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <!-- <th>#</th> -->
                                                    <th>รหัสนักศึกษา</th>
                                                    <th>ชื่อ - สกุล</th>

                                                    <th>สถานประกอบที่ฝึกงาน 1</th>
                                                    <th>สถานะ</th>
                                                    <th>สถานประกอบที่ฝึกงาน 2</th>
                                                    <th>สถานะ</th>
                                                    <th>สถานะหลัก</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                            <?php

                                            if ($data == array()) {
                                              // code...
                                            }

                                            else{

                                              for ($i=0; $i <count($data[0]) ; $i++) {
                                                echo "<td>".$data[0][$i]['STD_ID']." </td>";
                                                echo "<td>".$data[0][$i]['std_name'].' '.$data[0][$i]['std_sname']." </td>";
                                                echo "<td>".$data[0][$i][1]." </td>";
                                                echo "<td>".''." </td>";
                                                if (isset($data[0][$i][3])) {
                                                  echo "<td>".$data[0][$i][3]." </td>";
                                                  echo "<td>".''." </td>";
                                                  echo "<td>".''." </td>";
                                                }
                                                else{
                                                  echo "<td>".''." </td>";
                                                  echo "<td>".''." </td>";
                                                  echo "<td>".''." </td>";
                                                }

                                              }
                                            }
                                            ?>
                                            </tr>
                                            </tbody>
                                        </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
