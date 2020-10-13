<?php

namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\ActiveRecordParentModel;


abstract class ActiveRecordParentController
{
    /** @var View */
    // private $view;
    protected $title;
    protected $content;
    protected $description;
    protected $articles;
    protected $configs;
    protected $feedbacks;
    protected $banner = "/img/banner.jpg";
    protected $allhotels;

    protected function getAll($dataForm)
    {
        $res = ActiveRecordParentModel::getAll($dataForm);
        return $res;
    }

    public function renderAllBlocks($dataForm)
    {
        $res = $this->getAll($dataForm);

        $this->$dataForm = $this->build($this->myPath($dataForm .'/'.$dataForm), ['content' => $res]);
    }

     protected function build($template, array $params = [])
    {
        ob_start();
        extract($params);
        include_once($template);
        return ob_get_clean();
    }

    protected function myPath($name)
    {
        $fullPath = sprintf('/../view/%s.html.php', $name);
        $fullPath = __DIR__ . $fullPath;
        return $fullPath;
    }

        public function render()
    {
        echo $this->build(
        $this->myPath('main'),
        [
        'title' => $this->title,
        'description' => $this->description,
        'content' => $this->content,
        'allhotels' => $this->allhotels,
        'articles' => $this->articles,
        'configs' => $this->configs,
        'banner' => $this->banner,
        'fb' => $this->feedbacks
        ]
        );
    }

    public function getById(int $id)
   {
        $res = ActiveRecordParentModel::getById($id);
        return $res;
   }

}