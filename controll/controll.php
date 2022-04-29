<?php 
include_once "/var/www/html/php/api/auth/model/dao/userDao.php";
class Controll{
    private $tableName; 
    private $userDao; 
    public function __construct($tableName)
    {
        $this->tableName=$tableName; 
        $this->userDao=new UserDao($this->tableName);
    }

    public function checkUser(User $usr,$filter){
        
        $result=$this->userDao->find($usr,$filter);
        
        if(count($result)==1){
           
            return ["user"=>$result[0],"code"=>200];
        }
        else {
    
            return 401;
        }

    }
    public function addUser(User $usr){
        $user=$this->userDao->find($usr,["username ="=>$usr->getName()]);
        if(count($user)==0){
            if($this->userDao->insertUser($usr)==true)
            {
                return 201;
            }
            else {
                
                return 500; 
            }
           
        }
        else{
            return 200;
        }
        
    }

    public function updateUser($usr,$filter){
       
        if(count($this->userDao->find($usr,$filter))==1){
            if($this->userDao->updateUser($usr,$filter)){
                return 200;
            }
            else return 500;
        }
        else return 401;
    }
    public function deleteUser($usr,$filter){
        var_dump( $this->userDao->find($usr,$filter));  
        if(count($this->userDao->find($usr,$filter))==1){
            if($this->userDao->deleteUser($usr,$filter)){
                return 200;
            }
            else return 500; 
        }
        else return 401; 
       
    }
    
}