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
		
			function getUsers()
		{
			// $this->db->setAttribute($this->db::ATTR_DEFAULT_FETCH_MODE,$this->db::FETCH_NUM);
			$sql = sprintf('SELECT * FROM %s', $this->table);
			$stmt = $this->db->query($sql);
			return $stmt->fetchAll();
		}
}