<?php
session_start();
use Dva\Hotels\Controller\ConfigController;
use Dva\Hotels\Core\Auth;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';
	
session_start();
$Login  = new Auth;
$Login->login();
		
$controller = new ConfigController;

$res = $controller->getById('1');
var_dump($res);
// if(!empty($_POST)){

// 	$res = $controller->sendForm($_POST);	
// 	$dir = 'img/' . $res . '/';
// 		if(!is_dir($dir)) {
// 			 mkdir($dir, 0777, true);
// 		 }

// 	$destiation_dir = $dir . 'banner.jpg';
// 	move_uploaded_file($_FILES['banner']['tmp_name'], $destiation_dir ); 



// }
// $main = $controller->outputForm();

// $controller->render();
