<?php

namespace app\controller;
use app\model\TimeModel;
use app\view\View;

class HelloController {
    public function hello() {
        $timeModel = new TimeModel();
        $view = new View();
        $view->vista("Hello",$timeModel->getCurrentTime());
    }
}
?>