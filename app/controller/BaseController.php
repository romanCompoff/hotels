<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\BaseModel;
use Dva\Hotels\Core\DB;
use Dva\Hotels\Core\Request;

class BaseController
{
	protected $title;
	protected $articles;
	protected $configs;
	protected $feedbacks;
	protected $banner = "/img/banner.jpg";
	protected $content;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	private  function getAll($dataForm)
	{
		$mPost = new BaseModel(DB::getConnect());
		$res = $mPost->getAll($dataForm);
		return $res;

	}

	public function renderAllBlocks($dataForm)
	{
		$res = $this->getAll($dataForm);
		$this->$dataForm = $this->build($this->myPath($dataForm .'/'.$dataForm), ['content' => $res]);
	}




	protected function myPath($name)
	{
		$fullPath = sprintf('/../view/%s.html.php', $name);
		$fullPath = __DIR__ . $fullPath;
		return $fullPath;
	}

	
		public function render()
	{
		echo $this->build(
		$this->myPath('main'),
		[
		'content' => $this->content,
		'articles' => $this->articles,
		'configs' => $this->configs,
		'banner' => $this->banner,
		'fb' => $this->feedbacks
		]
		);
	}
	
		protected function build($template, array $params = [])
	{
		ob_start();
		extract($params);
		include_once($template);
		
		return ob_get_clean();

	}

		public function myNotice($myNotice)
	{
		$this->myNotice = $this->build(__DIR__ . '/../views/myNotice.html.php', ['myNotice' => $myNotice]);	
	}

		public function allHotels($page)
	{
		$mPost = new BaseModel(DB::getConnect());
		$hotelList = $mPost->getHotels();
		$this->content = $this->build($this->myPath($page), ['content' => $hotelList]);	
	}
			
		public function allArticles($page)
	{
		$mPost = new BaseModel(DB::getConnect());
		$articlesList = $mPost->getArticles();
		$this->articles = $this->build($this->myPath($page), ['content' => $articlesList]);	
	}
			
		public function allConfigs()
	{
		$mPost = new BaseModel(DB::getConnect());
		$this->configs = $mPost->getConfigs();
	}

		public function allFeedbacks($path = 'feedbacks/feedbacks')
	{
		$mPost = new BaseModel(DB::getConnect());
		$FBList = $mPost->getFB();
		$this->feedbacks = $this->build($this->myPath($path), ['feed' => $FBList]);	
	}

		public function allPrev($admin = false)
	{
		$mPost = new BaseModel(DB::getConnect());
		$prevList = $mPost->getPrev();
		if($admin==true){
			return $prevList;
		}
		else{
		$this->content = $this->build($this->myPath('prevView/allPrev'), ['content' => $prevList]);
		}
	}
	
	 	public function getOne($name)
	{
		$mPost = new BaseModel(DB::getConnect());
		$OneArticle = $mPost->getByName($name);
		$this->configs = $mPost->getConfigs();
		$this->configs['heading1'] = $this->configs['heading2'] = $OneArticle['rusName'];
		$this->configs['words1'] = $this->configs['words2'] = $OneArticle['content'];
		$this->banner = sprintf("/img/img-preview/%s.jpg",$OneArticle['hotelName']);
		return $OneArticle;
	}


	public function allFb($p = 'feedbacks/feedbacks')
	{
		$feed = $this->getAll('feedbackModel');

		var_dump($feed);
		$this->feedbacks = $this->build($this->myPath($p), ['feed' => $FBList]);	
	}

}