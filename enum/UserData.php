<?php

require_once(__DIR__.'/InputType.php');

class UserData{
    private $key;
    private $type;
    private static $NAME;
    private static $PROFILE_PICTURE;
    private function __construct($key, InputType $type = null){
        $this->key = $key;
        $this->type = !is_null($type) ? $type : InputType::getTextInstance();
    }
    public function getKey(){
        return $this->key;
    }
    public function getType(){
        return $this->type;
    }
    public static function initValues(){
        self::$NAME = new UserData('name');
        self::$PROFILE_PICTURE = new UserData('profile_picture', InputType::getFileInstance());
    }
    public static function getNameInstance(){
        return self::$NAME;
    }
    public static function getProfilePictureInstance(){
        return self::$PROFILE_PICTURE;
    }
}

UserData::initValues();