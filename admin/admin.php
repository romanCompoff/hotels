<?php
use Dva\Hotels\Controller\AdminController;
use Dva\Hotels\Core\Auth;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';

session_start();
$Login  = new Auth;
$Login->login();
	
$controller = new AdminController;

$main = $controller->mainAdmin();

$controller->render();
