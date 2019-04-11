<?php
include "model/commentManager.php";
class commentsController
{
    //get comments
    function listComments()
    {
        $commentsManager = new commentManager();
        $comments =$commentsManager->getAllComments();
        require "../views/comments.php";
    }

    //delete comment
    function deleteComment(){
    if(isset($_GET["id"])) {
      $id = htmlspecialchars($_GET("id"));
      $commentsManager = new commentManager();
      if($commentsManager->deletePost($id))
      redirectTo("../template/post.php");
    }
  }
}
?>