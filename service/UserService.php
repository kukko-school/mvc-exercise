<?php

require_once(__DIR__.'/DatabaseService.php');

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
}