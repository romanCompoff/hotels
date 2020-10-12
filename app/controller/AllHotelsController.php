<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\AllHotelsModel;
use Dva\Hotels\Core\Validator;

class AllHotelsController Extends AdminController
{
   	//вывод формы для добавления в админке
	public function outputForm(array $post=[])
	{
		$this->content = $this->build($this->myPath('allhotels/adminHotels'), ['post'=>$post]);
    }
    
    public function addHotel($post)
    {
        $lastId = AllHotelsModel::addDataToBD($post);
		return $lastId;
    }
    
    public function hotelsList()
    {
        $res = $this->getAll('allhotels');
        $this->listForDel = $this->build($this->myPath('allhotels/adminHotelsList'), ['content' => $res]);
    }

    public function delAllHotels($id)
    {
        $res = AllHotelsModel::delById($id);
        $this->RDir($_SERVER['DOCUMENT_ROOT'] . '/img/img-allHotels/' . $id);
    }

}