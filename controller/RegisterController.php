<?php
require_once(__DIR__.'/ControllerInterface.php');
require_once(__DIR__.'/../service/UserService.php');

class RegisterController implements ControllerInterface{
    public function run(){
        if (UserService::getUserByEmail($_POST['email'])){
            return 'Van ilyen felhasználó';
        }
        else{
            return 'Nincs ilyen felhasználó';
        }
    }
}