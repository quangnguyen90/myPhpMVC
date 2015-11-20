<?php
require_once '../app/libraries/template.php';
$page = new Template;
$page->setTitle('Home');
$page->startBody();
?>
<!-- Body code goes here -->
 <legend><h2>Home</h2></legend>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id neque autem, debitis, voluptatibus at, suscipit omnis, modi repellendus inventore reiciendis similique ipsa maxime atque distinctio. Aut, culpa nemo quis excepturi adipisci perspiciatis, dolores beatae minus! Adipisci fuga aperiam consectetur ducimus odio ullam ab et vel rem iusto harum perferendis maxime nisi quasi, accusamus nemo amet reprehenderit inventore quidem dolore rerum! Aut tempore odio totam officia, nostrum repellat, reprehenderit adipisci facere, voluptatum voluptates perspiciatis asperiores! Inventore voluptatum, aliquam esse dolores, ducimus, assumenda repellat corporis delectus nam at omnis. Ullam facilis tempore dolorem molestiae illo. Culpa maxime, rerum temporibus eligendi illum minus nobis excepturi perferendis magni magnam quam sed quod tenetur aut iste aliquam adipisci impedit libero neque at! Ut aut ipsum tenetur officiis velit eligendi excepturi laboriosam reiciendis rerum nihil fugiat officia, provident, itaque molestiae error a, id quod omnis autem totam? Accusamus eos rem quidem aspernatur illo officiis, nam maiores.
<br>
<!-- /Body code goes here -->
<?php
$page->endBody();
echo $page->render('../app/views/layout/layout.php');