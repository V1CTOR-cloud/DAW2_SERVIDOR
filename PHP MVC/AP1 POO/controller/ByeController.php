<?php
class ByeController {
    public function bye(){
        $timeModel = new TimeModel();
        $view = new View();
        $view->vista("Bye   ",$timeModel->getCurrentTime());
    }
}
?>