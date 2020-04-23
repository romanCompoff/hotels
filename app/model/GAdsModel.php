<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class GAdsModel Extends BaseModel
{
	protected $table = 'gadsstat';

	
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
		}
}