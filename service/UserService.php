<?php

require_once(__DIR__.'/DatabaseService.php');
require_once(__DIR__.'/AuthenticationService.php');


class UserService{
    public static function getUserByEmail($email){
        $result = DatabaseService::getConnection()->query("SELECT * FROM users WHERE email = '".$email."' LIMIT 1");
        if ($result !== false){
            return $result->fetch();
        }
        else{
            print_r(DatabaseService::getConnection()->errorInfo());
        }
    }
    public static function createUser($email, $password) {
        $password = AuthenticationService::hashPassword($password);
        DatabaseService::getConnection()->query("INSERT INTO users (email, password) VALUES ('".$email."','".$password."');");
    }
}