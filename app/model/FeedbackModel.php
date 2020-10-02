<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class FeedbackModel Extends AdminModel
{
	private $text;
	private $userName;

	public function getText()
	{
		return $this->text;
	}
	
	public function getUserName()
	{
		return $this->userName;
	}
	
	public function addFeedback(string $text, string $userName)
	{	
		$db = DB::getConnect();
		$sql = sprintf("INSERT INTO %s (text, userName) VALUES (:text, :userName)", static::getTableName());
		$stmt = $db->prepare($sql);
		$stmt->execute(
			[
			'text' => $text,
			'userName' => $userName
			]);
		return $db->lastInsertId();
	}
	
	protected static function getTableName(): string 
    {
        return 'feedbacks';
    }

}