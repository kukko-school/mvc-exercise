<?php

require_once(__DIR__.'/UserService.php');

class AuthenticationService {
    public static function hashPassword($password) {
        return hash('sha3-512', $password);
    }
    public static function authentication($email, $password) {
        if ($user = UserService::getUserByEmail($email)) {
            $_SESSION['user'] = $user['password'] === static::hashPassword($password) ? $user : null;
            return $_SESSION['user'];
        }
    }
    public static function isAuthenticated() {
        return !is_null($_SESSION['user']);
    }
}