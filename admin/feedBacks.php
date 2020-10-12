<?
use Dva\Hotels\controller\FeedbacksController;
use Dva\Hotels\Core\Auth;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';

session_start();
$Login  = new Auth;
$Login->login();	
try{
$controller = new FeedbacksController;

if($_GET['delfb']){
	$controller->delFB($_GET['delfb']);
}

if(!empty($_POST)){
	$id = $controller->addFeedback($_POST);
	$controller->fUpdate($_FILES, sprintf('/img/img-feedbacks/%s.jpg', $id));
	$_POST = [];
}
}catch(Exception $e){
    $controller->setErr($e->getMessage());
}
$controller->outputForm($_POST);
$controller->allFeedbacksToAdmin();
$controller->render();
