<?php

namespace Controller;

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