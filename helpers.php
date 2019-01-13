<?php 

	if (!function_exists('asset')) {
		function asset($asset){return URL . "assets" . DIRECTORY_SEPARATOR . $asset;}
	}