<?php
class HelloControler {
    public function hello() {
        $timeModel = new timeModel();
        require_once '../view/view.php';
        $timeModel = $timeModel->getCurrentTime();
        view("Hello",$timeModel);
    }
}
?>