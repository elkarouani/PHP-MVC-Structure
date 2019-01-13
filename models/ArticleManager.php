<?php
	require_once('models/Model.php');

	class ArticleManager extends Model
	{
		public function getArticles(){return $this->getAll('articles', 'Article');}

		public function getInfoArticles($id){
			return $this->getInfoById('articles', 'Article', $id);	
		}
	}
?>