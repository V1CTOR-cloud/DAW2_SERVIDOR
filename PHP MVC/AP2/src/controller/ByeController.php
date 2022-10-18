<?php

namespace app\controller;
use app\model\TimeModel;
use app\view\View;

class ByeController {
    public function bye(){
        $timeModel = new TimeModel();
        $view = new View();
        $view->vista("Bye   ",$timeModel->getCurrentTime());
    }
}
?>