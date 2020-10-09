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
	$controller->addFeedback($_POST);
	$controller->fUpdate($_FILES, '/img/img-articles/');
}

$controller->outputForm();
$controller->allFeedbacksToAdmin();
$controller->render();
