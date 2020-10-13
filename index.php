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

if($uriParts[0] ?? $uriParts[0] != ""){
    if($uriParts[1]){
        $controller->err404();
    }
    $controller->pageRout($uriParts[0]);
}

// $request = new Request($_GET, $_POST, $_SERVER, $_COOKIE, $_FILES, $_SESSION);

// $controller = new BaseController($request);


// $controller->renderAllBlocks('feedbacks');
// $controller->renderAllBlocks('articles');
// $controller->renderAllBlocks('allhotels') ;

$controller->render();
// $ads = new GAdsController;
// $ads->addKeyLoger();
// $ads->addUser($_GET);
