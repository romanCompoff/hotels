<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\BaseModel;
use Dva\Hotels\Core\DB;

class IndexController Extends BaseController
{
	public function indexAction()
	{
		$mPost = new BaseModel(DB::getConnect());
		$hotelList = $mPost->getHotels();
		return $hotelList;
	}
}