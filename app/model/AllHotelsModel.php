<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class AllHotelsModel Extends AdminModel
{
    private $heading;
    private $preview;
    private $price;
    public static function getTableName()
    {
        return 'allhotels';
    }



}