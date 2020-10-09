<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class ArticlesModel  Extends AdminModel
{
    public $preview;

    public function getPreview()
    {
        return $this->preview;
    }
    
    public function setPreview($preview)
    {
        $this->preview = $preview;
    }

    protected static function getTableName(): string 
    {
        return 'articles';
    }


}