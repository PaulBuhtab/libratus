<?php include ('inc-header.php'); ?>

		<div id="page-header" class="wrap" style="background-image: linear-gradient(rgba(0, 0, 0, 0.65),rgba(0, 0, 0, 0.65)), url(<?php echo $bg; ?>);">
			<div class="inner">
				<h1><?php echo gettext_th("Login", "libratus"); ?></h1>
			</div>
		</div>
		
		<div class="bar">
			<div class="inner">
				<?php echo $quickmenu; ?>
				<div class="pad" id="breadcrumb">
					<a href="<?php echo getGalleryIndexURL(); ?>"><i class="fa fa-home"></i>&nbsp;<?php printGalleryTitle(); ?></a>&nbsp;/
					<?php echo gettext_th("Password required", "libratus"); ?>
				</div>
			</div>
		</div>
			
		<div id="main" class="wrap clearfix">
			<div class="inner">
				<div class="page pad">
					<?php 
					if (!zp_loggedin()) {
					printPasswordForm('', true, false); ?>
					<?php if (function_exists('printRegistrationForm') && $_zp_gallery->isUnprotectedPage('register')) {
					printCustomPageURL(gettext_th("Register for this site", "libratus"), 'register', '', '<br />');
					} 
					} else { ?>
					<h4><?php echo gettext_th("You are logged in", "libratus"); ?></h4>
					<p><a href="<?php echo html_encode(getGalleryIndexURL()); ?>" title="<?php echo gettext_th("Goto Homepage", "libratus"); ?>"><?php echo gettext_th("Goto Homepage", "libratus").' &rarr;'; ?></a></p>
					<?php } ?>
				</div>

				<div class="page-sidebar pad">
					<!-- Insert any sidebar content here... -->
				</div>
			</div>
		</div>
		
<?php include('inc-footer.php'); ?>