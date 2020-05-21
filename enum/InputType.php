<?php

class InputType{
    private $type;
    private static $TEXT;
    private static $FILE;
    private function __construct($type){
        $this->type = $type;
    }
    public function getType(){
        return $this->type;
    }
    public static function initValues() : void{
        self::$TEXT = new InputType('text');
        self::$FILE = new InputType('file');
    }
    public static function getTextInstance() : InputType{
        return self::$TEXT;
    }
    public static function getFileInstance() : InputType{
        return self::$FILE;
    }
}

InputType::initValues();