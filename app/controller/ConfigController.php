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
			$mPost->editConfigs($post['siteName'], $post['menu1'], $post['menu2'], $post['phoneNumber'], $post['phoneNumber2'], $post['heading1'], $post['words1'], $post['heading2'], $post['words2'], $post['adress'], $post['email']);
		
		}
}