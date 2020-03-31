<?php

use Dva\Hotels\controller\AdminController;
use Dva\Hotels\model\BaseModel;

include 'vendor/autoload.php';

$controller = new AdminController;

if($_GET['admin'] == 'list'){
	if($_GET['del']){
	$controller->delHotel($_GET['del']);
	
	}
	$list = $controller->allHotels('adminlist');
}
else{
if(!empty($_POST)){

	foreach($_FILES as $f){
		$i++;
		$l = 'link' . $i;
		$_POST[$l] = $f['name'];
	}
	$res = $controller->addHotels($_POST);	
	$dir = 'myFiles/' . $res . '/';
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
$main = $controller->outputForm();
}

$controller->render();
