<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\FeedbackModel;
use Dva\Hotels\Core\Validator;

class FeedbacksController Extends AdminController
{
	//Добавление отзыва в базу
	public function addFeedback($post)
	{
		$validator = new Validator;
		FeedbackModel::setRulesForValidator($validator);
		$isValid = $validator->execut($post);
        if(!$isValid){
            return 1;
        }
		$lastId = FeedbackModel::addDataToBD($post);
		return $lastId;
	}
	//Удаление отзыва из базы
		public function delFB($id)
	{
		$res = FeedbackModel::delById($id);
		$this->removeImg($id, 'img-feedbacks');
	}		
	//вывод формы для добавления в админке
	public function outputForm(array $post=[])
	{
		$this->content = $this->build($this->myPath('feedbacks/feedBackForm'), ['post'=>$post]);
	}
	//вывод добавленных отзывов
	public function allFeedbacksToAdmin()
	{
		$res = $this->getAll('feedbacks');
		$this->listForDel = $this->build($this->myPath('feedbacks/FBAdmin'), ['feed' => $res]);	
	}

}