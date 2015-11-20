<?php
require_once '../app/libraries/template.php';
$page = new Page;
$page->setTitle('');
$page->addCSS('');
$page->addJavascript('');
$page->startBody();
?>
<!-- Body code goes here -->
<?php
$page->endBody();
echo $page->render('../app/views/layout/layout.php');