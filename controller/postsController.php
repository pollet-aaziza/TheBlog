<?php
class postController
{
    //get posts
    function showListPosts()
    {
        $postsManager = new postsManager();
        $posts =$postsManager->getAllPosts();
        require "views/postsView.php";
    }

    //get one post
    function ShowPost()
{
    $postsManager = new postsManager();
    $post = $postsManager->getPostById($_GET['id']);
    $commentsManager = new commentsManager();
    $comments = $commentsManager->getCommentById($_GET['id']);
    require "views/postView.php";
}
   
  //delete post
  public function showDeletePost()
  {
    if(isset($_GET["id"])) 
    {
      $id = htmlspecialchars($_GET("id"));
      $postsManager = new postsManager();
      if($postsManager->deletePost($id))
      redirectTo("views/postsView.php");
    }
  }
}
?>