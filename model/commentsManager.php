<?php
abstract class commentsManager extends manager{

    //function that retrieves all comments from db

    public function getAllComments(){
        $query = $this->_db->query("SELECT * FROM comments");
        $result = $query->fetchall(PDO::FETCH_CLASS, "coment");
        $query->closeCursor();
        return $result;
    }

}
?>