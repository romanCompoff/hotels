<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class EditorModel Extends AdminModel
{
    private $title;
    private $description;
    private $editorText;
    public static $schema = [
        title => [
            minLength=>30,
            maxLength=>100,
            isString=>true
        ],
        description => [
            minLength=>120,
            maxLength=>270,
            isString=>true
        ],
        menuName => [
            minLength=>1,
            maxLength=>50
        ],
        pageName => [
            minLength=>1,
            maxLength=>50
        ],
        editorText => [
            minLength=>0,
            isString=>true
        ]
        ];

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }
  
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getMenuName()
    {
        return $this->menuName;
    }
  
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    }
  
    public function getEditorText()
    {
        return $this->editorText;
    }
  
    public function setEditorText($editorText)
    {
        $this->editorText = $editorText;
    }
  
    public static function getTableName()
    {
        return 'editordata';
    }

    public function update()
    {
        $db = DB::getConnect();
		$sql = sprintf("UPDATE %s SET title = :title, description = :description, menuName = :menuName, pageName = :pageName, editorText = :editorText WHERE id = :id", $this->getTableName());
        // var_dump($sql);
        // die;
        $stmt = $db->prepare($sql);
		$stmt->execute([
		'title' => $this->getTitle(),
		'description' => $this->getDescription(),
		'menuName' => $this->getMenuName(),
		'pageName' => $this->getPageName(),
        'editorText' => $this->getEditorText(),
        'id' => $this->getId()
        ]);
        
     return $stmt->error_list;
    }

}