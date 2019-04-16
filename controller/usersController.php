<?php
class usersController{
    

    function logintUsers(){
        if(!empty($_POST)
        {
            foreach($_POST as $key=>$value){
                $_POST[$key] = htmlspecialchars($value);
            }
        $usersManager = new usersManager();
        $users =$usersManager->getAllUsers();
        if($usersManager->getUserByName($_POST["name"])){
            $user = $usersManager->getUserByName($_POST["name"]);
            if(password_verify($_POST["password"], $user["password"])){
                initializeUserSession($user);
                if($_SESSION["user"]["status"]===["admin"]){
                   require "admin/posts.php";
                }
                if($_SESSION["user"]["status"]===["user"]){
                    require "index.php";

                }
            }
        }
       
    }

    function showOneUser(){
        $usersManager = new userManager();
        $user =$usersManager->getUserByName();
        require "views/user.php";
   }
    function showAddUser(){
        $usersManager = new userManager();
        $user = $usersManager->addUser();
        require "views/form/subscribe.php";
    }

}
?>