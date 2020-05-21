<?php

class UserDataService{
    public static function getDataForUser($userId){
        $output = [];
        $result = DatabaseService::getConnection()->query("SELECT * FROM user_data WHERE fk_user = '$userId'");
        foreach ($result as $row) {
            $output[$row['data_key']] = $row['data_value'];
        }
        return $output;
    }
    public static function storeDataForUser($userId, $data){
        foreach ($data as $key => $value) {
            if (DatabaseService::getConnection()->query("SELECT COUNT(1) FROM user_data WHERE fk_user = '$userId' AND data_key = '$key'")->fetchColumn() > 0){
                DatabaseService::getConnection()->query("UPDATE user_data SET data_value = '$value' WHERE fk_user = '$userId' AND data_key = '$key'");
            }
            else{
                DatabaseService::getConnection()->query("INSERT INTO user_data (fk_user, data_key, data_value) VALUES ('$userId', '$key', '$value')");
            }
        }
    }
}