<?php
session_start();
use Dva\Hotels\Controller\AdminController;
use Dva\Hotels\Core\Auth;
use Dva\Hotels\model\BaseModel;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';

$Login  = new Auth;

	
$Login->login();
		
$controller = new AdminController;

if($_GET['admin'] == 'list'){
	if($_GET['del']){
	$controller->delHotel($_GET['del']);
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
	$res = $controller->addHotels($_POST);	
	$dir = $_SERVER['DOCUMENT_ROOT'] . '/myFiles/numbers/' . $res . '/';
		if(!is_dir($dir)) {
			 mkdir($dir, 0777, true);
		 }

	$destiation_dir = $dir . 'slide1.jpg';
	$destiation_dir2 = $dir . 'slide2.jpg';
	$destiation_dir3 = $dir . 'slide3.jpg';
	$destiation_dir4 = $dir . 'slide4.jpg';
	move_uploaded_file($_FILES['link1']['tmp_name'], $destiation_dir ); 
	move_uploaded_file($_FILES['link2']['tmp_name'], $destiation_dir2 ); 
	move_uploaded_file($_FILES['link3']['tmp_name'], $destiation_dir3 ); 
	move_uploaded_file($_FILES['link4']['tmp_name'], $destiation_dir4 ); 


}
$main = $controller->outputForm();
}

$controller->render();
