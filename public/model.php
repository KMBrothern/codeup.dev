<?php

class Model
{

    protected static $table = 'Keyasha';

    public static function getTableName()
    {

        return static::$table;
    }

    
    private $attributes = [];

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {

        if (array_key_exists($name, $this->attributes)) 
        {

            return $this->attributes[$name];
        }

        return null;
    }


    
}


// echo Model::getTableName() . PHP_EOL;
// $kb = new Model();
// $kb->name = 'Keyasha';
// $kb->gender = 'Female';
// $kb->age = 30;


// echo $kb->name;
// // echo($kb->gender);
// // echo($kb->age);
// echo $kb->test;