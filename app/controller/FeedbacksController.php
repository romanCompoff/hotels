<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\FeedbackModel;
use Dva\Hotels\Core\DB;

class FeedbacksController Extends AdminController
{
	//Добавление отзыва в базу
	public function addFeedback($text, $name)
	{
		$mPost = new FeedbackModel(DB::getConnect());
		$fb = $mPost->addFeedback($text, $name);
		
		return $fb;
	}
	//Удаление отзыва из базы
		public function delFB($id)
	{
			
		$mPost = new FeedbackModel(DB::getConnect());
		$mPost->deleteFB($id);
		$this->err = $this->removeImg($id, 'img-feedbacks');
	}		
	//вывод формы для добавления в админке
	public function outputForm()
	{
		$this->content = $this->build($this->myPath('feedbacks/feedBackForm'), []);
	}

}