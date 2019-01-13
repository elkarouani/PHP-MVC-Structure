<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>">
		<link rel="stylesheet" href="<?= asset('css/font-awesome.css') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<title><?= $viewTitle ?></title>
	</head>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="<?= URL ?>">Mon Blog</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?= URL ?>">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#" data-toggle="modal" data-target="#Create">Add new</a>

		        <!-- Modal -->
				<div class="modal fade" id="Create" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
				        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
				      		<div class="modal-body">
				        		<form method="POST" action="articles/create">
						  			<div class="form-group">
						    			<label for="Title">Title : </label>
						    			<input type="text" class="form-control" id="Title" placeholder="Enter title" name="title">
						  			</div>
						  			<div class="form-group">
    									<label for="Content">Content</label>
    									<textarea name="content" class="form-control" id="Content" rows="3"></textarea>
  									</div>
  									<div class="text-center">
						  				<button type="submit" class="btn btn-primary" name="save">Submit</button>
  									</div>
								</form>
				      		</div>
				    	</div>
				  	</div>
				</div>
		      </li>
		    </ul>
		  </div>
		</nav>
	</header>
	<br><br>
	<body>
		<div class="card text-center" style="width: 60rem; margin-left: 30px;">
			<div class="card-header">
	    		<h5 class="card-title">Mon Blog</h5>
		    	<h6 class="card-subtitle mb-2 text-muted">Bienvenue sur mon blog</h6>
	  		</div>
	  		<?= $content ?>
		</div>
		<script type="text/javascript" src="<?= asset('js/jquery.js') ?>"></script>
		<script type="text/javascript" src="<?= asset('js/popper.js') ?>"></script>
		<script type="text/javascript" src="<?= asset('js/bootstrap.min.js') ?>"></script>
	</body>
</html>