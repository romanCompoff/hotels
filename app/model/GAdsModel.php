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
<<<<<<< HEAD
		
			function getKeyLoger($k, $campaign)
		{
			$sql = sprintf("SELECT how_much , id FROM %s WHERE campaign = $campaign AND keyword = $k", $this->keyTable);
			$stmt = $this->db->query($sql);
			$how_much = $stmt->fetch();
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
=======
			
			public function editStatus($status, int $id)
		{
			$sql = sprintf("UPDATE %s SET $status = 'OK' WHERE id = :id2", $this->table);
			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'id2' => $id
			]);
		}	
			public function editProfit($summ, int $id)
		{
			$sql = sprintf("UPDATE %s SET profit = :summ WHERE id = :id2", $this->table);
			$stmt = $this->db->prepare($sql);
			$stmt->execute([
			'summ' => $summ,
			'id2' => $id
			]);
			$this->editStatus('status', $id);
			$this->editStatus('callMethod', $id);
>>>>>>> 4f7f13c93e591dabff1e13329431c03aadea09c4
		}
}