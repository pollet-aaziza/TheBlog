<?php
abstract class postsManager extends manager{

    //methode that retrieves all posts from db

    public function getAllPosts(){
        $db = $this->getDb();
        $query = $db->query("SELECT * FROM posts");
        $result = $query->fetchall(PDO::FETCH_CLASS, "post");
        $query->closeCursor();
        return $result;
    }

    //method that retrieves one post from DB
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