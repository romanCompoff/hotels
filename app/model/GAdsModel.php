<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class GAdsModel Extends BaseModel
{
	protected $table = 'gadsstat';
	protected $keyTable = 'keygadsstat';

	
			public function addUser($utm_source, 
									$utm_medium, 
									$utm_campaign,
									$utm_content,
									$utm_term,
									$device,
									$position
									)
		{	
			$sql = sprintf("INSERT INTO %s (utm_source, utm_medium, utm_campaign, utm_content, utm_term, device, position) VALUES (:utm_source, :utm_medium, :utm_campaign, :utm_content, :utm_term, :device, :position)", $this->table);
			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'utm_source' => $utm_source,
			'utm_medium' => $utm_medium,
			'utm_campaign' => $utm_campaign,
			'utm_content' => $utm_content,
			'utm_term' => $utm_term,
			'device' => $device,
			'position' => $position
			]);
			return $this->db->lastInsertId();
		}
		
			public function getUsers()
		{
			// $this->db->setAttribute($this->db::ATTR_DEFAULT_FETCH_MODE,$this->db::FETCH_NUM);
			$sql = sprintf('SELECT * FROM %s WHERE lastTS = "%s"', $this->table, date("Y-m-d"));
			$stmt = $this->db->query($sql);
			return $stmt->fetchAll();
		}
		
			function getKeyLoger($kw, int $campaign)
		{
			var_dump($kw, $campaign);
			$sql = sprintf("SELECT how_much , id FROM %s WHERE campaign = $campaign and keyword = '$kw'", $this->keyTable);
			$stmt = $this->db->query($sql);
			var_dump($stmt);	
			
			$how_much = $stmt->fetch();
			var_dump($sql);
			return $how_much;
		}
		
			function addKeyLoger($id, $how_much)
		{
		
			$sql = sprintf("UPDATE %s SET how_much = :how_much WHERE id = $id", $this->keyTable);
			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'how_much' => $how_much
			]);
			return $stmt->fetch();
		}
			function addKey($k, $campaign)
		{
			$sql = sprintf("INSERT INTO %s (campaign, keyword) VALUES (:campaign, :keyword)", $this->keyTable);
			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'keyword' => $k,
			'campaign' => $campaign
			]);
			return $this->db->lastInsertId();
		}
}