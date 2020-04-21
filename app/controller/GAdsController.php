<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\GAdsModel;
use Dva\Hotels\Core\DB;

class GAdsController Extends AdminController
{
	
		public function addUser($get)
	{

		$mPost = new GAdsModel(DB::getConnect());
		$lastId = $mPost->addUser(	$this->chk($get['utm_source']),
									$this->chk($get['utm_medium']),
									$this->chk($get['utm_campaign']),
									$this->chk($get['utm_content']),
									$this->chk($get['utm_term']),
									$this->chk($get['device']),
									$this->chk($get['position']),
									$this->chk($get['status']),
									$this->chk($get['callMethod']),
									$this->chk($get['profit']));
		return $lastId;
			
	}

}