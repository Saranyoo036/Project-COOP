<!-- teacher function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Teacher <?php echo $nameFac; ?></h2>

			<ul class="breadcrumb">

				<a id="btnSelectedRows" class='btn btn-raised btn-info waves-effect' href="#">Assign Aprove teacher</a>
				<input type = "hidden" id = "type"  value="<?php echo $type;?>">
 				<input type = "hidden" id = "major"  value="<?php echo $nameMaj;?>">
 				<input type = "hidden" id = "fac"  value="<?php echo $nameFac;?>">

				<?php
					$this->db->select('*');
					$this->db->from('major_setting');
					$this->db->where("major_type='$type'
								AND major_id = (SELECT major_id from `major`
												WHERE NameMajor_sub = '$nameMaj')
								AND status_id = '3'
								AND personnelID!='NULL'");
					$MajRes = $this->db->get();

					if($MajRes->result()){

						$aprover = "SELECT *
    						FROM `major_setting`,`personnel`
    						WHERE major_id=(
        						SELECT major_id
        						from major
        						where NameMajor_sub = '$nameMaj')
        					AND major_setting.personnelID = personnel.personnelID
    						AND major_type = '$type'
    						AND status_id = '3' ";

    						$sum = $this->db->query($aprover);
    						$aprove = $sum->row();
						?>
						<h2>approvers</h2>
						<table class="table table-hover table-bordered  table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Major</th>
                                        <th>TYPE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $aprove->personnelID;?></td>
                                        <td><?php echo $aprove->title;?></td>
                                        <td><?php echo $aprove->personnelName." ".$aprove->personnelSName;?></td>
                                        <td><?php echo $nameMaj;?></td>
                                        <td><?php echo $type;?></td>
                                    </tr>
                                </tbody>
                            </table>
						<?php
						$que = "SELECT * FROM `personnel`,`faculty`
						WHERE faculty.Fac_ID = personnel.Fac_ID
						AND faculty.NameFac_sub = '$nameFac'
						AND personnel.Position='lecture'
						AND personnel.personnelID!=(
							SELECT personnelID
    						FROM `major_setting`
    						WHERE major_id=(
        						SELECT major_id
        						from major
        						where NameMajor_sub = '$nameMaj')
    						AND major_type = '$type'
    						AND status_id = '3' )";
					}else{

						$que = "SELECT * FROM `personnel`,`faculty`
						WHERE faculty.Fac_ID = personnel.Fac_ID
						AND faculty.NameFac_sub = '$nameFac'
						AND personnel.Position='lecture'";
					}

				?>
				<table  id="example" border = "0" style="width:100%">


					<thead>
					 <tr>
							 <td></td>
							 <td>ID</td>
							 <td>Title</td>
							 <td>Title</td>
							 <td>Name</td>
							 <td>Surname</td>
							 <td>Major</td>


					 </tr>
			 </thead>

				<?php
					$res = $this->db->query($que);
					$no = 0;
					foreach ($res->result() as $key ) {
						$no++;
						echo "<tr>";
						echo "<td></td>";
						echo "<td>$key->personnelID</td>";
						echo "<td></td>";
						echo "<td>$key->title</td>";
						echo "<td>$key->personnelName</td>";
						echo "<td>$key->personnelSName</td>";
						echo "<td>$key->NameFac_sub</td>";
						//echo "<td> <button type='button' class='btn  btn-raised btn-info waves-effect'>Save</button> </td> " ;
						echo "</tr>";
					}
				?>
			</table>
			</ul>
		</div>
		</div>
		<!-- <button id="btnSelectedRows">
  Get Selected Rows
</button> -->

		<script type="text/javascript">
		var teacher =[];
		var table;
		var type = document.getElementById("type").value;
 		var major = document.getElementById("major").value;
 		var fac = document.getElementById("fac").value;
		$(document).ready(function() {
		  table = $('#example').DataTable({
		    columnDefs: [{
		      orderable: false,
		      className: 'select-checkbox',
		      targets: 0,
		    }, {
		      "targets": [2],
		      "visible": false,
		      "searchable": false
		    }],
		     select: {
		      style: 'multi',
		      selector: 'td:first-child'
		     },
		     order: [
		       [1, 'asc']
		     ]
		  });

		});
		$('#btnSelectedRows').on('click', function() {
		  var tblData = table.rows('.selected').data();
		  $.each(tblData, function(i, val) {
		    teacher.push(tblData[i]) ;
				//alert(tblData[i])
				 window.location = "http://localhost/project-coop/index.php/Fun_sidebar_admin/assign?id="+teacher+"&type="+type+"&major="+major+"&fac="+fac

		  });
		})
		</script>

</section>
