<?php
require_once(__DIR__.'/ControllerInterface.php');

class LoginController implements ControllerInterface{
    public function run(){
        return 'Bejelentkeztél!';
    }
}