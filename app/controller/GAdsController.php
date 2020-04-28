<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\GAdsModel;
use Dva\Hotels\Core\DB;

class GAdsController Extends AdminController
{
	
		public function addUser($get)
	{

		$mPost = new GAdsModel(DB::getConnect());
		$lastId = $mPost->addUser(	$this->chk($get['utm_source']),
									$this->chk($get['utm_medium']),
									$this->chk($get['utm_campaign']),
									$this->chk($get['utm_content']),
									$this->chk($get['utm_term']),
									$this->chk($get['device']),
									$this->chk($get['position']),
									$this->chk($get['status']),
									$this->chk($get['callMethod']),
									$this->chk($get['profit']));
		return $lastId;
			
	}
	
		public function outputUsers()
	{
			$mPost = new GAdsModel(DB::getConnect());
			$usersList = $mPost->getUsers();
			$this->content = $this->build($this->myPath('adsViews/allUsersList'), ['content' => $usersList]);
	}
	
<<<<<<< HEAD
		public function addKeyLoger($kw, $campaign)
	{
			$mPost = new GAdsModel(DB::getConnect());
			$keyMuch = $mPost->getKeyLoger($kw, $campaign);
			if($keyMuch == false){
				$mPost->addKey($kw, $campaign);
			}
			else{
				$how_much = $keyMuch['how_much'] + 1;
				$id = $keyMuch['id'];
				$keyMuch = $mPost->addKeyLoger($id, $how_much);
			}
	}

=======
		public function sendStatus(int $id , $col)
	{
		$mPost = new GAdsModel(DB::getConnect());
		$mPost->editStatus($col, $id);		
	}	
		public function sendProfit(int $id , $summ)
	{
		$mPost = new GAdsModel(DB::getConnect());
		$mPost->editProfit($summ, $id);	
	}
>>>>>>> 4f7f13c93e591dabff1e13329431c03aadea09c4
}