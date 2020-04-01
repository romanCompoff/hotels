<?php

namespace Dva\Hotels\Core;

class DB
{
	protected static $instance;
	
	public static function getConnect()
	{
		if(self::$instance === NULL){
			self::$instance = self::connect();
		}
		return self::$instance;
	}
	
	protected static function connect()
	{
		$dsn = sprintf('%s:host=%s;dbname=%s', 'mysql', 'localhost', 'hotels');
		return new \PDO($dsn, 'root', '');
	}

}

// <?php

// namespace Dva\Hotels\Core;

// class DB
// {
	// protected static $instance;
	
	// public static function getConnect()
	// {
		// if(self::$instance === NULL){
			// self::$instance = self::connect();
		// }
		// return self::$instance;
	// }
	
	// protected static function connect()
	// {
		// $dsn = sprintf('%s:host=%s;dbname=%s', 'mysql', 'localhost', 'users_chat');
		// return new \PDO($dsn, 'chat_user', '0p0gtw');
	// }

// }