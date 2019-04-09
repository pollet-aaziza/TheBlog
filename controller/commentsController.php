<?php
class commentsController
{
    function listComments()
    {
        $commentsManager = new commentsManager();
        $comments =$commentsManager->getAllComments();
        require "views/comments.php";
    }
}
?>