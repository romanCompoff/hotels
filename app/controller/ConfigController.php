<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\ConfigModel;

class ConfigController Extends AdminController
{

    public function getById(int $id)
   {
        $res = ConfigModel::getById($id);
        $res->setSiteName('Сайтодел');
        $res->setBanner('Сайтодел');
        $res->setMenu1('Сайтодел');
        $res->setMenu2('Сайтодел');
		$res->setPhoneNumber('Сайтодел');
        $res->setPhoneNumber2('Сайтодел');
        $res->setHeading1('Сайтодел');
        $res->setWords1('Сайтодел');
		$res->setHeading2('Сайтодел');
        $res->setWords2('Сайтодел');
        $res->setAdress('Сайтодел');
        $res->setEmail('Сайтодел');
        $res->setTitle('Сайтодел');
        $res->setDescription('Сайтодел');



        return $res;
   }

		// 	public function outputForm()
		// {
		// 	$configsList = $mPost->getConfigs();
		// 	$this->content = $this->build($this->myPath('config'), ['content' => $configsList]);
		// }
		// 	public function sendForm($post)
		// {
		// 	$mPost = new ConfigModel(DB::getConnect());
		// 	$mPost->editConfigs($this->chk($post['siteName']),
		// 						$this->chk($post['menu1']),
		// 						$this->chk($post['menu2']),
		// 						$this->chk($post['phoneNumber']),
		// 						$this->chk($post['phoneNumber2']),
		// 						$this->chk($post['heading1']),
		// 						$this->chk($post['words1']),
		// 						$this->chk($post['heading2']),
		// 						$this->chk($post['words2']),
		// 						$this->chk($post['adress']),
		// 						$this->chk($post['email']),
		// 						$this->chk($post['title']),
		// 						$this->chk($post['description']));
		
		// }
}