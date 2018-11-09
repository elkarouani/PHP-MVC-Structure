<?php 
	require_once('views/View.php');

	class Router
	{
		private $_ctrl;
		private $_view;
		
		public function routeReq(){
			try {
				// CHARGEMENT AUTOMATIQUE DES CLASSES
				spl_autoload_register(function($class){
					require_once('models/'.$class.'.php');
				});

				$url = array();

				// LE CONTROLLER EST INCLUS SELON L'ACTION DE L'UTILISTATEUR 
				if (isset($_GET['url'])) {
					$url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
					$controller = ucfirst(strtolower($url[0]));
					$controllerClass = "Controller" . $controller;
					$controllerFile = "controllers/" . $controllerClass . ".php";

					if (file_exists($controllerFile)) {
					 	require_once($controllerFile);
					 	$this->_ctrl = new $controllerClass($url);
					 } else{
					 	throw new Exception("Page Introuvable");
					 }
				}else{
					require_once('controllers/ControllerAcceuil.php');
					$this->_ctrl = new ControllerAcceuil($url);
				}
			} 
			// GESTION DES ERREURS
			catch (Exception $e) {
				$errorMsg = $e->getMessage();
				// require_once('views/viewError.php');
				$this->_view = new View('Error');
				$this->_view->generate(array('errorMsg' => $errorMsg));
			}
		}
	}