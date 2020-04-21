<?php
session_start();
use Dva\Hotels\controller\GAdsController;
use Dva\Hotels\model\GAdsModel;

include '../vendor/autoload.php';	
include '../includes/loginInclude.php';

$controller = new GAdsController;

$main = $controller->outputUsers();


$controller->render();
