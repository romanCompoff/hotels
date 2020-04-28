<?php
namespace Dva\Hotels\Router;

use Dva\Hotels\Core\EMailPost;
// use Dva\Hotels\Controller\EMailPost;
include '../../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode("?", $uri);
$uriParts = explode("/", $uriParts[0]);
$uriParts = array_values($uriParts);
		var_dump($uriParts);
if($uriParts[3] == 'sendToEMail'){
	  
	if(isset($_GET['phoneText'])){

		$phone = $_GET['phoneText'];
		$email = $_GET['messageText'];
		$name = $_GET['recipientName'];
		
		// include('../core/EMailPost.php');
		// include('../core/SendMailSmtpClass.php');
		// include('../controller/GAdsController.php');
		// include('../model/GAdsModel.php');
		// include('../controller/AdminController.php');
		// include('../controller/BaseController.php');
		
		$letter = new EMailPost;
		$newLetter = $letter->postMail($phone, $name = '', $email = '');
	}
}