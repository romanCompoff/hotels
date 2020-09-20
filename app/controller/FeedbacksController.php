<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\FeedbackModel;
use Dva\Hotels\Core\DB;

class FeedbacksController Extends AdminController
{
		public function addFeedback($text, $name)
		{
			$mPost = new FeedbackModel(DB::getConnect());
			$fb = $mPost->addFeedback($text, $name);
			
			return $fb;

		}
		


		public function outputForm()
		{
			// $mPost = new ConfigModel(DB::getConnect());
			// $configsList = $mPost->getConfigs();
			$this->content = $this->build($this->myPath('feedBackViews/feedBackForm'), []);
		}
}