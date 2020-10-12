<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class EditorModel Extends AdminModel
{
    private $title;
    private $description;
    private $pageName;
    private $editorText;

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }
  
    public function getPageName()
    {
        return $this->pageName;
    }
  
    public function getEditorText()
    {
        return $this->editorText;
    }
  
    public static function getTableName()
    {
        return 'editordata';
    }

}