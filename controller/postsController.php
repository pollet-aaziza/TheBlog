<?php
class postController
{
    function listPosts()
    {
        $postsManager = new postsManager();
        $posts =$postsManager->getAllPosts();
        require "views/posts.php";
    }
}
?>