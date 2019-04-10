<?php
require "controller/postsController.php";

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