<?php
class commentsController
{
    //get comments
    function showListComments()
    {
        $commentsManager = new commentManager();
        $comments =$commentsManager->getAllComments();
        require "../views/comments.php";
    }

    //get one comment
    function showOnecomment(){
      $commentManager = new commentManager();
      $comment = $commentManager->getCommentById($_GET["id"]);
    }

    //delete comment
    function ShowDeleteComment(){
    if(isset($_GET["id"])) {
      $id = htmlspecialchars($_GET("id"));
      $commentsManager = new commentManager();
      if($commentsManager->deletePost($id))
      redirectTo("../template/post.php");
    }
  }
}
?>