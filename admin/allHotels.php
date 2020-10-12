<? use Dva\Hotels\controller\AllHotelsController;
use Dva\Hotels\Core\Auth;

include $_SERVER['DOCUMENT_ROOT'] .'/vendor/autoload.php';

session_start();
$Login  = new Auth;
$Login->login();	
		
$controller = new AllHotelsController;

	if($_GET['del']){
		$controller->delAllHotels($_GET['del']);
	}
	if(!empty($_POST)){
		$res = $controller->addHotel($_POST);
		$path = sprintf('/img/img-allhotels/%s/', $res);
		$file = $controller->fUpdate($_FILES, $path);
	}

$controller->hotelsList();
$main = $controller->outputForm();
$controller->render();
