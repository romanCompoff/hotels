<?php

use Dva\Hotels\controller\BaseController;
use Dva\Hotels\Controller\ActiveRecordParentController;
use Dva\Hotels\core\Request;


include 'vendor/autoload.php';


$controller = new ActiveRecordParentController;



// var_dump($controller);

// $request = new Request($_GET, $_POST, $_SERVER, $_COOKIE, $_FILES, $_SESSION);

// $controller = new BaseController($request);

$controller->getConfig();
$controller->renderAllBlocks('feedbacks');
$controller->renderAllBlocks('articles');
$controller->renderAllBlocks('allhotels') ;

$controller->render();
// $ads = new GAdsController;
// $ads->addKeyLoger();
// $ads->addUser($_GET);
