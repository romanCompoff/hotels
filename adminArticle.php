<?php
session_start();
use Dva\Hotels\controller\AdminController;
use Dva\Hotels\model\BaseModel;

include 'vendor/autoload.php';
	
	
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
		
$controller = new AdminController;

if($_GET['admin'] == 'list'){
	if($_GET['del']){
	$controller->delArticle($_GET['del']);
	}
	$list = $controller->allHotels('adminList');
	$mainArticles = $controller->allArticles('adminArticleList');
}
else{
if(!empty($_POST)){

	foreach($_FILES as $f){
		$i++;
		$l = 'link' . $i;
		$_POST[$l] = $f['name'];
	}
	$res = $controller->addArticles($_POST);	
	$dir = 'myFiles/articles/' . $res . '/';
		if(!is_dir($dir)) {
			 mkdir($dir, 0777, true);
		 }

	$destiation_dir = $dir . $_FILES['link1']['name'];
	$destiation_dir2 = $dir . $_FILES['link2']['name'];
	$destiation_dir3 = $dir . $_FILES['link3']['name'];
	$destiation_dir4 = $dir . $_FILES['link4']['name'];
	move_uploaded_file($_FILES['link1']['tmp_name'], $destiation_dir ); 
	move_uploaded_file($_FILES['link2']['tmp_name'], $destiation_dir2 ); 
	move_uploaded_file($_FILES['link3']['tmp_name'], $destiation_dir3 ); 
	move_uploaded_file($_FILES['link4']['tmp_name'], $destiation_dir4 ); 


}
$main = $controller->outputFormToArticles();
}

$controller->render();
