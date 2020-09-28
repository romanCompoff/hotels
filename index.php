<?php

use Dva\Hotels\controller\BaseController;
use Dva\Hotels\core\Request;


include 'vendor/autoload.php';

$request = new Request($_GET, $_POST, $_SERVER, $_COOKIE, $_FILES, $_SESSION);

$controller = new BaseController($request);



// $mainArticles = $controller->allArticles('articles');
// $main = $controller->allHotels('allHotels');
$config = $controller->allConfigs();



$res1 = $controller->renderAllBlocks('feedbacks');


// $fb = $controller->allFb();
$controller->render();
// $ads = new GAdsController;
// $ads->addKeyLoger();
// $ads->addUser($_GET);
