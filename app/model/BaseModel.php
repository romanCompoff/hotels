<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class BaseModel
{
	protected $db;
	
		public function __construct($db)
	{
		$this->db = $db;
	}
	 function getOne($db)
	{
		// $a->setAttribute($this->db::ATTR_DEFAULT_FETCH_MODE,$this->db::FETCH_NUM);
		// var_dump($db);
		// die;
		$sql = sprintf('SELECT * FROM %s', 'allHotels');
		$stmt = $db->query($sql);
		return $stmt->fetchAll();
	}
}