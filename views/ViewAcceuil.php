<?php $this->_viewTitle = "Mon Blog";?>
<div class="card-body list-group" style="margin-left: 20px;">
	<?php foreach ($articles as $article) : ?>
		<div class="list-group-item list-group-item-action">
			<a href="index.php?url=articles/<?= $article->id(); ?>" class="card-link">
				<?= $article->title(); ?>
			</a>
			<p class="card-text"><time><?= $article->date(); ?></time></p>
		</div>
	<?php endforeach; ?>
</div>