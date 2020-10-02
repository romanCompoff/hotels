<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class AdminModel Extends ActiveRecordParentModel
{
	public static function delById($id)
	{
		$db = DB::getConnect();
		$sql = sprintf('DELETE FROM %s WHERE id = :id', static::getTableName());
		$stmt = $db->prepare($sql);
		$stmt->execute([
			'id' => $id
			]);
	}
	
	// protected $table = 'feedbacks';
	
	
	// public function addFeedback($text, $userName)
	// {	
	// 	$sql = sprintf("INSERT INTO %s (text, userName) VALUES (:text, :userName)", $this->table);
	// 	$stmt = $this->db->prepare($sql);
	// 	$stmt->execute(
	// 		[
	// 		'text' => $text,
	// 		'userName' => $userName
	// 		]);
	// 	return $this->db->lastInsertId();
	// }

	// public function deleteFB($id)
	// {
	// 	$sql = sprintf('DELETE FROM %s WHERE id = :id', 'feedbacks');
	// 	$stmt = $this->db->prepare($sql);
	// 	$stmt->execute([
	// 	'id' => $id
	// 	]);
	// }

}