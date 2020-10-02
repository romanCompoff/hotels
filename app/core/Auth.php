<?php namespace Dva\Hotels\Core;

class Auth
{
private $isAuth = false;

public function isAuth()
	{
	
	if(isset($_SESSION['is_auth']) && $_SESSION['is_auth']){
		$this->isAuth = true;
	}
	elseif(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
		if($_COOKIE['login'] == 'admin' && $_COOKIE['password'] == hash('sha256', 'qwerty')){
			$_SESSION['is_auth'] = true;
			$this->isAuth = true;
			}
		}
		
		return $this->isAuth;
	}

	public function login()
	{
		if(!$this->isAuth()){
		header('Location: login.php');
		exit();
	}
	}
}
