<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>">
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
		        <a class="nav-link" href="#">Add new</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">About us</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</header>
	<br><br>
	<body>
		<div class="card text-center" style="width: 80rem; margin-left: 50px;">
			<div class="card-header">
	    		<h5 class="card-title">Mon Blog</h5>
		    	<h6 class="card-subtitle mb-2 text-muted">Bienvenue sur mon blog</h6>
	  		</div>
	  		<?= $content ?>
		</div>
		<script type="text/javascript" src="<?= asset('js/bootstrap.min.js') ?>"></script>
	</body>
</html>