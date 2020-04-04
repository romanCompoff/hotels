<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class ConfigModel Extends BaseModel
{
	protected $table = 'site_configs';
	
	public function editConfigs($siteName, $menu1, $menu2, $phoneNumber, $phoneNumber2, $heading1, $words1, $heading2, $words2, $adress, $email)
	{
		$sql = sprintf("UPDATE %s SET siteName = :siteName, menu1 = :menu1, menu2 = :menu2, phoneNumber = :phoneNumber, phoneNumber2 = :phoneNumber2, heading1 = :heading1, words1 = :words1, heading2 = :heading2, words2 = :words2, adress = :adress, email = :email WHERE id = '1'", $this->table);
		$stmt = $this->db->prepare($sql);
		$stmt->execute([
		'siteName' => $siteName,
		'menu1' => $menu1,
		'menu2' => $menu2,
		'phoneNumber' => $phoneNumber,
		'phoneNumber2' => $phoneNumber2,
		'heading1' => $heading1,
		'words1' => $words1,
		'heading2' => $heading2,
		'words2' => $words2,
		'adress' => $adress,
		'email' => $email
		]);
		return $stmt->fetch();
	}
	
}