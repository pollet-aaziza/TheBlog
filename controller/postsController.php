<?php
include "model/postsManager.php";
class postController
{
    //get posts
    function showListPosts()
    {
        $postsManager = new postsManager();
        $posts =$postsManager->getAllPosts();
        require "views/posts.php";
    }

    //get one post
    function ShowPost()
{
    $postsManager = new postsManager();
    $post = $postsManager->getPostById($_GET['id']);
    require('views/post.php');
}
    
  //delete gategory
  public function showDeletePost()
  {
    if(isset($_GET["id"])) 
    {
      $id = htmlspecialchars($_GET("id"));
      $postsManager = new postsManager();
      if($postsManager->deletePost($id))
      redirectTo("views/posts.php");
    }
  }
}
?>