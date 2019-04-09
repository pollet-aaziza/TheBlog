<?php
class commentsController
{
    //get comments
    function listComments()
    {
        $commentsManager = new commentsManager();
        $comments =$commentsManager->getAllComments();
        require "views/comments.php";
    }
    //delete comment
  public function deleteComment(){
    if(isset($_GET["id"])) {
      $id = htmlspecialchars($_GET("id"));
      $commentsManager = new commentsManager();
      if($commentsManager->deletePost($id))
      redirectTo("");
    }
  }
}
?>