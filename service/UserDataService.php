<?php

require_once(__DIR__.'/DatabaseService.php');
require_once(__DIR__.'/AuthenticationService.php');


class UserDataService{
    public static function getDataForUser($userId){
        $output = [];
        $result = DatabaseService::getConnection()->query("SELECT * FROM user_data WHERE fk_user = '$userId'");
        foreach ($result as $row) {
            $output[$row['data_key']] = $row['data_value'];
        }
        return $output;
    }
}