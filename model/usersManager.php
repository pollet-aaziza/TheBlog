<?php
class usersManager extends manager{

    //methode that retrieves all users from db

    public function getAllUsers(){
        $db = $this->getDb();
        $query = $db->query("SELECT * FROM users");
        $result = $query->fetchall(PDO::FETCH_CLASS, "users");
        $query->closeCursor();
        return $result;
    }


    //methode that retrieves one user from db
    public function getUserByName($userName){
        $db = $this->getDb();
        $query = $db->prepare("SELECT * FROM users WHERE users.name=?");
        $query->execute([$userName]);
        $query->setFetchMode(PDO::FETCH_CLASS, "users");
        $result = $query->fetch();
        return $result;
    }


    //method that add a user to DB
    public function addUser(usr $user){
        $db = $this->getDb();
    $request = $db->prepare("INSERT INTO users (name, mail, password) VALUES(:name, :mail, :password)");
    $result = $request->execute([
        "name" => $user->getName(),
        "mail" => $user->getMail(),
        "password" =>  password_hash($user->getPassword(), PASSWORD_BCRYPT, ['cost' => 13]),
    ]);

    }


    //methode that delete a user from DB
    function deleteUser($id)
    {
        $request = $this->getDb()("DELETE FROM users WHERE id = ?");
        $result = $request->execute([$id]);
        $request->closeCursor();
        return $result;
      }

}
?>