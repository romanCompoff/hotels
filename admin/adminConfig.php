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
        $controller->fUpdate($_FILES, '/img/banner.jpg');
    }
    $res = $controller->editConfigs($_POST);
    $res === null ? $controller->setSuccess("Информация обновлена") : $controller->setErr('Информация НЕ обновлена');
}
}catch(Exception $e){
    $controller->setErr($e->getMessage());
}
$controller->outputForm();
$controller->render();