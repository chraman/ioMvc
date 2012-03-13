<?php
	
	class AppController extends Controller {
		public static function load_helper($name)
		{
			$helper_path = BASE_PATH . 'libraries/helpers/' . $name . '.helper.php';
			if (file_exists($helper_path)) {
				include $helper_path;
			}
		}
	}

?>