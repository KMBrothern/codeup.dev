<?php

require 'model.php';
class User extends Model 
{
    protected static $table = 'Users';
}

echo User::getTableName() . PHP_EOL;