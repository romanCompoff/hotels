<?php
use Dva\Hotels\controller\ArticlesController;
use Dva\Hotels\Core\Auth;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';
	
session_start();
$Login  = new Auth;
$Login->login();
		
$controller = new ArticlesController;

if(!empty($_POST)){

	// foreach($_FILES as $f){
	// 	$i++;
	// 	$l = 'link' . $i;
	// 	$_POST[$l] = $f['name'];
	// }
	// var_dump($_POST);
	// die;
	$res = $controller->addArticle($_POST);
	$path = sprintf('/img/img-articles/%s/', $res);
	$file = $controller->fUpdate($_FILES, $path);

	// $dir = $_SERVER['DOCUMENT_ROOT'] . '/img/img-articles/' . $res . '/';
	// 	if(!is_dir($dir)) {
	// 		 mkdir($dir, 0777, true);
	// 	 }

	// $destiation_dir = $dir . 'slide1.jpg';
	// $destiation_dir2 = $dir . 'slide2.jpg';
	// $destiation_dir3 = $dir . 'slide3.jpg';
	// $destiation_dir4 = $dir . 'slide4.jpg';
	// move_uploaded_file($_FILES['link1']['tmp_name'], $destiation_dir ); 
	// move_uploaded_file($_FILES['link2']['tmp_name'], $destiation_dir2 ); 
	// move_uploaded_file($_FILES['link3']['tmp_name'], $destiation_dir3 ); 
	// move_uploaded_file($_FILES['link4']['tmp_name'], $destiation_dir4 ); 

}elseif($_GET['del']){
		$controller->delArticle($_GET['del']);
		}
		// $list = $controller->allHotels('adminList');
		// $mainArticles = $controller->allArticles('adminArticleList');
$controller->outputForm();
$controller->articlesList();
$controller->render();
