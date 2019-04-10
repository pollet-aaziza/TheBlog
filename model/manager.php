<?php
include "dataBase.php";
abstract class manager{


    //-----------------attributs----------
    protected $db;

    //----------------constructor---------
    public function __construct(){
        $this->setDb(dataBase::DB());
    }

    //----------------setters------------
    public function setDb($connection){
        $this->db = $connection;
    }

    //-----------------getters----------
    public function getDb(){
        return $this->db;
    }

}
?>