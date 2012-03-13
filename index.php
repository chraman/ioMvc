<?php
	// For use in development mode
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	// Mappar som används av servern
	define('BASE_PATH', dirname(realpath(__FILE__)) . '/');
	define('APP_PATH', BASE_PATH . 'app/');
	
	// Inkluderar config-filen
	include BASE_PATH . 'config/config.php';
	
	// Mappar som används i vyer
	define('STYLE_DIR', BASE_URL . 'app/views/stylesheets/');
	
	// Inkluderar kärnan
	include BASE_PATH . 'libraries/core.php';
?>