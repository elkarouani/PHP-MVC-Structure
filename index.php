<?php  
	require_once('controllers/Router.php');
	require_once('helpers.php');
	
	define('URL', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


	$router = new Router();
	$router->routeReq();
?>