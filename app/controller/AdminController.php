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
		
		public function outputFormToArticles()
		{
			$this->content = $this->build($this->myPath('adminArticles'), []);
		}
		
			public function render()
		{
			echo $this->build(
			$this->myPath('mainAdmin'),
			[
			'content' => $this->content,
			'articles' => $this->articles
			]);
		}

		public function addHotels($post)
	{
	
		$mPost = new BaseModel(DB::getConnect());
		$lastId = $mPost->addPost($post['heading'], $post['price'], $post['preview'], $post['link1'], $post['link2'], $post['link3'], $post['link4']);
		return $lastId;
	}
	
		public function addArticles($post)
	{
	
		$mPost = new BaseModel(DB::getConnect());
		$lastId = $mPost->addArticle($post['preview'], $post['link1'], $post['link2'], $post['link3'], $post['link4']);
		return $lastId;
	}
	
			public function delHotel($id)
	{
			
			$mPost = new baseModel(DB::getConnect());
			$mPost->deletePost($id);
	}			
	
			public function delArticle($id)
	{
			
			$mPost = new baseModel(DB::getConnect());
			$mPost->deleteArticle($id);
	}


}