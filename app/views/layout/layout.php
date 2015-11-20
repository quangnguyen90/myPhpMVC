<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyPHPMVC | <?php echo $this->title; ?></title>

	<!-- Bootstrap CSS -->
	<link href="http://localhost/myphpmvc/public/css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="http://localhost/myphpmvc/public/js/jquery-2.1.3.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="http://localhost/myphpmvc/public/js/bootstrap.min.js"></script>
	<?php
	foreach ($this->stylesheets as $stylesheet) {
		echo '<link href="' . $stylesheet . '" rel="stylesheet" type="text/css" />' . "\n";
	}
	?>
</head>
<body>
	<div class="container">
		<!-- HEADER -->
		<?php require_once '../app/views/layout/header.php';?>
		<!-- /HEADER -->
		

		<!-- BANNER -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php require_once '../app/views/layout/banner.php';?>
		</div>
		<!-- /BANNER -->

		<!-- CONTENT -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo $this->body; ?>
		</div>
		<!-- /CONTENT -->
		
		<!-- FOOTER -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php require_once '../app/views/layout/footer.php';?>
		</div>
		<!-- /FOOTER -->
	</div>
	<?php
	foreach ($this->javascripts as $javascript) {
		echo '<script src="' . $javascript . '" language="javascript" type="text/javascript" defer="defer"></script>' . "\n";
	}
	?>
</body>
</html>