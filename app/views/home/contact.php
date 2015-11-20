<?php
require_once '../app/libraries/template.php';
$page = new Template;
$page->setTitle('Contact');
$page->startBody();
?>
<!-- Body code goes here -->
<form action="" method="POST" name="contact" role="form">
  <legend><h2>Contact</h2></legend>

  <div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" class="form-control" id="" placeholder="Input your name">
  </div>
  
  <div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" class="form-control" id="" placeholder="Input email">
  </div>

  <div class="form-group">
    <label for="">Subject</label>
    <input type="text" name="subject" class="form-control" id="" placeholder="Input subject">
  </div>

  <div class="form-group">
    <label for="">Message</label>
    <textarea name="message" id="inputMessage" class="form-control" rows="3" required="required"></textarea>
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- /Body code goes here -->
<?php
$page->endBody();
echo $page->render('../app/views/layout/layout.php');