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
		$lastId = $mPost->addPost(	$this->chk($post['heading']),
									$this->chk($post['price']), 
									$this->chk($post['preview']));
		return $lastId;
	}
	
		public function addArticles($post)
	{
		
		$mPost = new BaseModel(DB::getConnect());
		$lastId = $mPost->addArticle($this->chk($post['preview']));
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
	
			public function chk($word)
	{
			$word = htmlspecialchars($word);
			return $word;
	}


}