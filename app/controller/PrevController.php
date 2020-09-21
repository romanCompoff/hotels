<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\model\PrevModel;
use Dva\Hotels\core\DB;

class PrevController Extends AdminController
{
	public function addPrev($enName, $post)
	{
		$mPost = new PrevModel(DB::getConnect());
		$resUniq = $mPost->addPrev($enName, $post);
		$this->err = $resUniq;
		return $resUniq;

	}
	
	public function delPrev($name)
	{
		$mPost = new PrevModel(DB::getConnect());
		$res = $mPost->deletePrev($name);
		
		$this->removeImg($name, 'img-preview');
	}
	public function getAll()
	{
		$mPost = new PrevModel(DB::getConnect());
		$res = $mPost->getPrev($name);
		
		$this->articles = $this->build($this->myPath('prevView/prevAdmin'), ['prev' => $res]);
	}


	
			public function outputForm()
		{

			$this->content = $this->build($this->myPath('prevView/addPrevView'), [$err => $this->err]);
		}
		
 		public function getOne($name)
	{
		$mPost = new PrevModel(DB::getConnect());
		$OneArticle = $mPost->getByName($name);
		$hotelList = $mPost->getHotels();
		$this->content = $this->build($this->myPath($page), ['content' => $hotelList]);	
		$articlesList = $mPost->getArticles();
		$this->articles = $this->build($this->myPath($page), ['content' => $articlesList]);	
		return $OneArticle;
	}
		
}