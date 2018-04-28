<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>HOME</h2>

		</div>
	</div>
	 <div class="card">

                        <div class="header">
                            <h2>คำร้องขอจากนักศึกษา (Requests from students)</h2>


                            <div class="body">
                                <div class="table-responsive">
																	<table class="table">
	                                        <thead>
	                                            <tr>
	                                                <!-- <th>#</th> -->
	                                                <th>รหัสนักศึกษา</th>
	                                                <th>ชื่อ</th>
	                                                <th>คณะ</th>
	                                                <th>สาขา</th>
	                                                <th>รายละเอียด</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                        <?php
	                                        $TID = $_SESSION['logged_in']['username'];
	                                        $sql = "SELECT * FROM `major_setting_personnel` WHERE `personnel_id` = $TID";
	                                        $res = $this->db->query($sql);
	                                            foreach ($res->result() as $key) {
	                                               $que = "SELECT * FROM `student`,`major`,`faculty`,`student_status`
	                                               WHERE faculty.Fac_ID = major.Fac_ID
	                                               AND student_status.STD_ID = student.STD_ID
	                                               AND student.major_id = major.Major_ID
	                                               AND student_status.status = 'Approving'
	                                               AND  std_type = '$key->major_type'
	                                               AND student.major_id =$key->major_id";

	                                               $re = $this->db->query($que);
	                                                foreach ($re->result() as $ke) {
	                                                    $name =  "$ke->std_name $ke->std_sname";
	                                                    echo "<tr>";
	                                                        echo "<td>$ke->STD_ID</td>";
	                                                        echo "<td>$name</td>";
	                                                        echo "<td>$ke->Major_name</td>";
	                                                        echo "<td>$ke->Faculty_name</td>";
	                                                        echo '<td><a href="'.base_url().'Project-COOP/Teacher_con/Descrip_page?id='.$ke->STD_ID.'&name='.$name.'&fac='.$ke->Faculty_name.'&major='.$ke->Major_name.'&type='.$ke->std_type.'"><i class="material-icons">description</a></td></td>';
	                                                    echo "</tr>";
	                                                }
	                                            }
	                                        ?>
	                                        </tbody>
	                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
									</div>
	</section>
