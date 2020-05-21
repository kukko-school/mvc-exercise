<?php

namespace Controller;

class LoginController implements ControllerInterface{
    public function run(){
        if (AuthenticationService::authentication($_POST['email'], $_POST['password'])) {
            header('location:index.php');
        }
        else {
            return 'Helytelen email cím és jelszó páros!';
        }
    }
}