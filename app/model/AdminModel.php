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

	public static function addDataToBD(array $data)
	{	
		$fields = sprintf('%s',implode(',' , array_keys($data)));
		$value = sprintf(':%s', implode(', :' , array_keys($data)));
		$db = DB::getConnect();
		$sql = sprintf("INSERT INTO %s (%s) VALUES (%s)", static::getTableName(), $fields, $value);
		$stmt = $db->prepare($sql);
		$stmt->execute($data);
		return $db->lastInsertId();
	}
	
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