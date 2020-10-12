<?php
namespace Dva\Hotels\Router;

use Dva\Hotels\core\EMailPost;
// use Dva\Hotels\Controller\GAdsController;
include '../../vendor/autoload.php';

// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);


$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode("?", $uri);
$uriParts = explode("/", $uriParts[0]);
$uriParts = array_values($uriParts);
if($uriParts[3] == 'sendToEMail'){
	if(isset($_POST['phoneText'])){
		$kw = $_POST['utm_term'] && $_POST['utm_term'] != '' ? $_POST['utm_term'] : 0;
		$campaign = $_POST['utm_campaign'] && $_POST['utm_campaign'] != '' ? $_POST['utm_campaign'] : 0;
		$email = $_POST['messageText'] && $_POST['messageText'] != '' ? $_POST['messageText'] : 0;
		$name = $_POST['recipientName'] && $_POST['recipientName'] != '' ? $_POST['recipientName'] : 0;
		$siteName = $_POST['siteName'] && $_POST['siteName'] != '' ? $_POST['siteName'] : 0;
		$phone = $_POST['phoneText'];
		$letter = new EMailPost;
		$newLetter = $letter->postMail($phone, $name , $email, $kw, $siteName );
		
		if($newLetter === true){
			$msg = "<span style = 'color:green;'>Письмо отправлено</span>";
		}else{
			$msg = "<span style = 'color:red;'>Письмо не отправлено</span>";
		}
		echo $msg;
		// $gAds = new GAdsController;
		// $gAds->addKeyLoger($kw, $campaign);
	}
}
