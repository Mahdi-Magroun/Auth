<?php 
include_once "../controll/controll.php";
include_once "../model/entity/user.php";
$controller = new Controll("user");
if($_SERVER['REQUEST_METHOD']=="POST"&& $_POST['action']=="check"){
    if(isset($_GET['username'])&&isset($_GET['userpassword'])){

    $user=new User();
    $user->setName($POST['username']);
    $user->setPassword($POST['userpassword']);
    $result= $controller->checkUser($user,["userpassword ="=>$user->getPassword(),"and username = "=>$user->getName()]); 
    if(is_array($result)){
        http_response_code($result["code"]);
        echo json_encode($result["user"]);
    }
    else {
        http_response_code($result);
        
    } 
}
else {
    http_response_code(400);                   
}
}

else if($_SERVER['REQUEST_METHOD']=="POST"&& $_POST['action']=="create"){
    var_dump($_POST);
    if(isset($_POST['username']) && isset($_POST['userpassword'])&& isset($_POST['usermail'])){
        $user =new User();
        $data=$_POST; 
        $user->setAll($data['username'],$data['userpassword'],$data['usermail']);
        $code=$controller->addUser($user);
        http_response_code($code);
    }
    else{
        // bad request 
        http_response_code(400);
    }

}


else if($_SERVER['REQUEST_METHOD']=="POST" && $_POST['action']=="update"){
if(isset($_POST['userpassword']) && isset($POST['usermail'])&& isset($_POST["username"]) && isset($_POST['id'])){
    $user=new User();
    $user->setAll($_POST['username'],$_POST['userpassword'],$_POST['usermail']);
    $code=$controller->updateUser($user,["id = "=>$_POST['id']]);
    http_response_code($code);
}
else{
    http_response_code(400);
}
}

else if($_SERVER['REQUEST_METHOD']=="POST"&& $_POST["action"]=='delete'){
    if(isset($_POST['userpassword']) && isset($_POST["username"]) && isset($_POST['id'])){
        $user=new User();
        $user->setAll($_POST['username'],$_POST['userpassword'],$_POST['usermail']);
        $code=$controller->deleteUser($user,["username = "=>$_POST['username']," and userpassword ="=>$_POST['userpassword']]);
        http_response_code($code);
    }
    else{
        http_response_code(400);
    }
}
else {
    
}