<?php
require_once '../app/libraries/template.php';
$page = new Template;
$page->setTitle('Example Detail');

$page->startBody();
?>
<!-- Body code goes here -->
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
<!-- /Body code goes here -->
<?php
$page->endBody();
echo $page->render('../app/views/layout/layout.php');