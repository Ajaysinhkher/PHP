<?php 
namespace core;

class Validator{

    // declaring string() as a static function as it do not require any "this" keyword that i snothing from outside
    public static function string($value, $min=1, $max=INF){

        $value = trim($value);

        return strlen($value)>= $min && strlen($value)<=$max;
    }

    public static function email($value){
        
        return filter_val($value,FILTER_VALIDATE_EMAIL);
    }

}

?>