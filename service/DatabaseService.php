<?php

class DatabaseService{
    private static $connection;
    public static function getConnection(){
        if (!isset(static::$connection)){
            static::$connection = new PDO('mysql:host=localhost;dbname=mvc_exercise', 'root', '');
        }
        return static::$connection;
    }
}