<?php 
use Dva\Hotels\controller\PrevController;
use Dva\Hotels\core\Core;
use Dva\Hotels\model\BaseModel;

include '../vendor/autoload.php';

$controller = new PrevController;

	if($_GET['del']){
		$controller->delPrev($_GET['del']);
	}
	
	if(!empty($_POST)){
	
		$enName = Core::translitSef($_POST['rusName']);

		$c = $controller->addPrev($enName, $_POST);
	
		if(!$c){

			$f  = $_FILES['pic']['tmp_name'];

			$controller->fUpdate($f, $enName, 'img-preview');
		}
}


$controller->getAll();

$main = $controller->outputForm();
$controller->render();