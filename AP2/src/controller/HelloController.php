<?php
class HelloController {
    public function hello() {
        $timeModel = new TimeModel();
        $view = new View();
        $view->vista("Hello",$timeModel->getCurrentTime());
    }
}
?>