<?php

use Dva\Hotels\controller\BaseController;
use Dva\Hotels\model\BaseModel;

include 'vendor/autoload.php';

$controller = new BaseController;
$mainArticles = $controller->allArticles('articles');
$main = $controller->allHotels('allHotels');
$controller->render();

// $a = new BaseModel;


// $b = getOne($a);
// var_dump($main);