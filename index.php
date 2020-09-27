<?php

use Dva\Hotels\controller\BaseController;
use Dva\Hotels\controller\GAdsController;


include 'vendor/autoload.php';

$controller = new BaseController;

// $mainArticles = $controller->allArticles('articles');
// $main = $controller->allHotels('allHotels');
// $config = $controller->allConfigs();



$res1 = $controller->getAll('feedbacks');
var_dump($res1);



// $fb = $controller->allFb();
// $controller->render();
// $ads = new GAdsController;
// $ads->addKeyLoger();
// $ads->addUser($_GET);
