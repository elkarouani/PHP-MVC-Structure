<?php  
	require_once('views/View.php');
	require_once('models/ArticleManager.php');

	class ControllerArticles {
		private $_articleManager;
		private $_view;
		
		public function __construct($url, $post = null) {
			if(isset($url) && count($url) > 2) {throw new Exception("Page introuvable");}
			elseif($url[1] === "create"){$this->createArticle($post);}
			elseif ($url[1] === "edit") {$this->updateArticle($post);}
			elseif ($url[1] === "delete") {$this->deleteArticle($post);}
			else{$this->infoArticle($url[1]);}
		}

		private function infoArticle($id) {
			$this->_articleManager = new ArticleManager;
			$infos = $this->_articleManager->getInfoArticles($id);

			// require_once('views/viewAcceuil.php');
			$this->_view = new View('Article');
			$this->_view->generate(array('infos' => $infos));
		}

		private function createArticle($post) {
			if($post != []) {
				$this->_articleManager = new ArticleManager;
				$this->_articleManager->createArticle($post);
			}

			header('Location: '.URL);
		}

		private function updateArticle($post) {
			if($post != []) {
				$this->_articleManager = new ArticleManager;
				$this->_articleManager->updateArticle($post);
			}

			header('Location: '.URL);
		}

		private function deleteArticle($post) {
			if($post != []) {
				$this->_articleManager = new ArticleManager;
				$this->_articleManager->deleteArticle($post);
			}

			header('Location: '.URL);
		}
	}
?>