<?php
use Dva\Hotels\Controller\ConfigController;
use Dva\Hotels\Core\Auth;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';
	
session_start();
$Login  = new Auth;
$Login->login();
try{
$controller = new ConfigController;

if(!empty($_POST)){
    if($_FILES['banner']['size']){
        var_dump($_FILES);
	$dir = $_SERVER['DOCUMENT_ROOT'] . '/img/';
		if(!is_dir($dir)) {
			 mkdir($dir, 0777, true);
		 }
	$destiation_dir = $dir . 'banner.jpg';
    $imgRes = move_uploaded_file($_FILES['banner']['tmp_name'], $destiation_dir ); 
    $imgRes ? $controller->setSuccess("Картинка загружена") : $controller->setErr('Картинка НЕ загружена');
    }
    $res = $controller->editConfigs($_POST);
    $res === null ? $controller->setSuccess("Информация обновлена") : $controller->setErr('Информация НЕ обновлена');
}
}catch(Exception $e){
    $controller->setErr($e->getMessage());
}
$controller->outputForm();
$controller->render();