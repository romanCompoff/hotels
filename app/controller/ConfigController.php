<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\ConfigModel;
use Dva\Hotels\Core\DB;

class ConfigController Extends AdminController
{
			public function outputForm()
		{
			$mPost = new ConfigModel(DB::getConnect());
			$configsList = $mPost->getConfigs();
			$this->content = $this->build($this->myPath('config'), ['content' => $configsList]);
		}
			public function sendForm($post)
		{
			$mPost = new ConfigModel(DB::getConnect());
			$mPost->editConfigs($this->chk($post['siteName']),								$this->chk($post['menu1']),								$this->chk($post['menu2']),								$this->chk($post['phoneNumber']),								$this->chk($post['phoneNumber2']),								$this->chk($post['heading1']),								$this->chk($post['words1']),								$this->chk($post['heading2']),								$this->chk($post['words2']),								$this->chk($post['adress']),								$this->chk($post['email']));
		
		}
}