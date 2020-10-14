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

    public function err404()
    {
        header("HTTP/1.0 404 Not Found");
        exit;
    }

}