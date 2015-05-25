<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Example view detail</title>

		<!-- Bootstrap CSS -->
		<link href="http://localhost/myphpmvc/public/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery -->
		<script src="http://localhost/myphpmvc/public/js/jquery-2.1.3.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://localhost/myphpmvc/public/js/bootstrap.min.js"></script>

	</head>
	<body>
		<?php if(isset($data['info']) && $data['info'] != null) { ?>
		<h1 class="text-center">Detail of <?php echo $data['info']->title;?></h1>
		<div class="container">
			<a href="http://localhost/myphpmvc/public/example/testSelect" type="button" class="btn btn-default">Back</a>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<h4>Message</h4>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<h4><?php echo $data['info']->message;?></h4><h4>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<h4>Type</h4>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<h4><?php echo $data['info']->type;?></h4>
				</div>
			</div>
		</div>
		<?php }
			else {
				echo '<h1 class="text-center">No data</h1>';
			}
		?>
	</body>
</html>