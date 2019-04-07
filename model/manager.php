<?php
abstract class  manager{


    //-----------------attributs----------
    protected $_db;

    //----------------constructor---------
    public function __construct(){
        $this->setDb(dataBase::DB());
    }

    //----------------setters------------
    public function setDb($connection){
        $this->_db = $connection;
    }

    //-----------------getters----------
    public function getDb(){
        return $this>_db;
    }

}
?>