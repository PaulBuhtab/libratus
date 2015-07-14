<?php include ("inc-header.php"); ?>

		<div id="page-header" class="wrap" style="background-image: linear-gradient(rgba(0, 0, 0, 0.65),rgba(0, 0, 0, 0.65)), url(<?php echo $bg; ?>);">
			<div class="inner">
				<h1><?php echo gettext_th("404","libratus"); ?></h1>
			</div>
		</div>
		
		<div class="bar">
			<div class="inner">
				<?php echo $quickmenu; ?>
				<div class="pad" id="breadcrumb">
					<a href="<?php echo getGalleryIndexURL(); ?>"><i class="fa fa-home"></i>&nbsp;<?php printGalleryTitle(); ?></a>&nbsp;/
					<?php echo gettext_th("404 Page Not Found", "libratus"); ?>
				</div>
			</div>
		</div>
			
		<div id="main" class="wrap clearfix">
			<div class="inner">
				<div class="page pad">
					<h1><?php echo gettext_th("404 not found", "libratus"); ?></h1>
					<p><?php echo gettext_th("The page you are requesting cannot be found.", "libratus"); ?></p>
				</div>

				<div class="page-sidebar pad">
					<!-- Insert any sidebar content here... -->
				</div>
			</div>
		</div>
		
<?php include("inc-footer.php"); ?>