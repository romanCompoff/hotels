<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\core\DB;

class IndexModel Extends ActiveRecordParentModel
{
    public function getTableName()
    {
        return 'site_configs';
    }
}