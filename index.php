<?php
include "model/entity/entity.php";
include "model/manager.php";
include "model/entity/posts.php";
include "model/entity/comments.php";
include "model/postsManager.php";
include "model/commentsManager.php";
require "controller/postsController.php";
require "controller/adminController.php";
require "controller/usersController.php";

// $usercontroller = new userController();
// if()
$postsController = new postController();

if(!empty($_GET["target"])) {
    if($_GET["target"]==="post"){
        $postsController->showPost();
    }
}
else{
    $postsController->showListPosts();
}




?>