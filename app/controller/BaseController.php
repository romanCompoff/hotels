<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\BaseModel;
use Dva\Hotels\Core\DB;

class BaseController
{
	protected $title;
	protected $articles;
	protected $configs;
	protected $content = "Контент в контроллере";

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
		'configs' => $this->configs
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

}