<?php
namespace Demo\Startup\Index\Ui;

class IndexController extends ControllerBase
{
    public function show()
    {
       return $this->view('page/index/index');
    }
}