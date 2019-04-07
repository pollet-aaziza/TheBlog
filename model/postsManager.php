<?php
abstract class postsManager extends manager{

    //function that retrieves all posts from db

    public function getAllPosts(){
        $query = $this->_db->query("SELECT * FROM posts");
        $result = $query->fetchall(PDO::FETCH_CLASS, "post");
        $query->closeCursor();
        return $result;
    }

}
?>