<?php
require_once(__DIR__.'/ControllerInterface.php');
require_once(__DIR__.'/../service/AuthenticationService.php');


class LoginController implements ControllerInterface{
    public function run(){
        if (AuthenticationService::authentication($_POST['email'], $_POST['password'])) {
            return 'Bejelentkeztél!';
        }
        else {
            return 'Helytelen email cím és jelszó páros!';
        }
    }
}