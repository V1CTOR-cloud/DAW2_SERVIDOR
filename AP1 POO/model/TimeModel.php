<?php
class TimeModel {
    public function getCurrentTime(){
        return date("h:i:s", time());
    }
}
?>