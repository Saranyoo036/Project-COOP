<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Export student <?php echo "$nameMaj $type";?></h2>
			<ul class="breadcrumb">
				<form action="<?php echo base_url("/project-coop/index.php/fun_sidebar_admin/excel_format") ?>" method="post">
				<input type = "text" name = "type"  value="<?php echo $type;?>">
				<input type = "text" name = "major"  value="<?php echo $nameMaj;?>">
				<input type = "text" name = "fac"  value="<?php echo $nameFac;?>">
				<input type="submit" name="export_excel" value="Export to Excel">
				</form>
			</ul>
		</div>
	</div>
</section>

		