<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\IndexModel;


class IndexController Extends ActiveRecordParentController
{
    const CONFIGS = 1;
    public function getConfig()
    {
        $res = $this->getAll('site_configs');
        $this->configs = $res[0];
    }

}