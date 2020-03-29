<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\BaseModel;
use Dva\Hotels\Core\DB;

class BaseController
{
	protected $title;
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
		'content' => $this->content
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
			public function allHotels()
	{
		$mPost = new BaseModel(DB::getConnect());
		$hotelList = $mPost->getHotels();
		$this->content = $this->build($this->myPath('allHotels'), ['content' => $hotelList]);	
	}
		
		// public function lastInsertIdController()
		// {
			// $mPost = new BaseModel(DB::getConnect());
			// return $mPost-lastInsertIdFunction();
		// }


}