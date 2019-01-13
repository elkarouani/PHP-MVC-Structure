<?php  
	require_once('views/View.php');
	require_once('models/ArticleManager.php');

	class ControllerArticles
	{
		private $_articleManager;
		private $_view;
		
		public function __construct($url)
		{
			if (isset($url) && count($url) > 2) {throw new Exception("Page introuvable");}
			else{$this->infoArticle($url[1]);}
		}

		private function infoArticle($id){
			$this->_articleManager = new ArticleManager;
			$infos = $this->_articleManager->getInfoArticles($id);

			// require_once('views/viewAcceuil.php');
			$this->_view = new View('Article');
			$this->_view->generate(array('infos' => $infos));
		}
	}
?>