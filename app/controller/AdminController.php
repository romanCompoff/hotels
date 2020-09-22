<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\BaseModel;
use Dva\Hotels\Core\DB;

class AdminController Extends BaseController
{
	protected $err;

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
		'err' => $this->err,
		'content' => $this->content,
		'articles' => $this->articles,
		'fb' => $this->fb
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

		public function fUpdate($old, $new, $dir)
	{
		$new = $_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $new);
		move_uploaded_file($old, $new);
	}

		protected function removeImg($name, $dir)
	{
		if(file_exists( $_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $name))){
			unlink($_SERVER['DOCUMENT_ROOT'] . sprintf('/img/%s/%s.jpg', $dir, $name));
			return 'Изображение успешно удалено';
		}else{
			return 'Неправильный путь к изображению';
		}
		
		}
}