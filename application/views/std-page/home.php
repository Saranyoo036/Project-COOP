<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>HOME</h2>
			<ul class="breadcrumb">

			</ul>
		</div>
 <?php
//  echo '<pre>';
//  print_r($news);
// print_r($_SESSION);
//  echo '</pre>';
?> 

                  <div class="card">
                    <div class="body">
                        <div class="comment-box">
                            <h2 class="title">ข่าวสาร (News)</h2>
                            <div class="single-comment-box">
                                  <ul>
																		<?php
																		for ($i=0; $i <count($news) ; $i++) { ?>
																			<a href="<?php echo base_url("Project-COOP").'/uploaded_file/'.$news[$i]['file_name'] ?>" download>
																				<p> <?php echo $news[$i]['Topic'] ?> ( <?php echo $news[$i]['start_date']; ?> )
																					<i class="material-icons">get_app</i> <small>post by <?php echo $news[$i]['add_by'] ?></small>
																				</p>
																				</a>

																	<?php	}
																		 ?>



                            </div>
                        </div>
                    </div>
                </div>

              
																		

            </div>
                   
