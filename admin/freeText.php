<? use Dva\Hotels\controller\EditorController;
use Dva\Hotels\Core\Auth;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';

session_start();
$Login  = new Auth;
$Login->login();	
		
$controller = new EditorController;

try{
if($_GET['edit']){

	$controller->getByPageName($_GET['edit']);

}elseif($_GET['del']){
	
	$controller->delPage($_GET['del']);

}elseif(!empty($_POST)){
	
	if(!($_POST['id'] == "")){
		
		$controller->editEditorText($_POST);	
	
	}else{
		unset($_POST['id']);
		array_values($_POST);
		$controller->addEditorText($_POST);
	
	}
}else{

	$main = $controller->outputForm();

}
}catch(Exception $e){
    $controller->setErr($e->getMessage());
}
$controller->pageList();
$controller->render();
