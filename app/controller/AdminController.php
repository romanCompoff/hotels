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
			public function render()
		{
			echo $this->build(
			$this->myPath('mainAdmin'),
			[
			'content' => $this->content
			]);
		}

		public function addHotels($post)
	{
	
		$mPost = new BaseModel(DB::getConnect());
		$lastId = $mPost->addPost($post['heading'], $post['price'], $post['preview'], $post['link1'], $post['link2'], $post['link3'], $post['link4']);
		return $lastId;
	}
			public function delHotel($id)
	{
			
			$mPost = new baseModel(DB::getConnect());
			$mPost->deletePost($id);
	}


}