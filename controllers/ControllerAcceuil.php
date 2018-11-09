<?php  
	require_once('views/View.php');
	class ControllerAcceuil
	{
		private $_articleManager;
		private $_view;
		
		public function __construct($url)
		{
			if (isset($url) && count($url) > 1) {
				throw new Exception("Page introuvable");
			}else{
				$this->articles();
			}
		}

		private function articles(){
			$this->_articleManager = new ArticleManager;
			$articles = $this->_articleManager->getArticles();

			// require_once('views/viewAcceuil.php');
			$this->_view = new View('Acceuil');
			$this->_view->generate(array('articles' => $articles));
		}
	}
?>