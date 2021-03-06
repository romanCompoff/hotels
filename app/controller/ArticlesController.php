<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\ArticlesModel;
use Dva\Hotels\Core\Validator;

class ArticlesController Extends AdminController
{
    public function outputForm()
    {
        $pageChanger = $this->getAll('editordata', 'pageName, title');
        $pageChanger = $this->build($this->myPath('admin/pageChanger'), ['content'=>$pageChanger]);
        $this->content = $this->build($this->myPath('articles/adminArticles'), ['pageChanger'=>$pageChanger]);
    }    
    
    public function articlesList()
    {
        $res = $this->getAll(articles);
        $this->listForDel = $this->build($this->myPath('articles/adminArticleList'), ['content' => $res]);
    }

    //Удаление из базы
	public function delArticle($id)
    {
        $res = ArticlesModel::delById($id);
        $this->RDir($_SERVER['DOCUMENT_ROOT'] . '/img/img-articles/' . $id);
    }

    public function addArticle($post)
    {
        $lastId = ArticlesModel::addDataToBD($post);
		return $lastId;
    }
}