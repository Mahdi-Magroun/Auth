<?php

include_once "/var/www/html/php/api/auth/myLib/ORM.class.php";
include_once "/var/www/html/php/api/auth/model/entity/user.php";
class UserDao{
    private $tableName;
    public function __construct($tableName)
    {
        $this->tableName=$tableName;
    }

    public function find(User $usr,array $filter ){
       return  ORM::search($usr,$filter,$this->tableName);
    }

    public function insertUser(User $usr):bool{
        return ORM::insert($usr,$this->tableName);
    }

    public function updateUser(User $usr,array $filter):bool{
       return  ORM::update($usr,$filter,$this->tableName);
    }
    public function deleteUser(User $usr,array $filter){
        return ORM::delete($usr,$filter,$this->tableName);
    }
}