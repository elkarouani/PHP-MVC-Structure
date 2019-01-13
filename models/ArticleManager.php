<?php
	require_once('models/Model.php');

	class ArticleManager extends Model
	{
		public function getArticles(){return $this->getAll('articles', 'Article');}

		public function createArticle($post) {$this->insert('articles', $post);}

		public function updateArticle($post) {$this->update('articles', $post);}

		public function deleteArticle($post) {$this->delete('articles', $post);}

		public function getInfoArticles($id){
			return $this->getInfoById('articles', 'Article', $id);	
		}
	}
?>