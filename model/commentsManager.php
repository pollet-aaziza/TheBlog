<?php
class commentsManager extends manager{

    //method that retrieves all comments from db

    public function getAllComments(){
        $query = $this->_db->query("SELECT * FROM comments");
        $result = $query->fetchall(PDO::FETCH_ASSOC, "comments");
        $query->closeCursor();
        return $result;
    }
    
     //method that retrieves one comment from db

     public function getCommentById($id){
        $db = $this->getDb();
        $query = $db->prepare("SELECT * FROM comments WHERE comments.post_id=?");
        $query->execute([$id]);
        $query->setFetchMode(PDO::FETCH_CLASS, "comments");
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;

     }


    //methode that delete a comments from DB
    // function deleteComment($id) {
    //     $request = $this->getDb()("DELETE FROM comments WHERE id = ?");
    //     $result = $request->execute([$id]);
    //     $request->closeCursor();
    //     return $result;
    //   }

}
?>