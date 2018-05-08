<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>APPLICATION FOR COORPERATIVE AND INTERNSHIP</h2>
            <ul class="breadcrumb">

            </ul>
        </div>

<?php
// echo '<pre>';
//  print_r($data);
//
//  echo '</pre>';
  ?>
        <!-- Basic Example | Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                    <div class="body">
                      <form class="" id="wizard_vertical" action=<?php echo base_url("Project-COOP/STDPage/cooppageform/update103form"); ?> method="post">

                            <h2>STUDENT PERSONAL DATA</h2>
                            <section>
                                <h3>ข้อมูลทั่วไป</h3>
                                <div class="form-line form-group form-float demo-radio-button">
                                    <input name="group1" type="radio" id="radio_1" checked />
                                    <label for="radio_1">ภาษาไทย (Thai)</label>
                                    <input name="group1" type="radio" id="radio_2" />
                                    <label for="radio_2">ภาษาอังกฤษ (English)</label>

                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                  <textarea class="form-control "
                                  rows="10" name="explain_about_yourself"  name="name_and_surname_thai_1" placeholder="ชื่อ-นามสกุล ไทย (Name &amp; Surname Thai)"value=<?php echo $data[1][0]['std_name']; ?>><?php echo $data[1][0]['std_name'].' '.$data[1][0]['std_sname']; ?></textarea>
                                                    <!-- <input type="text" class="form-control" name="name_and_surname_thai_1" placeholder="ชื่อ-นามสกุล ไทย (Name &amp; Surname Thai)" value=<?php echo $data[1][0]['std_name']; ?>> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="" placeholder="รหัสนักศึกษา (Std.ID.)" value=<?php if(isset($_SESSION['stdid'])){echo $_SESSION['stdid'];}else{ echo $_GET['STD_ID'];} ['stdid']; ?> >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                  <textarea class="form-control "
                                  rows="10" name="major_year_1" placeholder="สาขาวิชา-ชั้นปีที่ ไทย (Major-Year Thai)" value=<?php echo $data[1][0]['major']; ?>><?php echo $data[1][0]['major']; ?>(4)</textarea>
                                                    <!-- <input type="text" class="form-control" name="major_year_1" placeholder="สาขาวิชา-ชั้นปีที่ ไทย (Major-Year Thai)" value=<?php echo $data[1][0]['major']; ?>> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                  <textarea class="form-control "
                                  rows="10" name="faculty_1" placeholder="คณะ ไทย (Faculty Thai)" value=<?php echo $data[1][0]['faculty']; ?>><?php echo $data[1][0]['faculty']; ?></textarea>
                                                    <!-- <input type="text" class="form-control" name="faculty_1" placeholder="คณะ ไทย (Faculty Thai)"  value=<?php echo $data[1][0]['faculty']; ?>> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                  <textarea class="form-control "
                                  rows="10" name="advisor_name_1" placeholder="ชื่ออาจารย์ที่ปรึกษา ไทย (Name of academic advisor Thai)" value=<?php echo $data[0]['Name_of_advisor']; ?>><?php echo $data[0]['Name_of_advisor']; ?></textarea>
                                                    <!-- <input type="text" class="form-control" name="advisor_name_1" placeholder="ชื่ออาจารย์ที่ปรึกษา ไทย (Name of academic advisor Thai)" value=<?php echo $data[0]['Name_of_advisor']; ?> > -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="phone_number_1" placeholder="เบอร์โทรศัพท์ (Phone)" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" name="email_1" placeholder="อีเมล (Email)" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="datepicker form-control" name="working_from_1" placeholder="วันที่เริ่มฝึกงาน (From)"  <?php echo $data[0]['Expiry_date']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="datepicker form-control" name="working_until_1" placeholder="วันที่สิ้นสุดการฝึกงาน (Until)" <?php echo $data[0]['Expiry_date']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input  type="number" class="form-control" step = "0.01" min = "0.00" max = "4.00" name="semester_gpa_1" placeholder="** เกรดเฉลี่ยภาคการศึกษาที่ผ่านมา (Semester GPA)" value=<?php echo $data[0]['Semester_GPA']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input  type="number" class="form-control" step = "0.01" min = "0.00" max = "4.00" name="cumulative_gpa_1" placeholder="** เกรดเฉลี่ยรวม (Cumulative GPA)" value=<?php echo $data[0]['Cumulative_GPA']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <h3>ข้อมูลตามบัตรประจำตัวประชาชน</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="identification_card_no_1" placeholder="บัตรประจำตัวประชาชน (Identification card no.)" value=<?php echo $data[0]['Iden_cardNo']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="issued_at_1" placeholder="ออกให้ ณ (Issued at)" value=<?php echo $data[0]['Issued_at']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="datepicker form-control" name="issued_date_1" placeholder="เมื่อวันที่ (Issued date)" value=<?php echo $data[0]['Issued_date']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="datepicker form-control" name="expiry_date_1" placeholder="หมดอายุวันที่ (Expiry date)" value=<?php echo $data[0]['Expiry_date']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="race_1" placeholder="เชื้อชาติ (Race)" value=<?php echo $data[0]['Race']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="nationality_1" placeholder="สัญชาติ (Nationality)" value=<?php echo $data[0]['Nationality']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="religion_1" placeholder="ศาสนา (Religion)" value=<?php echo $data[0]['Religion']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="datepicker form-control" name="date_of_birth_1" placeholder="วันเดือนปีเกิด (Date of birth)" value=<?php echo $data[0]['Date_of_birth']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h3>ข้อมูลส่วนตัว</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="place_of_birth_1" placeholder="สถานที่เกิด (Place of birth)" value=<?php echo $data[0]['Place_of_birth']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="sex_1" id="sex_1"  class="form-line form-control show-tick" >
                                                    <option value=''>เพศ (Sex)</option>
                                                    <option value='m'>ชาย(Male)</option>
                                                    <option value='f'>หญิง(Female)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="height_1" placeholder="ส่วนสูง (Height)" value=<?php echo $data[0]['Height']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="weight_1" placeholder="น้ำหนัก (Weight)" value=<?php echo $data[0]['Weight']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="chronical_disease_1" placeholder="โรคเรื้อรัง โรคประจำตัว ระบุ (Chronical disease: specify)" value=<?php echo $data[0]['Chronical_disease']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h3>ที่อยู่ในภาคการศึกษานี้ (Address this term)</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="address_this_term_2" placeholder="ที่อยู่ (Address)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="tel_2_1" placeholder="โทรศัพท์ (Tel.)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="moblie_2_1" placeholder="โทรศัพท์มือถือ (Moblie)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="fax_2_1" placeholder="โทรสาร (Fax.)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" name="email_2" placeholder="E-mail" value=''>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <h3>ที่อยู่ถาวร (Permanent address)</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="permanent_address_2" placeholder="ที่อยู่ (Address)" value=<?php echo $data[0]['Address']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="tel_2_2" placeholder="โทรศัพท์ (Tel.)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="moblie_2_2" placeholder="โทรศัพท์มือถือ (Moblie)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="fax_2_2" placeholder="โทรสาร (Fax.)" value=''>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <h3>บุคคลที่ติดต่อได้ในกรณีฉุกเฉิน (Emergency case contact to)</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="name_emergency_2" placeholder="ชื่อ-สกุล (Name &amp; surname)" value=<?php echo $data[0]['Emergency_name']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="relation_emergency_2" placeholder="ความเกี่ยวข้อง (Relation)" value=<?php echo $data[0]['Emergency_relation']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="occupation_emergency_2" placeholder="อาชีพ (Occupation)" value=<?php echo $data[0]['Emergency_Occupation']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="place_of_work_emergency_2" placeholder="สถานที่ทำงาน (Place of work)" value=<?php echo $data[0]['Emergency_Placework']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="address_emergency_2" placeholder="ที่อยู่ (Address)" value=<?php echo $data[0]['Emergency_Address']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="tel_emergency_2" placeholder="โทรศัพท์ (Tel.)" value=<?php echo $data[0]['Emergency_Tel']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="fax_emergency_2" placeholder="โทรสาร (Fax.)" value=<?php echo $data[0]['Emergency_Tel']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="email_emergency_2" placeholder="E-mail" value=<?php echo $data[0]['Emergency_E-mail']; ?>>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                            </section>

                            <h2>FAMILY DETAILS</h2>
                            <section>
                                <h3>ข้อมูลบิดา</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="father_name_2" id = "father_name_2" placeholder="ชื่อบิดา (Father's name)" value=<?php echo $data[0]['Father_name']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" min = "0" name="age_father_2" id = "age_father_2" placeholder="อายุ (Age)" value=<?php echo $data[0]['Father_age']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="occupation_father_2" id = "occupation_father_2" placeholder="อาชีพ (Occupation)" value=<?php echo $data[0]['Father_occupation']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="address_father_2" id="address_father_2" placeholder="เลขที่ (Address)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="moo_father_2" id="moo_father_2" placeholder="หมู่ที่ (Moo)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="soi_father_2" id="soi_father_2" placeholder="ซอย (Soi)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="sub_district_father_2" id="sub_district_father_2" placeholder="แขวง/ตำบล (Sub Dristrict)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="district_father_2" id="district_father_2" placeholder="เขต/อำเภอ (District)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name = "province_father_2" id = "province_father_2" class="form-line form-control show-tick" value=''>
                                                    <option value =''>จังหวัด (Province)</option>
                                                    <option value ="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option value ="กระบี่">กระบี่</option>
                                                    <option value ="กาญจนบุรี">กาญจนบุรี</option>
                                                    <option value ="กาฬสินธุ์">กาฬสินธุ์</option>
                                                    <option value ="กำแพงเพชร">กำแพงเพชร</option>
                                                    <option value ="ขอนแก่น">ขอนแก่น</option>
                                                    <option value ="จันทบุรี">จันทบุรี</option>
                                                    <option value ="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                                    <option value ="ชลบุรี">ชลบุรี</option>
                                                    <option value ="ชัยนาท">ชัยนาท</option>
                                                    <option value ="ชัยภูมิ">ชัยภูมิ</option>
                                                    <option value ="ชุมพร">ชุมพร</option>
                                                    <option value ="เชียงราย">เชียงราย</option>
                                                    <option value ="เชียงใหม่">เชียงใหม่</option>
                                                    <option value ="ตรัง">ตรัง</option>
                                                    <option value ="ตราด">ตราด</option>
                                                    <option value ="ตาก">ตาก</option>
                                                    <option value ="นครนายก">นครนายก</option>
                                                    <option value ="นครปฐม">นครปฐม</option>
                                                    <option value ="นครพนม">นครพนม</option>
                                                    <option value ="นครราชสีมา">นครราชสีมา</option>
                                                    <option value ="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                                    <option value ="นครสวรรค์">นครสวรรค์</option>
                                                    <option value ="นนทบุรี">นนทบุรี</option>
                                                    <option value ="นราธิวาส">นราธิวาส</option>
                                                    <option value ="น่าน">น่าน</option>
                                                    <option value ="บึงกาฬ">บึงกาฬ</option>
                                                    <option value ="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option value ="ปทุมธานี">ปทุมธานี</option>
                                                    <option value ="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                                    <option value ="ปราจีนบุรี">ปราจีนบุรี</option>
                                                    <option value ="ปัตตานี">ปัตตานี</option>
                                                    <option value ="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                                    <option value ="พังงา">พังงา</option>
                                                    <option value ="พัทลุง">พัทลุง</option>
                                                    <option value ="พิจิตร">พิจิตร</option>
                                                    <option value ="พิษณุโลก">พิษณุโลก</option>
                                                    <option value ="เพชรบุรี">เพชรบุรี</option>
                                                    <option value ="เพชรบูรณ์">เพชรบูรณ์</option>
                                                    <option value ="แพร่">แพร่</option>
                                                    <option value ="พะเยา">พะเยา</option>
                                                    <option value ="ภูเก็ต" selected="selected">ภูเก็ต</option>
                                                    <option value ="มหาสารคาม">มหาสารคาม</option>
                                                    <option value ="มุกดาหาร">มุกดาหาร</option>
                                                    <option value ="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                                    <option value ="ยะลา">ยะลา</option>
                                                    <option value ="ยโสธร">ยโสธร</option>
                                                    <option value ="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                                    <option value ="ระนอง">ระนอง</option>
                                                    <option value ="ระยอง">ระยอง</option>
                                                    <option value ="ราชบุรี">ราชบุรี</option>
                                                    <option value ="ลพบุรี">ลพบุรี</option>
                                                    <option value ="ลำปาง">ลำปาง</option>
                                                    <option value ="ลำพูน">ลำพูน</option>
                                                    <option value ="เลย">เลย</option>
                                                    <option value ="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option value ="สกลนคร">สกลนคร</option>
                                                    <option value ="สงขลา">สงขลา</option>
                                                    <option value ="สตูล">สตูล</option>
                                                    <option value ="สมุทรปราการ">สมุทรปราการ</option>
                                                    <option value ="สมุทรสงคราม">สมุทรสงคราม</option>
                                                    <option value ="สมุทรสาคร">สมุทรสาคร</option>
                                                    <option value ="สระแก้ว">สระแก้ว</option>
                                                    <option value ="สระบุรี">สระบุรี</option>
                                                    <option value ="สิงห์บุรี">สิงห์บุรี</option>
                                                    <option value ="สุโขทัย">สุโขทัย</option>
                                                    <option value ="สุพรรณบุรี">สุพรรณบุรี</option>
                                                    <option value ="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                                    <option value ="สุรินทร์">สุรินทร์</option>
                                                    <option value ="หนองคาย">หนองคาย</option>
                                                    <option value ="หนองบัวลำภู">หนองบัวลำภู</option>
                                                    <option value ="อ่างทอง">อ่างทอง</option>
                                                    <option value ="อุดรธานี">อุดรธานี</option>
                                                    <option value ="อุทัยธานี">อุทัยธานี</option>
                                                    <option value ="อุตรดิตถ์">อุตรดิตถ์</option>
                                                    <option value ="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option value ="อำนาจเจริญ">อำนาจเจริญ</option>
                                                    <option value ="other">อื่นๆ</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="zip_cord_father_2" id="zip_cord_father_2" placeholder="รหัสไปรษณีย์ (Zip code)" value=<?php echo $data[0]['Father_Zipcode']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  name="tel_father_2" id="tel_father_2" placeholder="โทรศัพท์ (Tel.)" value=<?php echo $data[0]['Father_Tel']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="fax_father_2" id="fax_father_2" placeholder="โทรสาร (Fax)" value=<?php echo $data[0]['Father_Tel']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="email_father_2" id="email_father_2" placeholder="E-mail" value=<?php echo $data[0]['Father_Email']; ?>>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <h3>ข้อมูลมารดา</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="mother_name_2" id="mother_name_2" placeholder="ชื่อมารดา (Mother's name)" value=<?php echo $data[0]['mother_name']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" min = "0" name="age_mother_2" id="age_mother_2" placeholder="อายุ (Age)" value=<?php echo $data[0]['mother_age']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="occupation_mother_2" id="occupation_mother_2" placeholder="อาชีพ (Occupation)" value=<?php echo $data[0]['mother_occupation']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="address_mother_2" id="address_mother_2" placeholder="เลขที่ (Address)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="moo_mother_2" id="moo_mother_2" placeholder="หมู่ที่ (Moo)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="soi_mother_2" id="soi_mother_2" placeholder="ซอย (Soi)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="sub_district_mother_2" id="sub_district_mother_2" placeholder="แขวง/ตำบล (Sub Dristrict)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  name="district_mother_2" id="district_mother_2" placeholder="เขต/อำเภอ (District)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name = "province_mother_2" id = "province_mother_2" class="form-line form-control show-tick">
                                                    <option value =''>จังหวัด (Province)</option>
                                                    <option value ="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option value ="กระบี่">กระบี่</option>
                                                    <option value ="กาญจนบุรี">กาญจนบุรี</option>
                                                    <option value ="กาฬสินธุ์">กาฬสินธุ์</option>
                                                    <option value ="กำแพงเพชร">กำแพงเพชร</option>
                                                    <option value ="ขอนแก่น">ขอนแก่น</option>
                                                    <option value ="จันทบุรี">จันทบุรี</option>
                                                    <option value ="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                                    <option value ="ชลบุรี">ชลบุรี</option>
                                                    <option value ="ชัยนาท">ชัยนาท</option>
                                                    <option value ="ชัยภูมิ">ชัยภูมิ</option>
                                                    <option value ="ชุมพร">ชุมพร</option>
                                                    <option value ="เชียงราย">เชียงราย</option>
                                                    <option value ="เชียงใหม่">เชียงใหม่</option>
                                                    <option value ="ตรัง">ตรัง</option>
                                                    <option value ="ตราด">ตราด</option>
                                                    <option value ="ตาก">ตาก</option>
                                                    <option value ="นครนายก">นครนายก</option>
                                                    <option value ="นครปฐม">นครปฐม</option>
                                                    <option value ="นครพนม">นครพนม</option>
                                                    <option value ="นครราชสีมา">นครราชสีมา</option>
                                                    <option value ="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                                    <option value ="นครสวรรค์">นครสวรรค์</option>
                                                    <option value ="นนทบุรี">นนทบุรี</option>
                                                    <option value ="นราธิวาส">นราธิวาส</option>
                                                    <option value ="น่าน">น่าน</option>
                                                    <option value ="บึงกาฬ">บึงกาฬ</option>
                                                    <option value ="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option value ="ปทุมธานี">ปทุมธานี</option>
                                                    <option value ="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                                    <option value ="ปราจีนบุรี">ปราจีนบุรี</option>
                                                    <option value ="ปัตตานี">ปัตตานี</option>
                                                    <option value ="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                                    <option value ="พังงา">พังงา</option>
                                                    <option value ="พัทลุง">พัทลุง</option>
                                                    <option value ="พิจิตร">พิจิตร</option>
                                                    <option value ="พิษณุโลก">พิษณุโลก</option>
                                                    <option value ="เพชรบุรี">เพชรบุรี</option>
                                                    <option value ="เพชรบูรณ์">เพชรบูรณ์</option>
                                                    <option value ="แพร่">แพร่</option>
                                                    <option value ="พะเยา">พะเยา</option>
                                                    <option value ="ภูเก็ต" selected="selected">ภูเก็ต</option>
                                                    <option value ="มหาสารคาม">มหาสารคาม</option>
                                                    <option value ="มุกดาหาร">มุกดาหาร</option>
                                                    <option value ="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                                    <option value ="ยะลา">ยะลา</option>
                                                    <option value ="ยโสธร">ยโสธร</option>
                                                    <option value ="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                                    <option value ="ระนอง">ระนอง</option>
                                                    <option value ="ระยอง">ระยอง</option>
                                                    <option value ="ราชบุรี">ราชบุรี</option>
                                                    <option value ="ลพบุรี">ลพบุรี</option>
                                                    <option value ="ลำปาง">ลำปาง</option>
                                                    <option value ="ลำพูน">ลำพูน</option>
                                                    <option value ="เลย">เลย</option>
                                                    <option value ="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option value ="สกลนคร">สกลนคร</option>
                                                    <option value ="สงขลา">สงขลา</option>
                                                    <option value ="สตูล">สตูล</option>
                                                    <option value ="สมุทรปราการ">สมุทรปราการ</option>
                                                    <option value ="สมุทรสงคราม">สมุทรสงคราม</option>
                                                    <option value ="สมุทรสาคร">สมุทรสาคร</option>
                                                    <option value ="สระแก้ว">สระแก้ว</option>
                                                    <option value ="สระบุรี">สระบุรี</option>
                                                    <option value ="สิงห์บุรี">สิงห์บุรี</option>
                                                    <option value ="สุโขทัย">สุโขทัย</option>
                                                    <option value ="สุพรรณบุรี">สุพรรณบุรี</option>
                                                    <option value ="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                                    <option value ="สุรินทร์">สุรินทร์</option>
                                                    <option value ="หนองคาย">หนองคาย</option>
                                                    <option value ="หนองบัวลำภู">หนองบัวลำภู</option>
                                                    <option value ="อ่างทอง">อ่างทอง</option>
                                                    <option value ="อุดรธานี">อุดรธานี</option>
                                                    <option value ="อุทัยธานี">อุทัยธานี</option>
                                                    <option value ="อุตรดิตถ์">อุตรดิตถ์</option>
                                                    <option value ="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option value ="อำนาจเจริญ">อำนาจเจริญ</option>
                                                    <option value ="other">อื่นๆ</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="zip_cord_mother_2" id="zip_cord_mother_2" placeholder="รหัสไปรษณีย์ (Zip code)" value=<?php echo $data[0]['mother_Zipcode']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  name="tel_mother_2" id="tel_mother_2" placeholder="โทรศัพท์ (Tel.)" value=<?php echo $data[0]['mother_Tel']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="fax_mother_2" id="fax_mother_2" placeholder="โทรสาร (Fax)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="email_mother_2" id="email_mother_2" placeholder="E-mail" value=<?php echo $data[0]['mother_Email']; ?>>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <h3>ข้อมูลผู้ปกครอง</h3>

                                    <div class="row clearfix">

                                        <div class="form-group col-md-6">
                                            <a class="btn btn-raised btn-primary waves-effect" id="father" onclick="parentdata(this.id)">ใช้ข้อมูลบิดา (Use father's information)</a>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <a class="btn btn-raised btn-primary waves-effect" id="mother" onclick="parentdata(this.id)">ใช้ข้อมูลมารดา (Use mother's information)</a>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="parent_name_2" id="parent_name_2" placeholder="ชื่อผู้ปกครอง (Parent 's name)" value=<?php echo $data[0]['Parent_name']. $data[0]['Parent_sname']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" min = "0" name="age_parent_2" id="age_parent_2" placeholder="อายุ (Age)" value=<?php echo $data[0]['Parent_age']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="occupation_parent_2" id="occupation_parent_2" placeholder="อาชีพ (Occupation)" value=<?php echo $data[0]['Parent_occupation']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="address_parent_2" id="address_parent_2" placeholder="เลขที่ (Address)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="moo_parent_2" id="moo_parent_2" placeholder="หมู่ที่ (Moo)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="soi_patent_2" id="soi_patent_2" placeholder="ซอย (Soi)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="sub_district_parent_2" id="sub_district_parent_2" placeholder="แขวง/ตำบล (Sub Dristrict)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="district_parent_2" id="district_parent_2" placeholder="เขต/อำเภอ (District)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name = "province_parent_2" id = "province_parent_2" class="form-line form-control show-tick">
                                                    <option value =''>จังหวัด (Province)</option>
                                                    <option value ="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option value ="กระบี่">กระบี่</option>
                                                    <option value ="กาญจนบุรี">กาญจนบุรี</option>
                                                    <option value ="กาฬสินธุ์">กาฬสินธุ์</option>
                                                    <option value ="กำแพงเพชร">กำแพงเพชร</option>
                                                    <option value ="ขอนแก่น">ขอนแก่น</option>
                                                    <option value ="จันทบุรี">จันทบุรี</option>
                                                    <option value ="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                                    <option value ="ชลบุรี">ชลบุรี</option>
                                                    <option value ="ชัยนาท">ชัยนาท</option>
                                                    <option value ="ชัยภูมิ">ชัยภูมิ</option>
                                                    <option value ="ชุมพร">ชุมพร</option>
                                                    <option value ="เชียงราย">เชียงราย</option>
                                                    <option value ="เชียงใหม่">เชียงใหม่</option>
                                                    <option value ="ตรัง">ตรัง</option>
                                                    <option value ="ตราด">ตราด</option>
                                                    <option value ="ตาก">ตาก</option>
                                                    <option value ="นครนายก">นครนายก</option>
                                                    <option value ="นครปฐม">นครปฐม</option>
                                                    <option value ="นครพนม">นครพนม</option>
                                                    <option value ="นครราชสีมา">นครราชสีมา</option>
                                                    <option value ="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                                    <option value ="นครสวรรค์">นครสวรรค์</option>
                                                    <option value ="นนทบุรี">นนทบุรี</option>
                                                    <option value ="นราธิวาส">นราธิวาส</option>
                                                    <option value ="น่าน">น่าน</option>
                                                    <option value ="บึงกาฬ">บึงกาฬ</option>
                                                    <option value ="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option value ="ปทุมธานี">ปทุมธานี</option>
                                                    <option value ="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                                    <option value ="ปราจีนบุรี">ปราจีนบุรี</option>
                                                    <option value ="ปัตตานี">ปัตตานี</option>
                                                    <option value ="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                                    <option value ="พังงา">พังงา</option>
                                                    <option value ="พัทลุง">พัทลุง</option>
                                                    <option value ="พิจิตร">พิจิตร</option>
                                                    <option value ="พิษณุโลก">พิษณุโลก</option>
                                                    <option value ="เพชรบุรี">เพชรบุรี</option>
                                                    <option value ="เพชรบูรณ์">เพชรบูรณ์</option>
                                                    <option value ="แพร่">แพร่</option>
                                                    <option value ="พะเยา">พะเยา</option>
                                                    <option value ="ภูเก็ต" selected="selected">ภูเก็ต</option>
                                                    <option value ="มหาสารคาม">มหาสารคาม</option>
                                                    <option value ="มุกดาหาร">มุกดาหาร</option>
                                                    <option value ="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                                    <option value ="ยะลา">ยะลา</option>
                                                    <option value ="ยโสธร">ยโสธร</option>
                                                    <option value ="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                                    <option value ="ระนอง">ระนอง</option>
                                                    <option value ="ระยอง">ระยอง</option>
                                                    <option value ="ราชบุรี">ราชบุรี</option>
                                                    <option value ="ลพบุรี">ลพบุรี</option>
                                                    <option value ="ลำปาง">ลำปาง</option>
                                                    <option value ="ลำพูน">ลำพูน</option>
                                                    <option value ="เลย">เลย</option>
                                                    <option value ="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option value ="สกลนคร">สกลนคร</option>
                                                    <option value ="สงขลา">สงขลา</option>
                                                    <option value ="สตูล">สตูล</option>
                                                    <option value ="สมุทรปราการ">สมุทรปราการ</option>
                                                    <option value ="สมุทรสงคราม">สมุทรสงคราม</option>
                                                    <option value ="สมุทรสาคร">สมุทรสาคร</option>
                                                    <option value ="สระแก้ว">สระแก้ว</option>
                                                    <option value ="สระบุรี">สระบุรี</option>
                                                    <option value ="สิงห์บุรี">สิงห์บุรี</option>
                                                    <option value ="สุโขทัย">สุโขทัย</option>
                                                    <option value ="สุพรรณบุรี">สุพรรณบุรี</option>
                                                    <option value ="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                                    <option value ="สุรินทร์">สุรินทร์</option>
                                                    <option value ="หนองคาย">หนองคาย</option>
                                                    <option value ="หนองบัวลำภู">หนองบัวลำภู</option>
                                                    <option value ="อ่างทอง">อ่างทอง</option>
                                                    <option value ="อุดรธานี">อุดรธานี</option>
                                                    <option value ="อุทัยธานี">อุทัยธานี</option>
                                                    <option value ="อุตรดิตถ์">อุตรดิตถ์</option>
                                                    <option value ="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option value ="อำนาจเจริญ">อำนาจเจริญ</option>
                                                    <option value ="other">อื่นๆ</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="zip_cord_parent_2" id="zip_cord_parent_2" placeholder="รหัสไปรษณีย์ (Zip code)" value=<?php echo $data[0]['Parent_Zipcode']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name='tel_parent_2' id='tel_parent_2' placeholder="โทรศัพท์ (Tel.)" value=<?php echo $data[0]['Parent_Tel']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="fax_parent_2" id="fax_parent_2" placeholder="โทรสาร (Fax)" value=<?php echo $data[0]['Parent_Tel']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="email_parent_2" id="email_parent_2" placeholder="E-mail" value=<?php echo $data[0]['Parent_Email']; ?>>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <h3>ข้อมูลพี่น้อง</h3>

                                    <div class="row clearfix" id='sibling'>

                                        <div class="col-md-6" >
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" name="no_of_relatives_2" id="relatives_number" placeholder="จำนวนพี่น้อง (No. of relatives)" onfocusout="sibling(this.value)" value=''>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" name="you_are_the_2" placeholder="เป็นบุตรคนที่ (You are the)" value=''>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                            </section>

                            <h2>EDUCATION BACKGROUND</h2>
                            <section>
                               <h3>ประถม (Primary)</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="primary_name_3" placeholder="สถานศึกษา (School / College / University)" value=<?php echo $data[0]['Edu_pri_school']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name = "primary_province_3" id = "primary_province_3" class="form-line form-control show-tick">
                                                    <option value =''>จังหวัด (Province)</option>
                                                    <option value ="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option value ="กระบี่">กระบี่</option>
                                                    <option value ="กาญจนบุรี">กาญจนบุรี</option>
                                                    <option value ="กาฬสินธุ์">กาฬสินธุ์</option>
                                                    <option value ="กำแพงเพชร">กำแพงเพชร</option>
                                                    <option value ="ขอนแก่น">ขอนแก่น</option>
                                                    <option value ="จันทบุรี">จันทบุรี</option>
                                                    <option value ="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                                    <option value ="ชลบุรี">ชลบุรี</option>
                                                    <option value ="ชัยนาท">ชัยนาท</option>
                                                    <option value ="ชัยภูมิ">ชัยภูมิ</option>
                                                    <option value ="ชุมพร">ชุมพร</option>
                                                    <option value ="เชียงราย">เชียงราย</option>
                                                    <option value ="เชียงใหม่">เชียงใหม่</option>
                                                    <option value ="ตรัง">ตรัง</option>
                                                    <option value ="ตราด">ตราด</option>
                                                    <option value ="ตาก">ตาก</option>
                                                    <option value ="นครนายก">นครนายก</option>
                                                    <option value ="นครปฐม">นครปฐม</option>
                                                    <option value ="นครพนม">นครพนม</option>
                                                    <option value ="นครราชสีมา">นครราชสีมา</option>
                                                    <option value ="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                                    <option value ="นครสวรรค์">นครสวรรค์</option>
                                                    <option value ="นนทบุรี">นนทบุรี</option>
                                                    <option value ="นราธิวาส">นราธิวาส</option>
                                                    <option value ="น่าน">น่าน</option>
                                                    <option value ="บึงกาฬ">บึงกาฬ</option>
                                                    <option value ="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option value ="ปทุมธานี">ปทุมธานี</option>
                                                    <option value ="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                                    <option value ="ปราจีนบุรี">ปราจีนบุรี</option>
                                                    <option value ="ปัตตานี">ปัตตานี</option>
                                                    <option value ="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                                    <option value ="พังงา">พังงา</option>
                                                    <option value ="พัทลุง">พัทลุง</option>
                                                    <option value ="พิจิตร">พิจิตร</option>
                                                    <option value ="พิษณุโลก">พิษณุโลก</option>
                                                    <option value ="เพชรบุรี">เพชรบุรี</option>
                                                    <option value ="เพชรบูรณ์">เพชรบูรณ์</option>
                                                    <option value ="แพร่">แพร่</option>
                                                    <option value ="พะเยา">พะเยา</option>
                                                    <option value ="ภูเก็ต" selected="selected">ภูเก็ต</option>
                                                    <option value ="มหาสารคาม">มหาสารคาม</option>
                                                    <option value ="มุกดาหาร">มุกดาหาร</option>
                                                    <option value ="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                                    <option value ="ยะลา">ยะลา</option>
                                                    <option value ="ยโสธร">ยโสธร</option>
                                                    <option value ="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                                    <option value ="ระนอง">ระนอง</option>
                                                    <option value ="ระยอง">ระยอง</option>
                                                    <option value ="ราชบุรี">ราชบุรี</option>
                                                    <option value ="ลพบุรี">ลพบุรี</option>
                                                    <option value ="ลำปาง">ลำปาง</option>
                                                    <option value ="ลำพูน">ลำพูน</option>
                                                    <option value ="เลย">เลย</option>
                                                    <option value ="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option value ="สกลนคร">สกลนคร</option>
                                                    <option value ="สงขลา">สงขลา</option>
                                                    <option value ="สตูล">สตูล</option>
                                                    <option value ="สมุทรปราการ">สมุทรปราการ</option>
                                                    <option value ="สมุทรสงคราม">สมุทรสงคราม</option>
                                                    <option value ="สมุทรสาคร">สมุทรสาคร</option>
                                                    <option value ="สระแก้ว">สระแก้ว</option>
                                                    <option value ="สระบุรี">สระบุรี</option>
                                                    <option value ="สิงห์บุรี">สิงห์บุรี</option>
                                                    <option value ="สุโขทัย">สุโขทัย</option>
                                                    <option value ="สุพรรณบุรี">สุพรรณบุรี</option>
                                                    <option value ="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                                    <option value ="สุรินทร์">สุรินทร์</option>
                                                    <option value ="หนองคาย">หนองคาย</option>
                                                    <option value ="หนองบัวลำภู">หนองบัวลำภู</option>
                                                    <option value ="อ่างทอง">อ่างทอง</option>
                                                    <option value ="อุดรธานี">อุดรธานี</option>
                                                    <option value ="อุทัยธานี">อุทัยธานี</option>
                                                    <option value ="อุตรดิตถ์">อุตรดิตถ์</option>
                                                    <option value ="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option value ="อำนาจเจริญ">อำนาจเจริญ</option>
                                                    <option value ="other">อื่นๆ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="primary_year_attended_3" placeholder="ปีที่เริ่ม (Year attended)" value=<?php echo $data[0]['Edu_pri_YearAttend']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="primary_year_graduated_3" placeholder="ปีที่จบ (Year graduated)" value=<?php echo $data[0]['Edu_pri_YearGraduate']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="primary_major_3" placeholder="แผนการเรียน / สาขาวิชา (Major)" value=<?php echo $data[0]['Edu_pri_major']; ?>>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <h3>มัธยมต้น (Secondary)</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="secondary_name_3" placeholder="สถานศึกษา (School / College / University)" value=<?php echo $data[0]['Edu_sec_school']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name = "secondary_province_3" id = "secondary_province_3" class="form-line form-control show-tick">
                                                    <option value =''>จังหวัด (Province)</option>
                                                    <option value ="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option value ="กระบี่">กระบี่</option>
                                                    <option value ="กาญจนบุรี">กาญจนบุรี</option>
                                                    <option value ="กาฬสินธุ์">กาฬสินธุ์</option>
                                                    <option value ="กำแพงเพชร">กำแพงเพชร</option>
                                                    <option value ="ขอนแก่น">ขอนแก่น</option>
                                                    <option value ="จันทบุรี">จันทบุรี</option>
                                                    <option value ="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                                    <option value ="ชลบุรี">ชลบุรี</option>
                                                    <option value ="ชัยนาท">ชัยนาท</option>
                                                    <option value ="ชัยภูมิ">ชัยภูมิ</option>
                                                    <option value ="ชุมพร">ชุมพร</option>
                                                    <option value ="เชียงราย">เชียงราย</option>
                                                    <option value ="เชียงใหม่">เชียงใหม่</option>
                                                    <option value ="ตรัง">ตรัง</option>
                                                    <option value ="ตราด">ตราด</option>
                                                    <option value ="ตาก">ตาก</option>
                                                    <option value ="นครนายก">นครนายก</option>
                                                    <option value ="นครปฐม">นครปฐม</option>
                                                    <option value ="นครพนม">นครพนม</option>
                                                    <option value ="นครราชสีมา">นครราชสีมา</option>
                                                    <option value ="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                                    <option value ="นครสวรรค์">นครสวรรค์</option>
                                                    <option value ="นนทบุรี">นนทบุรี</option>
                                                    <option value ="นราธิวาส">นราธิวาส</option>
                                                    <option value ="น่าน">น่าน</option>
                                                    <option value ="บึงกาฬ">บึงกาฬ</option>
                                                    <option value ="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option value ="ปทุมธานี">ปทุมธานี</option>
                                                    <option value ="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                                    <option value ="ปราจีนบุรี">ปราจีนบุรี</option>
                                                    <option value ="ปัตตานี">ปัตตานี</option>
                                                    <option value ="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                                    <option value ="พังงา">พังงา</option>
                                                    <option value ="พัทลุง">พัทลุง</option>
                                                    <option value ="พิจิตร">พิจิตร</option>
                                                    <option value ="พิษณุโลก">พิษณุโลก</option>
                                                    <option value ="เพชรบุรี">เพชรบุรี</option>
                                                    <option value ="เพชรบูรณ์">เพชรบูรณ์</option>
                                                    <option value ="แพร่">แพร่</option>
                                                    <option value ="พะเยา">พะเยา</option>
                                                    <option value ="ภูเก็ต" selected="selected">ภูเก็ต</option>
                                                    <option value ="มหาสารคาม">มหาสารคาม</option>
                                                    <option value ="มุกดาหาร">มุกดาหาร</option>
                                                    <option value ="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                                    <option value ="ยะลา">ยะลา</option>
                                                    <option value ="ยโสธร">ยโสธร</option>
                                                    <option value ="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                                    <option value ="ระนอง">ระนอง</option>
                                                    <option value ="ระยอง">ระยอง</option>
                                                    <option value ="ราชบุรี">ราชบุรี</option>
                                                    <option value ="ลพบุรี">ลพบุรี</option>
                                                    <option value ="ลำปาง">ลำปาง</option>
                                                    <option value ="ลำพูน">ลำพูน</option>
                                                    <option value ="เลย">เลย</option>
                                                    <option value ="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option value ="สกลนคร">สกลนคร</option>
                                                    <option value ="สงขลา">สงขลา</option>
                                                    <option value ="สตูล">สตูล</option>
                                                    <option value ="สมุทรปราการ">สมุทรปราการ</option>
                                                    <option value ="สมุทรสงคราม">สมุทรสงคราม</option>
                                                    <option value ="สมุทรสาคร">สมุทรสาคร</option>
                                                    <option value ="สระแก้ว">สระแก้ว</option>
                                                    <option value ="สระบุรี">สระบุรี</option>
                                                    <option value ="สิงห์บุรี">สิงห์บุรี</option>
                                                    <option value ="สุโขทัย">สุโขทัย</option>
                                                    <option value ="สุพรรณบุรี">สุพรรณบุรี</option>
                                                    <option value ="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                                    <option value ="สุรินทร์">สุรินทร์</option>
                                                    <option value ="หนองคาย">หนองคาย</option>
                                                    <option value ="หนองบัวลำภู">หนองบัวลำภู</option>
                                                    <option value ="อ่างทอง">อ่างทอง</option>
                                                    <option value ="อุดรธานี">อุดรธานี</option>
                                                    <option value ="อุทัยธานี">อุทัยธานี</option>
                                                    <option value ="อุตรดิตถ์">อุตรดิตถ์</option>
                                                    <option value ="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option value ="อำนาจเจริญ">อำนาจเจริญ</option>
                                                    <option value ="other">อื่นๆ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="secondary_year_attended_3" placeholder="ปีที่เริ่ม (Year attended)" value=<?php echo $data[0]['Edu_sec_YearAttend']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="secondary_year_graduated_3" placeholder="ปีที่จบ (Year graduated)" value=<?php echo $data[0]['Edu_sec_YearGraduated']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="secondary_major_3" placeholder="แผนการเรียน / สาขาวิชา (Major)" value=<?php echo $data[0]['Edu_sec_major']; ?>>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <h3>มัธยมปลาย (High School)</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="high_school_name_3" placeholder="สถานศึกษา (School / College / University)" value=<?php echo $data[0]['Edu_high_school']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name = "high_school_province_3" id = "high_school_province_3" class="form-line form-control show-tick" >
                                                    <option value =''>จังหวัด (Province)</option>
                                                    <option value ="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option value ="กระบี่">กระบี่</option>
                                                    <option value ="กาญจนบุรี">กาญจนบุรี</option>
                                                    <option value ="กาฬสินธุ์">กาฬสินธุ์</option>
                                                    <option value ="กำแพงเพชร">กำแพงเพชร</option>
                                                    <option value ="ขอนแก่น">ขอนแก่น</option>
                                                    <option value ="จันทบุรี">จันทบุรี</option>
                                                    <option value ="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                                    <option value ="ชลบุรี">ชลบุรี</option>
                                                    <option value ="ชัยนาท">ชัยนาท</option>
                                                    <option value ="ชัยภูมิ">ชัยภูมิ</option>
                                                    <option value ="ชุมพร">ชุมพร</option>
                                                    <option value ="เชียงราย">เชียงราย</option>
                                                    <option value ="เชียงใหม่">เชียงใหม่</option>
                                                    <option value ="ตรัง">ตรัง</option>
                                                    <option value ="ตราด">ตราด</option>
                                                    <option value ="ตาก">ตาก</option>
                                                    <option value ="นครนายก">นครนายก</option>
                                                    <option value ="นครปฐม">นครปฐม</option>
                                                    <option value ="นครพนม">นครพนม</option>
                                                    <option value ="นครราชสีมา">นครราชสีมา</option>
                                                    <option value ="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                                    <option value ="นครสวรรค์">นครสวรรค์</option>
                                                    <option value ="นนทบุรี">นนทบุรี</option>
                                                    <option value ="นราธิวาส">นราธิวาส</option>
                                                    <option value ="น่าน">น่าน</option>
                                                    <option value ="บึงกาฬ">บึงกาฬ</option>
                                                    <option value ="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option value ="ปทุมธานี">ปทุมธานี</option>
                                                    <option value ="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                                    <option value ="ปราจีนบุรี">ปราจีนบุรี</option>
                                                    <option value ="ปัตตานี">ปัตตานี</option>
                                                    <option value ="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                                    <option value ="พังงา">พังงา</option>
                                                    <option value ="พัทลุง">พัทลุง</option>
                                                    <option value ="พิจิตร">พิจิตร</option>
                                                    <option value ="พิษณุโลก">พิษณุโลก</option>
                                                    <option value ="เพชรบุรี">เพชรบุรี</option>
                                                    <option value ="เพชรบูรณ์">เพชรบูรณ์</option>
                                                    <option value ="แพร่">แพร่</option>
                                                    <option value ="พะเยา">พะเยา</option>
                                                    <option value ="ภูเก็ต" selected="selected">ภูเก็ต</option>
                                                    <option value ="มหาสารคาม">มหาสารคาม</option>
                                                    <option value ="มุกดาหาร">มุกดาหาร</option>
                                                    <option value ="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                                    <option value ="ยะลา">ยะลา</option>
                                                    <option value ="ยโสธร">ยโสธร</option>
                                                    <option value ="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                                    <option value ="ระนอง">ระนอง</option>
                                                    <option value ="ระยอง">ระยอง</option>
                                                    <option value ="ราชบุรี">ราชบุรี</option>
                                                    <option value ="ลพบุรี">ลพบุรี</option>
                                                    <option value ="ลำปาง">ลำปาง</option>
                                                    <option value ="ลำพูน">ลำพูน</option>
                                                    <option value ="เลย">เลย</option>
                                                    <option value ="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option value ="สกลนคร">สกลนคร</option>
                                                    <option value ="สงขลา">สงขลา</option>
                                                    <option value ="สตูล">สตูล</option>
                                                    <option value ="สมุทรปราการ">สมุทรปราการ</option>
                                                    <option value ="สมุทรสงคราม">สมุทรสงคราม</option>
                                                    <option value ="สมุทรสาคร">สมุทรสาคร</option>
                                                    <option value ="สระแก้ว">สระแก้ว</option>
                                                    <option value ="สระบุรี">สระบุรี</option>
                                                    <option value ="สิงห์บุรี">สิงห์บุรี</option>
                                                    <option value ="สุโขทัย">สุโขทัย</option>
                                                    <option value ="สุพรรณบุรี">สุพรรณบุรี</option>
                                                    <option value ="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                                    <option value ="สุรินทร์">สุรินทร์</option>
                                                    <option value ="หนองคาย">หนองคาย</option>
                                                    <option value ="หนองบัวลำภู">หนองบัวลำภู</option>
                                                    <option value ="อ่างทอง">อ่างทอง</option>
                                                    <option value ="อุดรธานี">อุดรธานี</option>
                                                    <option value ="อุทัยธานี">อุทัยธานี</option>
                                                    <option value ="อุตรดิตถ์">อุตรดิตถ์</option>
                                                    <option value ="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option value ="อำนาจเจริญ">อำนาจเจริญ</option>
                                                    <option value ="other">อื่นๆ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="high_school_year_attended_3" placeholder="ปีที่เริ่ม (Year attended)" value=<?php echo $data[0]['Edu_high_YearAttend']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="high_school_year_graduated_3" placeholder="ปีที่จบ (Year graduated)" value=<?php echo $data[0]['Edu_high_YearGraduated']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="high_school_major_3" placeholder="แผนการเรียน / สาขาวิชา (Major)" value=<?php echo $data[0]['Edu_high_major']; ?>>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <h3>มหาวิทยาลัย (University)</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="university_name_3" placeholder="สถานศึกษา (School / College / University)" value=<?php echo $data[0]['Edu_uni']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name = "university_province_3" id = "university_province_3" class="form-line form-control show-tick">
                                                    <option value =''>จังหวัด (Province)</option>
                                                    <option value ="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option value ="กระบี่">กระบี่</option>
                                                    <option value ="กาญจนบุรี">กาญจนบุรี</option>
                                                    <option value ="กาฬสินธุ์">กาฬสินธุ์</option>
                                                    <option value ="กำแพงเพชร">กำแพงเพชร</option>
                                                    <option value ="ขอนแก่น">ขอนแก่น</option>
                                                    <option value ="จันทบุรี">จันทบุรี</option>
                                                    <option value ="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                                    <option value ="ชลบุรี">ชลบุรี</option>
                                                    <option value ="ชัยนาท">ชัยนาท</option>
                                                    <option value ="ชัยภูมิ">ชัยภูมิ</option>
                                                    <option value ="ชุมพร">ชุมพร</option>
                                                    <option value ="เชียงราย">เชียงราย</option>
                                                    <option value ="เชียงใหม่">เชียงใหม่</option>
                                                    <option value ="ตรัง">ตรัง</option>
                                                    <option value ="ตราด">ตราด</option>
                                                    <option value ="ตาก">ตาก</option>
                                                    <option value ="นครนายก">นครนายก</option>
                                                    <option value ="นครปฐม">นครปฐม</option>
                                                    <option value ="นครพนม">นครพนม</option>
                                                    <option value ="นครราชสีมา">นครราชสีมา</option>
                                                    <option value ="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                                    <option value ="นครสวรรค์">นครสวรรค์</option>
                                                    <option value ="นนทบุรี">นนทบุรี</option>
                                                    <option value ="นราธิวาส">นราธิวาส</option>
                                                    <option value ="น่าน">น่าน</option>
                                                    <option value ="บึงกาฬ">บึงกาฬ</option>
                                                    <option value ="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option value ="ปทุมธานี">ปทุมธานี</option>
                                                    <option value ="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                                    <option value ="ปราจีนบุรี">ปราจีนบุรี</option>
                                                    <option value ="ปัตตานี">ปัตตานี</option>
                                                    <option value ="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                                    <option value ="พังงา">พังงา</option>
                                                    <option value ="พัทลุง">พัทลุง</option>
                                                    <option value ="พิจิตร">พิจิตร</option>
                                                    <option value ="พิษณุโลก">พิษณุโลก</option>
                                                    <option value ="เพชรบุรี">เพชรบุรี</option>
                                                    <option value ="เพชรบูรณ์">เพชรบูรณ์</option>
                                                    <option value ="แพร่">แพร่</option>
                                                    <option value ="พะเยา">พะเยา</option>
                                                    <option value ="ภูเก็ต" selected="selected">ภูเก็ต</option>
                                                    <option value ="มหาสารคาม">มหาสารคาม</option>
                                                    <option value ="มุกดาหาร">มุกดาหาร</option>
                                                    <option value ="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                                    <option value ="ยะลา">ยะลา</option>
                                                    <option value ="ยโสธร">ยโสธร</option>
                                                    <option value ="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                                    <option value ="ระนอง">ระนอง</option>
                                                    <option value ="ระยอง">ระยอง</option>
                                                    <option value ="ราชบุรี">ราชบุรี</option>
                                                    <option value ="ลพบุรี">ลพบุรี</option>
                                                    <option value ="ลำปาง">ลำปาง</option>
                                                    <option value ="ลำพูน">ลำพูน</option>
                                                    <option value ="เลย">เลย</option>
                                                    <option value ="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option value ="สกลนคร">สกลนคร</option>
                                                    <option value ="สงขลา">สงขลา</option>
                                                    <option value ="สตูล">สตูล</option>
                                                    <option value ="สมุทรปราการ">สมุทรปราการ</option>
                                                    <option value ="สมุทรสงคราม">สมุทรสงคราม</option>
                                                    <option value ="สมุทรสาคร">สมุทรสาคร</option>
                                                    <option value ="สระแก้ว">สระแก้ว</option>
                                                    <option value ="สระบุรี">สระบุรี</option>
                                                    <option value ="สิงห์บุรี">สิงห์บุรี</option>
                                                    <option value ="สุโขทัย">สุโขทัย</option>
                                                    <option value ="สุพรรณบุรี">สุพรรณบุรี</option>
                                                    <option value ="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                                    <option value ="สุรินทร์">สุรินทร์</option>
                                                    <option value ="หนองคาย">หนองคาย</option>
                                                    <option value ="หนองบัวลำภู">หนองบัวลำภู</option>
                                                    <option value ="อ่างทอง">อ่างทอง</option>
                                                    <option value ="อุดรธานี">อุดรธานี</option>
                                                    <option value ="อุทัยธานี">อุทัยธานี</option>
                                                    <option value ="อุตรดิตถ์">อุตรดิตถ์</option>
                                                    <option value ="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option value ="อำนาจเจริญ">อำนาจเจริญ</option>
                                                    <option value ="other">อื่นๆ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="university_year_attended_3" placeholder="ปีที่เริ่ม (Year attended)" value=<?php echo $data[0]['Edu_uni_YearAttend']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="university_year_graduated_3" placeholder="ปีที่จบ (Year graduated)" value=<?php echo $data[0]['Edu_uni_Graduated']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="university_major_3" placeholder="แผนการเรียน / สาขาวิชา (Major)" value=<?php echo $data[0]['Edu_uni_major']; ?>>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </section>

                            <h2>PREVIOUS TRAINING</h2>
                                <section>
                                    <h3>PREVIOUS TRAINING</h3>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" name="previous_training_year_from_3" placeholder="ระยะเวลาจาก (Year Trained From)" value=<?php echo $data[0]['Pre_trained_YearFrom']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" name="previous_training_year_to_3" placeholder="ระยะเวลาถึง (Year Trained To)" value=<?php echo $data[0]['Pre_trained_Yearto']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="previous_training_jobdescription_3" placeholder="ตำแหน่ง/หัวข้ออบรม/หน้าที่ (Position/Topics/Job title/Job description)" value=<?php echo $data[0]['Pre_trained_Position']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name = "previous_training_province_3" id = "previous_training_province_3" class="form-line form-control show-tick" >
                                                    <option value =''>จังหวัด (Province)</option>
                                                    <option value ="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option value ="กระบี่">กระบี่</option>
                                                    <option value ="กาญจนบุรี">กาญจนบุรี</option>
                                                    <option value ="กาฬสินธุ์">กาฬสินธุ์</option>
                                                    <option value ="กำแพงเพชร">กำแพงเพชร</option>
                                                    <option value ="ขอนแก่น">ขอนแก่น</option>
                                                    <option value ="จันทบุรี">จันทบุรี</option>
                                                    <option value ="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                                    <option value ="ชลบุรี">ชลบุรี</option>
                                                    <option value ="ชัยนาท">ชัยนาท</option>
                                                    <option value ="ชัยภูมิ">ชัยภูมิ</option>
                                                    <option value ="ชุมพร">ชุมพร</option>
                                                    <option value ="เชียงราย">เชียงราย</option>
                                                    <option value ="เชียงใหม่">เชียงใหม่</option>
                                                    <option value ="ตรัง">ตรัง</option>
                                                    <option value ="ตราด">ตราด</option>
                                                    <option value ="ตาก">ตาก</option>
                                                    <option value ="นครนายก">นครนายก</option>
                                                    <option value ="นครปฐม">นครปฐม</option>
                                                    <option value ="นครพนม">นครพนม</option>
                                                    <option value ="นครราชสีมา">นครราชสีมา</option>
                                                    <option value ="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                                    <option value ="นครสวรรค์">นครสวรรค์</option>
                                                    <option value ="นนทบุรี">นนทบุรี</option>
                                                    <option value ="นราธิวาส">นราธิวาส</option>
                                                    <option value ="น่าน">น่าน</option>
                                                    <option value ="บึงกาฬ">บึงกาฬ</option>
                                                    <option value ="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option value ="ปทุมธานี">ปทุมธานี</option>
                                                    <option value ="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                                    <option value ="ปราจีนบุรี">ปราจีนบุรี</option>
                                                    <option value ="ปัตตานี">ปัตตานี</option>
                                                    <option value ="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                                    <option value ="พังงา">พังงา</option>
                                                    <option value ="พัทลุง">พัทลุง</option>
                                                    <option value ="พิจิตร">พิจิตร</option>
                                                    <option value ="พิษณุโลก">พิษณุโลก</option>
                                                    <option value ="เพชรบุรี">เพชรบุรี</option>
                                                    <option value ="เพชรบูรณ์">เพชรบูรณ์</option>
                                                    <option value ="แพร่">แพร่</option>
                                                    <option value ="พะเยา">พะเยา</option>
                                                    <option value ="ภูเก็ต" selected="selected">ภูเก็ต</option>
                                                    <option value ="มหาสารคาม">มหาสารคาม</option>
                                                    <option value ="มุกดาหาร">มุกดาหาร</option>
                                                    <option value ="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                                    <option value ="ยะลา">ยะลา</option>
                                                    <option value ="ยโสธร">ยโสธร</option>
                                                    <option value ="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                                    <option value ="ระนอง">ระนอง</option>
                                                    <option value ="ระยอง">ระยอง</option>
                                                    <option value ="ราชบุรี">ราชบุรี</option>
                                                    <option value ="ลพบุรี">ลพบุรี</option>
                                                    <option value ="ลำปาง">ลำปาง</option>
                                                    <option value ="ลำพูน">ลำพูน</option>
                                                    <option value ="เลย">เลย</option>
                                                    <option value ="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option value ="สกลนคร">สกลนคร</option>
                                                    <option value ="สงขลา">สงขลา</option>
                                                    <option value ="สตูล">สตูล</option>
                                                    <option value ="สมุทรปราการ">สมุทรปราการ</option>
                                                    <option value ="สมุทรสงคราม">สมุทรสงคราม</option>
                                                    <option value ="สมุทรสาคร">สมุทรสาคร</option>
                                                    <option value ="สระแก้ว">สระแก้ว</option>
                                                    <option value ="สระบุรี">สระบุรี</option>
                                                    <option value ="สิงห์บุรี">สิงห์บุรี</option>
                                                    <option value ="สุโขทัย">สุโขทัย</option>
                                                    <option value ="สุพรรณบุรี">สุพรรณบุรี</option>
                                                    <option value ="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                                    <option value ="สุรินทร์">สุรินทร์</option>
                                                    <option value ="หนองคาย">หนองคาย</option>
                                                    <option value ="หนองบัวลำภู">หนองบัวลำภู</option>
                                                    <option value ="อ่างทอง">อ่างทอง</option>
                                                    <option value ="อุดรธานี">อุดรธานี</option>
                                                    <option value ="อุทัยธานี">อุทัยธานี</option>
                                                    <option value ="อุตรดิตถ์">อุตรดิตถ์</option>
                                                    <option value ="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option value ="อำนาจเจริญ">อำนาจเจริญ</option>
                                                    <option value ="other">อื่นๆ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="previous_training_organization_3" placeholder="สถานที่ฝึก (Organization)" value=<?php echo $data[0]['Pre_trained_Organization']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>

                            <h2>CAREER OBJECTIVES</h2>
                            <section>
                                <h3>ระบุสายงานลักษณะงานอาชีพที่นักศึกษาสนใจ(Indicate your career object, field
                                        of interest and job preference)</h3>

                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="career_objectives_3_1" placeholder="1." value=<?php echo $data[0]['Career_objective1']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="career_objectives_3_2" placeholder="2." value=<?php echo $data[0]['Career_objective2']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="career_objectives_3_3" placeholder="3." value=<?php echo $data[0]['Career_objective3']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="career_objectives_3_4" placeholder="4. " value=<?php echo $data[0]['Career_objective4']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </section>

                            <h2>STUDENT ACTIVITIES</h2>
                            <section>
                                <h3>STUDENT ACTIVITIES</h3>
                                <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="" placeholder="1.ระยะเวลา(Years)" value=''>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="" placeholder="ตำแหน่งและหน้าที่(Position /Responsibility)" value=''>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="" placeholder="2.ระยะเวลา(Years)" value=''>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="" placeholder="ตำแหน่งและหน้าที่(Position /Responsibility)" value=''>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="" placeholder="3.ระยะเวลา(Years)" value=''>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="" placeholder="ตำแหน่งและหน้าที่(Position /Responsibility)" value=''>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </section>

                            <h2>LANGUAGE ABILITY</h2>
                            <section>
                            <h3>LANGUAGE ABILITY</h3>
                                <div class="panel-body">
                            <table  class="table" style="margin-bottom:-35px">
                                <thead>
                                    <tr>
                                        <th>ภาษา (Language)</th>
                                        <th>
                                            <center>ฟัง (Listening)</center>
                                        </th>
                                        <th>
                                            <center>พูด (Speaking)</center>
                                        </th>
                                        <th>
                                            <center>อ่าน (Reading)</center>
                                        </th>
                                        <th>
                                            <center>เขียน (Writing)</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> อังกฤษ (English)</td>
                                        <td>

                                            <input name="listen-eng" type="radio" id="listen-eng1" class="radio-col-red "  value="Good">
                                            <label for="listen-eng1">Good</label>
                                            <input name="listen-eng" type="radio" id="listen-eng2" class="radio-col-pink " value="Fair">
                                            <label for="listen-eng2">Fair</label>
                                            <input name="listen-eng" type="radio" id="listen-eng3" class="radio-col-purple " value="Poor">
                                            <label for="listen-eng3">Poor</label>

                                        </td>
                                        <td>
                                          <input name="speak-eng" type="radio" id="speak-eng1" class="radio-col-red " value="Good" >
                                          <label for="speak-eng1">G</label>
                                          <input name="speak-eng" type="radio" id="speak-eng2" class="radio-col-pink " value="Fair">
                                          <label for="speak-eng2">F</label>
                                          <input name="speak-eng" type="radio" id="speak-eng3" class="radio-col-purple "value="Poor">
                                          <label for="speak-eng3">P</label>
                                        </td>
                                        <td>
                                          <input name="read-eng" type="radio" id="read-eng1" class="radio-col-red " value="Good" >
                                          <label for="read-eng1">G</label>
                                          <input name="read-eng" type="radio" id="read-eng2" class="radio-col-pink " value="Fair">
                                          <label for="read-eng2">F</label>
                                          <input name="read-eng" type="radio" id="read-eng3" class="radio-col-purple " value="Poor">
                                          <label for="read-eng3">P</label>
                                        </td>
                                        <td>
                                          <input name="write-eng" type="radio" id="write-eng1" class="radio-col-red " value="Good" >
                                          <label for="write-eng1">G</label>
                                          <input name="write-eng" type="radio" id="write-eng2" class="radio-col-pink " value="Fair">
                                          <label for="write-eng2">F</label>
                                          <input name="write-eng" type="radio" id="write-eng3" class="radio-col-purple " value="Poor">
                                          <label for="write-eng3">P</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>  จีน (Chinese)</td>
                                        <td>

                                            <input name="listen-ch" type="radio" id="listen-ch1" class="radio-col-red " value="Good">
                                            <label for="listen-ch1">Good</label>
                                            <input name="listen-ch" type="radio" id="listen-ch2" class="radio-col-pink " value="Fair">
                                            <label for="listen-ch2">Fair</label>
                                            <input name="listen-ch" type="radio" id="listen-ch3" class="radio-col-purple " value="Poor">
                                            <label for="listen-ch3">Poor</label>

                                        </td>
                                        <td>
                                          <input name="speak-ch" type="radio" id="speak-ch1" class="radio-col-red " value="Good" >
                                          <label for="speak-ch1">G</label>
                                          <input name="speak-ch" type="radio" id="speak-ch2" class="radio-col-pink " value="Fair">
                                          <label for="speak-ch2">F</label>
                                          <input name="speak-ch" type="radio" id="speak-ch3" class="radio-col-purple " value="Poor">
                                          <label for="speak-ch3">P</label>
                                        </td>
                                        <td>
                                          <input name="read-ch" type="radio" id="read-ch1" class="radio-col-red " value="Good">
                                          <label for="read-ch1">G</label>
                                          <input name="read-ch" type="radio" id="read-ch2" class="radio-col-pink " value="Fair">
                                          <label for="read-ch2">F</label>
                                          <input name="read-ch" type="radio" id="read-ch3" class="radio-col-purple " value="Poor">
                                          <label for="read-ch3">P</label>
                                        </td>
                                        <td>
                                          <input name="write-ch" type="radio" id="write-ch1" class="radio-col-red " value="Good" >
                                          <label for="write-ch1">G</label>
                                          <input name="write-ch" type="radio" id="write-ch2" class="radio-col-pink " value="Fair">
                                          <label for="write-ch2">F</label>
                                          <input name="write-ch" type="radio" id="write-ch3" class="radio-col-purple " value="Poor">
                                          <label for="write-ch3">P</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                          <input type="checkbox" name="other_checkbox" id="other_checkbox" onclick="$('#other_lan').show(300),$('#other_lan_listen').show(300),$('#other_lan_read').show(300),$('#other_lan_write').show(300),$('#other_lan_speak').show(300)"> <label for="other_checkbox"> อื่นๆ(Other)</label>
                                            <input type="text" id="other_lan" class="form-control" name="other_lan" value = "" style="display:none" placeholder="ระบุ">
                                        </td>
                                        <td >

                                          <div class="" id="other_lan_listen" style="display:none">
                                            <input name="listen-oth" type="radio" id="listen-oth1" class="radio-col-red " value="Good" >
                                            <label for="listen-oth1">Good</label>
                                            <input name="listen-oth" type="radio" id="listen-oth2" class="radio-col-pink " value="Fair">
                                            <label for="listen-oth2">Fair</label>
                                            <input name="listen-oth" type="radio" id="listen-oth3" class="radio-col-purple " value="Poor">
                                            <label for="listen-oth3">Poor</label>
                                          </div>

                                        </td>
                                        <td>
                                          <div class="" id="other_lan_speak" style="display:none">
                                            <input name="speak-oth" type="radio" id="speak-oth1" class="radio-col-red "value="Good" >
                                            <label for="speak-oth1">G</label>
                                            <input name="speak-oth" type="radio" id="speak-oth2" class="radio-col-pink "value="Fair">
                                            <label for="speak-oth2">F</label>
                                            <input name="speak-oth" type="radio" id="speak-oth3" class="radio-col-purple "value="Poor">
                                            <label for="speak-oth3">P</label>

                                          </div>

                                        </td>
                                        <td>
                                          <div class="" id="other_lan_read" style="display:none">
                                            <input name="read-oth" type="radio" id="read-oth1" class="radio-col-red " value="Good">
                                            <label for="read-oth1">G</label>
                                            <input name="read-oth" type="radio" id="read-oth2" class="radio-col-pink "value="Fair">
                                            <label for="read-oth2">F</label>
                                            <input name="read-oth" type="radio" id="read-oth3" class="radio-col-purple "value="Poor">
                                            <label for="read-oth3">P</label>
                                          </div>

                                        </td>
                                        <td>
                                          <div class="" id="other_lan_write" style="display:none">
                                            <input name="write-oth" type="radio" id="write-oth1" class="radio-col-red "value="Good" >
                                            <label for="write-oth1">G</label>
                                            <input name="write-oth" type="radio" id="write-oth2" class="radio-col-pink "value="Fair">
                                            <label for="write-oth2">F</label>
                                            <input name="write-oth" type="radio" id="write-oth3" class="radio-col-purple "value="Poor">
                                            <label for="write-oth3">P</label>
                                          </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="well" style="text-align: center; padding-top:10px; padding-bottom:50px; margin-top:40px;">
                                <div class="col-md-12" style="font-weight:bold;">Note</div>
                                <div class="col-md-4">G = Good</div>
                                <div class="col-md-4">F = Fair</div>
                                <div class="col-md-4">P = Poor</div>
                            </div>
                            </div>
                            </section>

                            <h2>SPECIAL ABILITY AND HONOR RECEIVED</h2>
                            <section>
                                <h3>SPECIAL ABILITY AND HONOR RECEIVED</h3>

                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="special_ability_4_1" placeholder="1." value=<?php echo $data[0]['Specail_ability_1']; ?>>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="special_ability_4_2" placeholder="2." value=<?php echo $data[0]['Specail_ability_2']; ?>>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="special_ability_4_3" placeholder="3." value=<?php echo $data[0]['Specail_ability_3']; ?>>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </section>

                            <h2>OTHER SKILLS</h2>
                            <section>
                                <h3>OTHER SKILLS</h3>
                                   <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="computerized_ability_4_1" placeholder="ความสามารถทางคอมพิวเตอร์ (Computerized ability)" value=<?php echo $data[0]['Other_skill_computer']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="sport_4_1" placeholder="กีฬา (Sport)" value=<?php echo $data[0]['Other_skill_sport']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="hobbies_4_1" placeholder="งานอดิเรก (Hobbies)" value=<?php echo $data[0]['Other_skill_Hobbies']; ?>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <h3>ใบขับขี่</h3>
                                    <div class="row clearfix">
                                        <div class="col-md-6 demo-checkbox">
                                            <input type="checkbox" id="basic_checkbox_1" class="filled-in" />
                                            <label for="basic_checkbox_1">รถยนต์ (Car)</label>

                                            <div class="col-md-6 form-group">

                                                <div class="form-line">
                                                        <input type="text" class="form-control" name="car_license_no_4_1" placeholder="ใบอนุญาติเลขที่ (Driver license no.)" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 demo-checkbox">
                                            <input type="checkbox" id="basic_checkbox_2" class="filled-in" />
                                            <label for="basic_checkbox_2">รถจักรยานยนต์ (Motor cycle)</label>

                                                <div class="col-md-6 form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="motorcycle_license_no_4_1" placeholder="ใบอนุญาติเลขที่ (Driver license no.)">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </section>

                            <h2>EXPLAIN ABOUT YOURSELF</h2>
                            <section>
                                <h3>โปรดอธิบายให้ผู้อื่นรู้จักตัวท่านดีขึ้น (Please explain about yourself
                                        to make other people understand you better)</h3>
                                   <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea class="form-control "
                                    rows="10" name="explain_about_yourself" value=<?php echo $data[0]['Explain_yourself']; ?>><?php echo $data[0]['Explain_yourself']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </section>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- #END# Basic Example | Vertical Layout -->
            <script type="text/javascript">

            function parentdata(id) {

              document.getElementById('parent_name_2').value = document.getElementById(id+'_name_2').value
              document.getElementById('age_parent_2').value = document.getElementById('age_'+id+'_2').value
              document.getElementById('occupation_parent_2').value = document.getElementById('occupation_'+id+'_2').value
              document.getElementById('address_parent_2').value = document.getElementById('address_'+id+'_2').value
              document.getElementById('moo_parent_2').value = document.getElementById('moo_'+id+'_2').value
              document.getElementById('soi_patent_2').value = document.getElementById('soi_'+id+'_2').value
              document.getElementById('sub_district_parent_2').value = document.getElementById('sub_district_'+id+'_2').value
              document.getElementById('district_parent_2').value = document.getElementById('district_'+id+'_2').value
              document.getElementById('province_parent_2').value = document.getElementById('province_'+id+'_2').value
              document.getElementById('zip_cord_parent_2').value = document.getElementById('zip_cord_'+id+'_2').value
              document.getElementById('tel_parent_2').value = document.getElementById('tel_'+id+'_2').value
              document.getElementById('fax_parent_2').value = document.getElementById('fax_'+id+'_2').value
              document.getElementById('email_parent_2').value = document.getElementById('email_'+id+'_2').value

            }
            function sibling(number) {

              for (var i = 0; i < number; i++) {
                let div = document.createElement('DIV')
                div.className  = 'form-group col-md-4'

                let div01 = document.createElement('DIV')
                div01.className  = 'form-group col-md-4'

                let div02 = document.createElement('DIV')
                div02.className  = 'form-group col-md-4'

                let div2 =document.createElement('DIV')
                div2.className  = 'form-line'

                let div3 =document.createElement('DIV')
                div3.className  = 'form-line'

                let div4 =document.createElement('DIV')
                div4.className  = 'form-line'

                let name = document.createElement('INPUT')
                name.type = 'text'
                name.id = 'name'+i
                name.className  = 'form-control'
                name.placeholder = 'ชื่อ'
                name.name = 'name'+i

                let sname =document.createElement('INPUT')
                sname.type = 'text'
                sname.id = 'sname'+i
                sname.className  = 'form-control'
                sname.placeholder = 'นามสกุล'
                sname.name = 'sname'+i

                let tel =document.createElement('INPUT')
                tel.type = 'text'
                tel.id = 'tel'+i
                tel.className  = 'form-control'
                tel.placeholder = 'เบอร์โทรศัพท์'
                tel.name = 'tel'+i

                div.append(div2)
                div01.append(div3)
                div02.append(div4)
                div2.append(name)
                div3.append(sname)
                div4.append(tel)
                // div2.append(sname)
                // div2.append(tel)
                document.getElementById('sibling').append(div,div01,div02)

              }

            }

            </script>
