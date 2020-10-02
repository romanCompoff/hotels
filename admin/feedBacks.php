<?
use Dva\Hotels\controller\FeedbacksController;
use Dva\Hotels\Core\Auth;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';

session_start();
$Login  = new Auth;
$Login->login();	

$controller = new FeedbacksController;

if($_GET['delfb']){
	$controller->delFB($_GET['delfb']);
}

if(!empty($_POST)){
	$c = $controller->addFeedback($_POST['fbc'], $_POST['userNname']);
	$f  = $_FILES['pic']['tmp_name'];
	$controller->fUpdate($f, $c, 'img-feedbacks');
}

$controller->outputForm();
$controller->allFeedbacksToAdmin();
$controller->render();
