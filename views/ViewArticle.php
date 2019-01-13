<?php $this->_viewTitle = "Article : Info";
foreach ($infos as $info) : ?>
	<div class="card-body">
		<span class="float-right">
			<a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#Edit<?= $info->id()?>"><i class="fa fa-edit"></i></a>
			<a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete<?= $info->id()?>"><i class="fa fa-trash"></i></a>

			<!-- Modal -->
				<div class="modal fade" id="Edit<?= $info->id()?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<h5 class="modal-title" id="exampleModalLongTitle">Editing blog</h5>
				        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
				      		<div class="modal-body">
				        		<form method="POST" action="edit">
				        			<input type="text" name="id" value="<?= $info->id()?>" hidden="hidden">
						  			<div class="form-group">
						    			<label for="Title">Title : </label>
						    			<input type="text" class="form-control" id="Title" placeholder="Enter title" name="title" value="<?= $info->title()?>">
						  			</div>
						  			<div class="form-group">
    									<label for="Content">Content</label>
    									<textarea name="content" class="form-control" id="Content" rows="3"><?= $info->content()?></textarea>
  									</div>
  									<div class="text-center">
						  				<button type="submit" class="btn btn-primary" name="save">Save changes</button>
  									</div>
								</form>
				      		</div>
				    	</div>
				  	</div>
				</div>

			<!-- Modal -->
				<div class="modal fade" id="Delete<?= $info->id()?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<h5 class="modal-title" id="exampleModalLongTitle">Delete blog</h5>
				        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
				      		<div class="modal-body">
				        		<form method="POST" action="delete">
				        			<input type="text" name="id" value="<?= $info->id()?>" hidden="hidden">
						  			<p class="border border-warning text-danger">Do you really want to delete this blog</p>
  									<div class="text-center">
						  				<button type="submit" class="btn btn-danger" name="save">Delete</button>
  									</div>
								</form>
				      		</div>
				    	</div>
				  	</div>
				</div>
		</span>
		<h5 class="card-title"><?= $info->title(); ?></h5>
		<p class="card-text">
			<h4><?= $info->content(); ?></h2>
			<p>Created at : <time><?= $info->date(); ?></time></p>
		</p>
	</div>
<?php endforeach; ?>