<?php
class postController
{
    //get posts
    function listPosts()
    {
        $postsManager = new postsManager();
        $posts =$postsManager->getAllPosts();
        require "views/posts.php";
    }

    
  //delete gategory
  public function deletePost(){
    if(isset($_GET["id"])) {
      $id = htmlspecialchars($_GET("id"));
      $postsManager = new postsManager();
      if($postsManager->deletePost($id))
      redirectTo("");
    }
  }
}
?>