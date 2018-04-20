<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>HOME</h2>
			<ul class="breadcrumb">

			</ul>
		</div>
<!-- <?php print_r($news); ?> -->

                  <div class="card">
                    <div class="body">
                        <div class="comment-box">
                            <h2 class="title">ข่าวสาร (News)</h2>
                            <div class="single-comment-box">
                                  <ul>
																		<?php
																		for ($i=0; $i <count($news) ; $i++) { ?>
																			<li>

																					<div class="text-box">
																							<i class="material-icons"><a href=<?php echo base_url("Project-COOP").'/uploaded_file/'.$news[$i]['file_name'] ?>>get_app</i>
																							<p> <?php echo $news[$i]['Topic'] ?> ( <?php echo $news[$i]['start_date']; ?> )</p>

																					</div>
																			</li>

																	<?php	}
																		 ?>


                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
