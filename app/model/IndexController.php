<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class IndexModel Extends ActiveRecordParentModel
{
    public function getTableName()
    {
        return 'site_configs';
    }
}