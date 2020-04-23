<?php
session_start();
use Dva\Hotels\controller\GAdsController;
use Dva\Hotels\model\GAdsModel;

include '../vendor/autoload.php';	
include '../includes/loginInclude.php';

$controller = new GAdsController;
if($_GET['status'] && $_GET['status'] != ''){
	$controller->sendStatus($_GET['id'] , $_GET['status']);
}
if($_POST['summ'] && $_POST['summ'] != ''){
	$controller->sendProfit($_POST['id'] , $_POST['summ']);
}
$main = $controller->outputUsers();


$controller->render();
