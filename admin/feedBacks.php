<?
use Dva\Hotels\controller\FeedbacksController;
use Dva\Hotels\model\FeedbackModel;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';
	

$controller = new FeedbacksController;

if($_GET['delfb']){

	$controller->delFB($_GET['delfb']);

}

if(!empty($_POST)){

	$c = $controller->addFeedback($_POST['fbc'], $_POST['userNname']);

	$f  = $_FILES['pic']['tmp_name'];

	$controller->fUpdate($f, $c, 'img-feedbacks');

}

$main = $controller->outputForm();
$feedbacks = $controller->allFeedbacks('feedBackViews/FBAdmin', '');
$controller->render();
