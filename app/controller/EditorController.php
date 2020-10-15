<?php namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\EditorModel;
use Dva\Hotels\Core\Validator;

class EditorController Extends AdminController
{
    public function outputForm(array $post=[])
	{
		$this->content = $this->build($this->myPath('editordata/editor'), ['post'=>$post]);
    }

    public function getByPageName($pageName)
    {
         $res = EditorModel::getByPageName($pageName);
         $this->content = $this->build($this->myPath('editordata/editor'), ['content' => $res]);
    }
    
    public function addEditorText($post)
    {
        $post['pageName'] = $this->translitSef($post['pageName']);
        $res=EditorModel::getByPageName($post['pageName']);
        if($res){
            $this->outputForm($post);
            throw new \Exception("Материал с таким названием уже существует");
        }
        $lastId = EditorModel::addDataToBD($post);
        return $lastId;
    }

    public function getById(int $id)
   {
        $res = EditorModel::getById($id);
        return $res;
   }

    public function pageList()
    {
        $res = $this->getAll('editordata');
        $this->listForDel = $this->build($this->myPath('editordata/pageList'), ['content' => $res]);
    }

    public function delEditorText($id)
    {
        $res = EditorModel::delById($id);
        $this->RDir($_SERVER['DOCUMENT_ROOT'] . '/img/img-allHotels/' . $id);
    }

    public static function translitSef($value)
    {
        $converter = array(
            'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
            'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
            'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
            'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
            'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
            'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
            'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
        );
    
        $value = mb_strtolower($value);
        $value = strtr($value, $converter);
        $value = mb_ereg_replace('[^-0-9a-z]', '-', $value);
        $value = mb_ereg_replace('[-]+', '-', $value);
        $value = trim($value, '-');	
    
        return $value;
    }
    public function editEditorText($post)
    {
        // $validator = new Validator;
         $res = $this->getById($post['id']);
        //  var_dump($res);
        //  die;
        //  EditorModel::setRulesForValidator($validator);
        //  $isValid = $validator->execut($post);
        //  if(!$isValid){
            //  return 1;
        //  }
             $res->setId($this->chk($post['id']));
             $res->setTitle($this->chk($post['title']));
             $res->setDescription($this->chk($post['description']));
             $res->setMenuName($this->chk($post['menuName']));
             $res->setPageName($this->chk($post['pageName']));
             $res->setEditorText($post['editorText']);
             return $res->update();
 
    }

    public function delPage($id)
    {
        $res = EditorModel::delById($id);
    }
}