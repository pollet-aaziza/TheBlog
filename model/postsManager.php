<?php
include "manager.php";
include "entity/posts.php";
class postsManager extends manager{

    //methode that retrieves all posts from db

    public function getAllPosts(){
        $db = $this->getDb();
        $query = $db->query("SELECT * FROM posts");
        $result = $query->fetchall(PDO::FETCH_CLASS, "posts");
        $query->closeCursor();
        return $result;
    }

    //methode that retrieves one post from db
    public function getPostById($id){
        $db = $this->getDb();
        $query = $db->prepare("SELECT * FROM posts WHERE id = ?");
        $query->execute([$id]);
        $result = $query->fetch(PDO::FETCH_CLASS, "posts");
    }

    //method that add a post to DB
    //methode that delete a post from DB
    // function deletePost($id)
    // {
    //     $request = $this->getDb()("DELETE FROM posts WHERE id = ?");
    //     $result = $request->execute([$id]);
    //     $request->closeCursor();
    //     return $result;
    //   }

}
?>