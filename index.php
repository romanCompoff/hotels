<?php

use Dva\Hotels\controller\BaseController;
use Dva\Hotels\model\BaseModel;

include 'vendor/autoload.php';

$controller = new BaseController;
$main = $controller->allHotels();
$controller->render();

// $a = new BaseModel;


// $b = getOne($a);
// var_dump($main);