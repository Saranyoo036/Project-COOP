<!-- teacher function -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Teacher <?php echo $nameFac; ?></h2>

			<ul class="breadcrumb">
				<a id="btnSelectedRows" class='btn btn-raised btn-info waves-effect' href="#">Assign teacher</a>
				<table  id="example" border = "0" style="width:100%">
					<input type = "hidden" id = "type"  value="<?php echo $type;?>">
					<input type = "hidden" id = "major"  value="<?php echo $nameMaj;?>">
					<thead>
					 <tr>
							 <td></td>
							 <td>NO.</td>
							 <td>Title</td>
							 <td>Title</td>
							 <td>Name</td>
							 <td>Surname</td>
							 <td>Faculty</td>
							 
							 

					 </tr>
			 </thead>

				<?php
				$que = "SELECT * FROM `teacher` ,`faculty`
						WHERE faculty.Fac_ID = teacher.Fac_ID
						AND faculty.NameFac_sub = '$nameFac';";

					$res = $this->db->query($que);
					$no = 0;
					foreach ($res->result() as $key ) {
						$no++;

						echo "<tr>";
						echo "<td></td>";
						echo "<td>$no</td>";
						echo "<td>$key->TeacherID</td>";
						echo "<td>$key->title</td>";
						echo "<td>$key->TeacherName</td>";
						echo "<td>$key->TeacherSName</td>";
						echo "<td>$key->Faculty_name</td>";
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
		
		
		$(document).ready(function() {
		  table = $('#example').DataTable({
		    columnDefs: [{
		      orderable: false,
		      className: 'select-checkbox',
		      targets: 0
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
		  var tmpData;
		  
		  $.each(tblData, function(i, val) {
		    teacher.push(tblData[i]) ;
				//alert(tblData[i])

				window.location = "http://localhost/project-coop/index.php/Fun_sidebar_admin/assign?id="+teacher+"&type="+type+"&major="+major

		  });

		})
		</script>

</section>
