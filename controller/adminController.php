<?php
class adminController
{
    //get posts
    function showListPosts()
    {
        $postsManager = new postsManager();
        $posts =$postsManager->getAllPosts();
        require "admin/posts.php";
    }

    //get one post
    function ShowPost()
{
    $postsManager = new postsManager();
    $post = $postsManager->getPostById($_GET['id']);
    $commentsManager = new commentsManager();
    $comments = $commentsManager->getCommentById($_GET['id']);
    require "admin/post.php";
}
   
  //delete post
  public function showDeletePost()
  {
    if(isset($_GET["id"])) 
    {
      $id = htmlspecialchars($_GET("id"));
      $postsManager = new postsManager();
      if($postsManager->deletePost($id))
      redirectTo("admin/post.php");
    }
  }
}
?>