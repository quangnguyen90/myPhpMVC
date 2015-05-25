<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>About</title>

		<!-- Bootstrap CSS -->
		<link href="http://localhost/myphpmvc/public/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery -->
		<script src="http://localhost/myphpmvc/public/js/jquery-2.1.3.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://localhost/myphpmvc/public/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h3 class="text-center">Welcome to My PHP MVC Framework</h3>
		<div class="container">
			<?php $this->load_view('layout/header'); ?>
			<div class="text-center">
				<h3>ABOUT THIS PROJECT</h3>
				Develop by Quang Nguyen Phu - 2015 - From Vietname with love
				<br>
				This framework is light, easy to use
				<br>
				<a href="http://localhost/myphpmvc/public/home">Back to homepage</a>
			</div>
			<?php $this->load_view('layout/footer'); ?>
		</div>
	</body>
</html>