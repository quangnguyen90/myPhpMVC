<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome</title>
		
		<!-- Bootstrap CSS -->
		<link href="http://localhost/myphpmvc/public/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery -->
		<script src="http://localhost/myphpmvc/public/js/jquery-2.1.3.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://localhost/myphpmvc/public/js/bootstrap.min.js"></script>

	</head>
	<body>
		<h3 class="text-center">Welcome to My PHP MVC Framework </h3>
		<div class="container">
			<?php $this->load_view('layout/header'); ?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id neque autem, debitis, voluptatibus at, suscipit omnis, modi repellendus inventore reiciendis similique ipsa maxime atque distinctio. Aut, culpa nemo quis excepturi adipisci perspiciatis, dolores beatae minus! Adipisci fuga aperiam consectetur ducimus odio ullam ab et vel rem iusto harum perferendis maxime nisi quasi, accusamus nemo amet reprehenderit inventore quidem dolore rerum! Aut tempore odio totam officia, nostrum repellat, reprehenderit adipisci facere, voluptatum voluptates perspiciatis asperiores! Inventore voluptatum, aliquam esse dolores, ducimus, assumenda repellat corporis delectus nam at omnis. Ullam facilis tempore dolorem molestiae illo. Culpa maxime, rerum temporibus eligendi illum minus nobis excepturi perferendis magni magnam quam sed quod tenetur aut iste aliquam adipisci impedit libero neque at! Ut aut ipsum tenetur officiis velit eligendi excepturi laboriosam reiciendis rerum nihil fugiat officia, provident, itaque molestiae error a, id quod omnis autem totam? Accusamus eos rem quidem aspernatur illo officiis, nam maiores.
			</div>
			<div class="container">
				<a href="http://localhost/myphpmvc/public/example" type="button" class="btn btn-info">Example</a>
			</div>
			<?php $this->load_view('layout/footer'); ?>
		</div>
	</body>
</html>