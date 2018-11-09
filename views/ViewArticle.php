<?php $this->_viewTitle = "Article : Info";
foreach ($infos as $info) : ?>
	<div class="card-body">
		<h5 class="card-title"><?= $info->title(); ?></h5>
		<p class="card-text">
			<h4><?= $info->content(); ?></h2>
			<p>Created at : <time><?= $info->date(); ?></time></p>
		</p>
	</div>
<?php endforeach; ?>