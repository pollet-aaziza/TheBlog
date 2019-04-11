<?php
include "manager.php";
include "entity/comments.php";
abstract class commentsManager extends manager{

    //method that retrieves all comments from db

    public function getAllComments(){
        $query = $this->_db->query("SELECT * FROM comments");
        $result = $query->fetchall(PDO::FETCH_ASSOC, "coment");
        $query->closeCursor();
        return $result;
    }

    //methode that delete a comments from DB
    function deleteComment($id) {
        $request = $this->getDb()("DELETE FROM comments WHERE id = ?");
        $result = $request->execute([$id]);
        $request->closeCursor();
        return $result;
      }

}
?>