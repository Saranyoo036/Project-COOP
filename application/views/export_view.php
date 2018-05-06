<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Export student <?php echo "$nameFac $type";?></h2>
			<ul class="breadcrumb">
				<form action="<?php echo base_url("/project-coop/index.php/fun_sidebar_admin/excel_format") ?>" method="post">
				<input type = "hidden" name = "type"  value="<?php echo $type;?>">
				<input type = "hidden" name = "status"  value="<?php echo $status;?>">
				<input type = "hidden" name = "fac"  value="<?php echo $nameFac;?>">
				<input type="submit" name="export_excel" value="Export to Excel">
				</form>
			</ul>
		</div>
	</div>
</section>

		