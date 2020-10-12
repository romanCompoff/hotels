<?php
use Dva\Hotels\controller\ArticlesController;
use Dva\Hotels\Core\Auth;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';
	
session_start();
$Login  = new Auth;
$Login->login();
		
$controller = new ArticlesController;

if(!empty($_POST)){
	$res = $controller->addArticle($_POST);
	$path = sprintf('/img/img-articles/%s/', $res);
	$file = $controller->fUpdate($_FILES, $path);
}elseif($_GET['del']){
	$controller->delArticle($_GET['del']);
}
$controller->outputForm();
$controller->articlesList();
$controller->render();
