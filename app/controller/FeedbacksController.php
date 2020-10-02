<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\FeedbackModel;

class FeedbacksController Extends AdminController
{
	//Добавление отзыва в базу
	public function addFeedback($text, $name)
	{
		$lastId = FeedbackModel::addFeedback($text, $name);
		return $lastId;
	}
	//Удаление отзыва из базы
		public function delFB($id)
	{
		$res = FeedbackModel::delById($id);
		$this->err = $this->removeImg($id, 'img-feedbacks');
	}		
	//вывод формы для добавления в админке
	public function outputForm()
	{
		$this->content = $this->build($this->myPath('feedbacks/FeedBackForm'), []);
	}

	public function allFeedbacksToAdmin()
	{
		$res = $this->getAll('feedbacks');
		$this->listForDel = $this->build($this->myPath('feedbacks/FBAdmin'), ['feed' => $res]);	
	}

}