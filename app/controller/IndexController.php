<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\IndexModel;


class IndexController Extends ActiveRecordParentController
{
    const CONFIGS = 1;

    protected $menu;

    public function getConfig()
    {
        $res = $this->getAll('site_configs');
        $this->configs = $res[0];
        $this->title = $res[0]['title'];
        $this->description = $res[0]['description'];

    }

    public function pageRout($pageName)
    {
        $res = IndexModel::getByPageName($pageName);
        if(!$res){
            $this->err404();
        }
        $this->title = $res['title'];
        $this->description = $res['description'];
        $this->content = $this->build($this->myPath('editordata/editorText'), ['content' => $res['editorText']]);
    
    }

    public function indexRouter(array $uri)
    {
        if($uri[0] ?? $uri[0] != ""){
            if(substr($uri[0], -5) == '.html'){
                $pageName = substr_replace($uri[0], '', -5);
            }else{
                $pageName = $uri[0];
            }
            if($uri[1]){
                $this->err404();
            }
            $this->pageRout($pageName);
        }else{
            $pageName = "index";
        }
        return $pageName;
    }

    public function menuList()
    {
        $res = $this->getAll('editordata', 'menuName, pageName');
        $this->menu = $this->build($this->myPath('menu/mainMenu'), ['content' => $res]);
    }

    public function err404()
    {
        header("HTTP/1.0 404 Not Found");
        exit;
    }

}