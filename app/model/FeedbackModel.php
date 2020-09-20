<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class FeedbackModel Extends BaseModel
{
	protected $table = 'feedbacks';
	
	
	public function addFeedback($text, $userName)
	{	
		$sql = sprintf("INSERT INTO %s (text, userName) VALUES (:text, :userName)", $this->table);
		$stmt = $this->db->prepare($sql);
		$stmt->execute(['text' => $text,
		'userName' => $userName
		]);
		return $this->db->lastInsertId();
	}

		public function outputForm()
	{
			// $mPost = new ConfigModel(DB::getConnect());
			// $configsList = $mPost->getConfigs();
		$this->content = $this->build($this->myPath('feedBackViews/feedBackForm'), []);
	}
		
/*	public function editConfigs($siteName, $menu1)
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
	}*/
	
}