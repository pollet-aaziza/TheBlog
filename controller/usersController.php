<?php
class usersController{
    function showListUsers(){
        $usersManager = new usersManager();
        $posts =$usersManager->getAllUsers();
        require "views/users.php";
    }

    function showOneUser(){
        $usersManager = new userManager();
        $user =$usersManager->getUserById();
        require "views/user.php";
   }
    function showAddUser(){
        $usersManager = new userManager();
        $user = $usersManager->addUser();
        require "views/form/subscribe.php";
    }

}
?>