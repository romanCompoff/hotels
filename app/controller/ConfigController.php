<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\ConfigModel;
use Dva\Hotels\Core\Validator;

class ConfigController Extends AdminController
{
    const CONFIGS_ID = 1;
    public function outputForm()
    {
        $configsList = $this->getById(self::CONFIGS_ID);
        $this->content = $this->build($this->myPath('config'), ['content' => $configsList]);
    }

    public function getById(int $id)
   {
        $res = ConfigModel::getById($id);
        // $res->getSiteName();
        // $res->getBanner();
        // $res->getMenu1();
        // $res->getMenu2();
		// $res->getPhoneNumber();
        // $res->getPhoneNumber2();
        // $res->getHeading1();
        // $res->getWords1();
		// $res->getHeading2();
        // $res->getWords2();
        // $res->getAdress();
        // $res->getEmail();
        // $res->getTitle();
        // $res->getDescription();
        return $res;
   }

   public function editConfigs($post)
   {
       $validator = new Validator;
        $res = $this->getById(self::CONFIGS_ID);
        $res->setRulesForValidator($validator);
        $validator->execut($post);
            $res->setSiteName($this->chk($post['siteName']));
            $res->setBanner($this->chk($post['setBanner']));
            $res->setMenu1($this->chk($post['menu1']));
            $res->setMenu2($this->chk($post['menu2']));
		    $res->setPhoneNumber($this->chk($post['phoneNumber']));
            $res->setPhoneNumber2($this->chk($post['phoneNumber2']));
            $res->setHeading1($this->chk($post['heading1']));
            $res->setWords1($this->chk($post['words1']));
		    $res->setHeading2($this->chk($post['heading2']));
            $res->setWords2($this->chk($post['words2']));
            $res->setAdress($this->chk($post['adress']));
            $res->setEmail($this->chk($post['email']));
            $res->setTitle($this->chk($post['title']));
            $res->setDescription($this->chk($post['description']));
            return $res->update();

   }
}