<?php

namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\ActiveRecordParentModel;


class ActiveRecordParentController
{
    /** @var View */
    // private $view;
    protected $title;
    protected $articles;
    protected $configs;
    protected $feedbacks;
    protected $banner = "/img/banner.jpg";
    protected $content;

    // public function __construct()
    // {
    //     $this->view = new View(__DIR__ . '/../../../templates');
    // }

    public function getAll($dataForm)
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
        'content' => $this->content,
        'articles' => $this->articles,
        'configs' => $this->configs,
        'banner' => $this->banner,
        'fb' => $this->feedbacks
        ]
        );
    }

}