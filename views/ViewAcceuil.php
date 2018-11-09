<?php $this->_viewTitle = "Mon Blog";
foreach ($articles as $article) : ?>
	<div class="card-body">
		<a href="index.php?url=articles/<?= $article->id(); ?>" class="card-link"><?= $article->title(); ?></a>
		<p class="card-text"><time><?= $article->date(); ?></time></p>
	</div>
<?php endforeach; ?>