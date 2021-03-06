<?php

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
        $query = $db->prepare("SELECT * FROM posts WHERE posts.id=?");
        $query->execute([$id]);
        $query->setFetchMode(PDO::FETCH_CLASS, "posts");
        $result = $query->fetch();
        return $result;
    }

    //method that add a post to DB
    

    //methode that delete a post from DB
    function deletePost($id)
    {
        $request = $this->getDb()("DELETE FROM posts WHERE id = ?");
        $result = $request->execute([$id]);
        $request->closeCursor();
        return $result;
      }

}
?>