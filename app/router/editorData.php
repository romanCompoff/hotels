<?php
namespace Dva\Hotels\Router;

use Dva\Hotels\Controller\EditorController;
include '../../vendor/autoload.php';

// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);


$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode("?", $uri);
$uriParts = explode("/", $uriParts[0]);
$uriParts = array_values($uriParts);
if($uriParts[3] == 'editorData.php'){
	if(isset($_POST['editorText'])){
        $controller = new EditorController;
        $res = $controller->addEditorText($_POST);
		
		if($res ?? is_int($res)){
			$msg = "<span style = 'color:green;'>Данные добавлены</span>";
		}else{
			$msg = "<span style = 'color:red;'>Данные не добавлены</span>";
		}
        echo $msg;
	}
}
