<?php
session_start();
use Dva\Hotels\controller\ConfigController;
use Dva\Hotels\model\ConfigModel;

include $_SERVER['DOCUMENT_ROOT'] .'vendor/autoload.php';
	
	
	function isAuth(){
		$isAuth = false;
	
		if(isset($_SESSION['is_auth']) && $_SESSION['is_auth']){
			$isAuth = true;
		}
		elseif(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
			if($_COOKIE['login'] == 'admin' && $_COOKIE['password'] == hash('sha256', 'qwerty')){
				$_SESSION['is_auth'] = true;
				$isAuth = true;
			}
		}
		
		return $isAuth;
	}
	if(!isAuth()){
		header('Location: login.php');
		exit();
	}
		
$controller = new ConfigController;

if(!empty($_POST)){

	$res = $controller->sendForm($_POST);	
	$dir = 'img/' . $res . '/';
		if(!is_dir($dir)) {
			 mkdir($dir, 0777, true);
		 }

	$destiation_dir = $dir . 'banner.jpg';
	move_uploaded_file($_FILES['banner']['tmp_name'], $destiation_dir ); 



}
$main = $controller->outputForm();

$controller->render();
