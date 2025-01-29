<?php

// Enable error reporting for development
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Include the configuration file
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/vendor/autoload.php';

// Use namespaces for controllers
use App\controllers\PropertyController;

// Parse the current URL
global $path;
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Define basic routing
if ($path === '/' || $path === '/yb2/') {
    // Home page
    $viewObject = new PropertyController();
    $viewObject->homeView();

} elseif ($path === '/properties') {

    // All properties page
    $page_title = 'All Properties';
    $viewObject = new PropertyController();
    $viewObject->allPropertiesView();

} elseif ($path === '/wishlist') {

    // wishlist page
    $page_title = 'Wishlist';
    $viewObject = new PropertyController();
    $viewObject->allPropertiesView();

} elseif ($path === '/property') {

    // single property page
    if (isset($_GET['pid'])) {
        $viewObject = new PropertyController();
        $viewObject->singlePropertyView($_GET['pid']);
    }

} else {
    // 404 Page Not Found
    http_response_code(404);
    echo '<h1>404 - Page Not Found</h1>';
}

