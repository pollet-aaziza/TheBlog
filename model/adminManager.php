<?php
class admiManager extends manager{

    //methode that retrieves all admins from db

    public function getAlladmins(){
        $db = $this->getDb();
        $query = $db->query("SELECT * FROM admin");
        $result = $query->fetchall(PDO::FETCH_CLASS, "admins");
        $query->closeCursor();
        return $result;
    }


    //methode that retrieves one admin from db
    public function getAdminrById($id){
        $db = $this->getDb();
        $query = $db->prepare("SELECT * FROM admin WHERE admin.id=?");
        $query->execute([$id]);
        $query->setFetchMode(PDO::FETCH_CLASS, "admins");
        $result = $query->fetch();
        return $result;
    }


    //method that add an admin to DB
    public function addAdmin(usr $user){
        $db = $this->getDb();
    $request = $db->prepare("INSERT INTO admin (name, mail, password) VALUES(:name, :mail, :password)");
    $result = $request->execute([
        "name" => $user->getName(),
        "mail" => $user->getMail(),
        "password" =>  password_hash($user->getPassword(), PASSWORD_BCRYPT, ['cost' => 13]),
    ]);

    }


    //methode that delete an admin from DB
    function deleteAdmin($id)
    {
        $request = $this->getDb()("DELETE FROM admin WHERE id = ?");
        $result = $request->execute([$id]);
        $request->closeCursor();
        return $result;
      }

}
?>