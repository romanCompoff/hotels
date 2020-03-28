<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\BaseModel;
use Dva\Hotels\Core\DB;

class AdminController Extends BaseController
{
		public function outputForm()
		{
			$this->content = $this->build($this->myPath('admin'), []);
		}

		public function addHotels($post)
	{
	
		$mPost = new BaseModel(DB::getConnect());
		$lastId = $mPost->addPost($post['heading'], $post['preview'], $post['link1'], $post['link2'], $post['link3'], $post['link4']);
		return $lastId;
		// $this->content = $this->build($this->myPath('admin'), []);	
	}


}