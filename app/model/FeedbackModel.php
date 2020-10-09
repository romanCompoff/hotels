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
	
	protected static function getTableName(): string 
    {
        return 'feedbacks';
    }

}