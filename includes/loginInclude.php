<?php
	function isAuth(){
		$isAuth = false;
	
		if(isset($_SESSION['is_auth']) && $_SESSION['is_auth']){
			$isAuth = true;
		}
		elseif(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
			if($_COOKIE['login'] == 'admin' && $_COOKIE['password'] == hash('sha256', 'qwerty')){
				$_SESSION['is_auth'] = true;
				$isAuth = true;
			}
		}
		
		return $isAuth;
	}
	if(!isAuth()){
		header('Location: /login.php');
		exit();
	}
		