<?php
namespace Dva\Hotels\Router;

use Dva\Hotels\core\EMailPost;
use Dva\Hotels\Controller\GAdsController;
include '../../vendor/autoload.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode("?", $uri);
$uriParts = explode("/", $uriParts[0]);
$uriParts = array_values($uriParts);
if($uriParts[3] == 'sendToEMail'){
	  
	if(isset($_GET['phoneText'])){
		$kw = $_GET['utm_term'] && $_GET['utm_term'] != '' ? $_GET['utm_term'] : 0;
		$campaign = $_GET['utm_campaign'] && $_GET['utm_campaign'] != '' ? $_GET['utm_campaign'] : 0;
		$email = $_GET['messageText'] && $_GET['messageText'] != '' ? $_GET['messageText'] : 0;
		$name = $_GET['recipientName'] && $_GET['recipientName'] != '' ? $_GET['recipientName'] : 0;

		$phone = $_GET['phoneText'];
		
		$letter = new EMailPost;
		$newLetter = $letter->postMail($phone, $name , $email );
		
		$gAds = new GAdsController;
		$gAds->addKeyLoger($kw, $campaign);
	}
}