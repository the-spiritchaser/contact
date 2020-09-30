<?php
class FormValidator{
    public $errorMsg;

    function __construct(){
        $errorMsg = [];

        $this->nullCheck($_POST);
        $this->encodingCheck($_POST);
    }

    function nullCheck($data){
        foreach($data as $value){
            if (preg_match('/\0/', $value)){
                $this->errorMsg['null'] = "不正な文字を含んでいます。";
            }
        }
    }
    function encodingCheck($data){
        foreach($data as $value){
            if (!mb_check_encoding($value, 'UTF-8')){
                $this->errorMsg['encoding'] = "不正な文字コードです。";
            }
        }
    }
    function requiredCheck($value, $name){
        if (trim($value) === '') {
            $this->errorMsg["$name"] = "{$name}を入力してください。";
        }
    }
    
}
