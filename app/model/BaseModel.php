<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class BaseModel
{
	protected $db;
	protected $table = 'allhotels';
	
		public function __construct($db)
	{
		$this->db = $db;
		$this->db->exec('SET NAMES UTF8');
	}
		function getHotels()
	{
		$this->db->setAttribute($this->db::ATTR_DEFAULT_FETCH_MODE,$this->db::FETCH_NUM);
		$sql = sprintf('SELECT * FROM %s', $this->table);
		$stmt = $this->db->query($sql);
		return $stmt->fetchAll();
	}
	
			public function deletePost($id)
		{
			$sql = sprintf('DELETE FROM %s WHERE id = :id', $this->table);

			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'id' => $id
		]);
		}
			
		public function addPost($heading, $price, $preview, $link1, $link2, $link3, $link4)
	{	
			$sql = sprintf("INSERT INTO %s (heading, price, preview, img1, img2, img3, img4) VALUES (:heading, :price, :preview, :link1, :link2, :link3, :link4)", $this->table);
			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'heading' => $heading,
			'price' => $price,
			'preview' => $preview,
			'link1' => $link1,
			'link2' => $link2,
			'link3' => $link3,
			'link4' => $link4
			]);
			return $this->db->lastInsertId();
		}
}