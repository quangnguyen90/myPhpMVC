<?php
require_once '../app/libraries/template.php';
$page = new Template;
$page->setTitle('About');
$page->startBody();
?>
<!-- Body code goes here -->
 <legend><h2>About</h2></legend>
Develop by Quang Nguyen Phu - 2015 - From Vietname with love
<br>
This framework is light, easy to use
<br>
<a href="http://localhost/myphpmvc/public/home">Back to homepage</a>

<!-- /Body code goes here -->
<?php
$page->endBody();
echo $page->render('../app/views/layout/layout.php');