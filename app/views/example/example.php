<?php
require_once '../app/libraries/template.php';
$page = new Template;
$page->setTitle('Example');
$page->addJavascript('../js/examplejs/example.js');
$page->addJavascript('../js/examplejs/example_evt.js');

$page->startBody();
?>
<!-- Body code goes here -->
<h1 class="text-center">Hello <?php echo $data["yourName"];?></h1>
<h3 class="text-center">Welcome to My PHP MVC Framework - This is example page</h3>
<div class="container">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, optio cum hic earum a cumque distinctio ad maiores id delectus. Voluptas quod corporis labore architecto, voluptate molestiae quibusdam ex. Commodi id sunt iure ducimus cum blanditiis ullam necessitatibus facilis corporis et culpa deserunt quibusdam harum, eaque, at sint! Eaque repellendus voluptatibus, modi laboriosam temporibus mollitia quo iure dolor consequuntur magnam quos ab earum hic deleniti natus porro quae culpa delectus quisquam aperiam incidunt praesentium. Cumque iste ducimus, consequatur facere commodi voluptatum vitae placeat eius tempora cupiditate doloribus officiis necessitatibus minima earum est ipsam culpa labore impedit non atque quos laborum obcaecati perferendis praesentium. Explicabo amet pariatur nesciunt sed consequuntur similique quibusdam tempore perspiciatis accusamus, nulla, molestias fugiat cupiditate. Aliquid minima facilis eaque asperiores modi dicta, magni, corrupti eveniet ducimus vero nulla reprehenderit rem, excepturi quas impedit fuga enim deleniti? Rem officiis minima officia ex qui obcaecati earum fuga, sed hic vero eum asperiores perspiciatis quod aut provident voluptate omnis exercitationem cumque adipisci, temporibus! Pariatur necessitatibus a, cumque officia maiores magnam excepturi assumenda voluptatum sunt, maxime atque quae quo itaque est! Consequatur fugit, nulla nam quo error alias veniam provident asperiores aliquam accusamus distinctio, molestiae similique eius dolor a laudantium earum!
</div>
<div class="container">
	<a href="http://localhost/myphpmvc/public/example/testSelect" type="button" class="btn btn-info">Example</a>
</div>
<!-- ==================================================================================================================================================================================================================================================================== -->
<?php if(isset($data['info']) && $data['info'] != null) {?>
<div class="container">
	<h4>CRUD EXAMPLE</h4>
	<a type="button" class="btn btn-success create_crud" data-toggle="modal" href='#crud-example'>Create</a>
	<div></div>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Message</th>
					<th>Type</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($data['info'] as $key => $value) {
					?>
					<tr class="recordExample" record-id="<?php echo $value->id; ?>">
						<td><?php echo $value->id; ?></td>
						<td><?php echo $value->title; ?></td>
						<td><?php echo $value->message; ?></td>
						<td><?php echo $value->type; ?></td>
						<td>
							<a class="btn btn-primary read_crud" href='http://localhost/myphpmvc/public/example/testSelectOneRow/<?php echo $value->id;?>'>Read</a>
							<a ide="<?php echo $value->id; ?>" tit="<?php echo $value->title; ?>" msg="<?php echo $value->message; ?>" typ="<?php echo $value->type; ?>" class="btn btn-warning update_crud" data-toggle="modal" href='javascript:void(0)'>Update</a>
							<a href="javascript:void(0)" ide="<?php echo $value->id; ?>" name="<?php echo $value->title; ?>" type="button" class="btn btn-danger delete_crud">Delete</a>								
						</td>
					</tr>
					<?php 
				}
				?> 
			</tbody>
		</table>
	</div>
</div>
<?php }?>

<div class="container">
	<div class="modal fade" id="crud-example"  tabindex="-1" role="dialog" aria-labelledby="myExampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myExampleModalLabel"></h4>
				</div>
				<div class="modal-body">
					<label for="" id="example_danger"></label>
					<input type="hidden" class="form-control" id="crudId" placeholder="Input field">
					
					<div class="form-group">
						<label for="crudTitle">Title</label>
						<input type="text" class="form-control" id="crudTitle" placeholder="Input field">
					</div>

					<div class="form-group">
						<label for="crudMessage">Message</label>
						<input type="text" class="form-control" id="crudMessage" placeholder="Input field">
					</div>

					<div class="form-group">
						<label for="crudType">Type</label>
						<select name="" id="crudType" class="form-control" required="required">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>	
					</div>
				</div>
				<div class="modal-footer">
					<button id="closeChanges" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button id="cleanChanges" type="button" class="btn btn-info">Clean</button>
					<button id="saveChanges" type="button" class="btn btn-primary hide">Save changes</button>
					<button id="submitChanges" type="button" class="btn btn-primary">Submit</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>
<!-- /Body code goes here -->
<?php
$page->endBody();
echo $page->render('../app/views/layout/layout.php');