<?php
class dataBase {

    //----------attributs--------
    const host = "localhost";
    const dbName ="axecible";
    const login ="phpmyadmin";
    const pw ="Manzakin2603";
    

    //-----------methods---------
    static public function DB(){
        $db = new PDO("mysql:host=" . self::host .";dbname=" .self::dbName , self::login, self::pw);
        return $db;
    }
}
?>