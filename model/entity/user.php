<?php 
class User{
    public  $id;
    public $username;
    public $userpassword;
    public $usermail; 


    public function setAll($username,$userpassword,$usermail){
        $this->username=$username; 
        $this->userpassword=$userpassword; 
        $this->usermail=$usermail;
    }

    public function setID($id){
        $this->id=$id;
    }
    public function setName($username){
        $this->username=$username;
    }
    public function setPassword($userpassword){
        $this->userpassword=$userpassword;
    }
    public function setMail($usermail){
        $this->usermail=$usermail;
    }
    public function getName(){
        return $this->username;
    }
    public function getId(){
        return $this->id;
    }
    public function getPassword(){
        return $this->userpassword; 
    }
    public function getmail(){
        return $this->usermail;
    }

}