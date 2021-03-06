<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class FeedbackModel Extends AdminModel
{
	private $text;
	private $userName;
	public static $schema = [
		'userName' => [
			minLength => 3, 
			maxLength => 33,
			isString => true
		],
		'text' => [
			minLength => 3, 
			maxLength => 199,
			isString => true
		],
	];

	public function getText()
	{
		return $this->text;
	}
	
	public function getUserName()
	{
		return $this->userName;
	}
	
	protected static function getTableName(): string 
    {
        return 'feedbacks';
    }

}