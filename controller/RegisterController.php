<?php
require_once(__DIR__.'/ControllerInterface.php');
require_once(__DIR__.'/../service/UserService.php');

class RegisterController implements ControllerInterface{
    public function run(){
        if (!UserService::getUserByEmail($_POST['email'])){
            UserService::createUser($_POST['email'], $_POST['password']);
            header('location:index.php');
        }
        else{
            return 'Van ilyen felhasználó';
        }
    }
}