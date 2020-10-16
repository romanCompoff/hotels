<?php

use Dva\Hotels\controller\IndexController;
use Dva\Hotels\core\Request;


include 'vendor/autoload.php';


$controller = new IndexController;
$controller->getConfig();

$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode("/", $uri);
unset($uriParts[0]);
$uriParts = array_values($uriParts);

// $request = new Request($_GET, $_POST, $_SERVER, $_COOKIE, $_FILES, $_SESSION);

$pageName = $controller->indexRouter($uriParts);
$controller->renderAllBlocks('feedbacks');
$controller->renderAllBlocks('articles', $pageName);
$controller->renderAllBlocks('allhotels', $pageName) ;
$controller->menuList();
$controller->render();
// $ads = new GAdsController;
// $ads->addKeyLoger();
// $ads->addUser($_GET);
