<?php
require_once '../model/TimeModel.php';
require_once '../view/view.php';
function bye(){
    view("Bye   ",getCurrentTime());
}
?>