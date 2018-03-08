<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>หน้าแรก</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">หน้าแรก</a></li>
				<li class="breadcrumb-item active">หน้าแรก</li>
			</ul>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 col-lg-12">
				<div class="card visitors-map">

					<div class="body">

							<div class="row clearfix">
                            <div class="col-sm-12 col-md-5 focused">
                                <select class="form-control show-tick" id="fac" onchange="enable()">
																	<option value="">-- Please select faculty --</option>
																	<?php foreach ($fac as $facc) { ?>
																		<option value=<?php echo $facc->Fac_ID; ?>><?php echo $facc->Faculty_name.' ('.$facc->NameFac_sub.')'; ?></option>
																	<?php } ?>


                                </select>
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <select class="form-control" id="major" disabled onchange="document.getElementById('selectbtn').disabled = ''">
                                    <option value="">Please select major</option>

                                </select>
                            </div>
														<div class="col-sm-12 col-md-2">
															<button id="selectbtn" href="#" onclick="$('#select').show(1000)" class="btn  btn-raised bg-blue btn-block btn-xs waves-effect" disabled="disabled"> Select</button>
														</div>
                        </div>
												<div id="select" class="button-demo" align='center' style="display:none" >
												<button onclick = "document.getElementById('selection').value=this.value,$('#select').hide(500),$('#menuwrapper').show(500)"  value='COOP' type="button" class="btn  btn-raised bg-teal  btn-md waves-effect">COOP</button>
												<button type="button" onclick = "document.getElementById('selection').value=this.value,$('#select').hide(500),$('#menuwrapper').show(500)" class="btn  btn-raised bg-orange  btn-md waves-effect"  value="internship">Internship</button>
												<input id="selection" type="hidden" name="selection" value="">
										</div>
										<div class="" id="menuwrapper" style="display:none">
											<div id="menu" class="button-demo " align='center'  >
											<a id="stdbtn" class="btn  btn-raised bg-deep-purple waves-effect" onclick="goto(document.getElementById('major').value,document.getElementById('selection').value,this.id)">student</a>
											<a id="assignbtn" class="btn  btn-raised bg-deep-purple waves-effect" onclick="goto(document.getElementById('major').value,document.getElementById('selection').value,this.id)">Assign lacturer</a>
											<a id="newsbtn" class="btn  btn-raised bg-deep-purple waves-effect" onclick="goto(document.getElementById('major').value,document.getElementById('selection').value,this.id)">news</a>
											<a id="orgbtn" class="btn  btn-raised bg-deep-orange waves-effect" onclick="goto(document.getElementById('major').value,document.getElementById('selection').value,this.id)">Organization</a>
											<a id="timebtn" class="btn  btn-raised bg-deep-orange waves-effect" onclick="goto(document.getElementById('major').value,document.getElementById('selection').value,this.id)">time Setting</a>
											<a id="exportbtn" class="btn  btn-raised bg-deep-orange waves-effect" onclick="goto(document.getElementById('major').value,document.getElementById('selection').value,this.id)">export Summarize</a>
											<a id="importbtn" class="btn  btn-raised bg-blue  btn-md waves-effect" onclick="goto(document.getElementById('major').value,document.getElementById('selection').value,this.id)">import</a>
									</div>

										</div>

					</div>
				</div>
			</div>
		</div>

		<div class="row clearfix">
			<div class="col-sm-12 col-md-12">
				<div class="card">
					<div class="body" id="footer">
							<div class="col-sm-12">
								<p class="copy m-b-0">© Copyright
									<time class="year">2017</time>
									WrapTheme  - All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">

var major;
	function enable() {
		let a = document.getElementById('major')
		a.disabled = ""
		//alert(document.getElementById('fac').value)
		toshowmajor(document.getElementById('fac').value)

	}
	function toshowmajor(facid) {
		var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
				document.getElementById('major').innerHTML = this.responseText
    }
  };
  	xhttp.open("GET", "/Project-COOP/homepage/showmajor/"+facid, true);
  	xhttp.send();
	}

	function goto(major,type,id) {
		//alert(id)
		switch (id) {
			case 'stdbtn':
			window.location = 'http://localhost/Project-COOP/Fun_sidebar_admin/show_student?subname_major='+major+'&type_major='+type
				break;
				case 'assignbtn' :
				window.location ='http://localhost/Project-COOP/Fun_sidebar_admin/show_teacher?subname_Fac=FTE'
				break
				case 'newsbtn' :
				window.location = 'http://localhost/Project-COOP/Fun_sidebar_admin/show_news?subname_major='+major+'&type_major='+type
				break
				case 'orgbtn' :
				window.location ='http://localhost/Project-COOP/Fun_sidebar_admin/show_company?subname_major='+major+'&type_major='+type
				break
				case 'timebtn' :
				window.location ='http://localhost/Project-COOP/time_setting/loadpage?subname_major='+major+'&type_major='+type
				break
				// case 'exportbtn' :
				// //window.location = 'http://localhost/Project-COOP/time_setting/loadpage?subname_major=GEO&type_major=internship'
				// break
				// case 'importbtn'
				// //
				// break
			default:

		}

		//alert('Project-COOP/Fun_sidebar_admin/show_student?subname_major='+major+'&type_major='+type)


	}

</script>
