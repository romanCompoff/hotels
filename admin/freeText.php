<? use Dva\Hotels\controller\EditorController;
use Dva\Hotels\Core\Auth;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';

session_start();
$Login  = new Auth;
$Login->login();	
		
$controller = new EditorController;


$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode("/", $uri);
$uriParts = array_values($uriParts);
var_dump($uriParts);
die;

	if($_GET['del']){
		$controller->delAllHotels($_GET['del']);
	}
	if(!empty($_POST)){
		$res = $controller->addEditorText($_POST);
		var_dump($res);
        $controller->getById($res);
	}else{
		$main = $controller->outputForm();
	}

// $controller->pageList();
$controller->render();
