<?php
class user extends entity{
    protected $name;
    protected $mail;
    protected $password;
    protected $status;
    //------------------Setters--------------------
    public function setName(string $name){
        $this->name = $name;
    }
    public function setMail(int $mail){
        $this->mail = $mail;
    }
    public function setPassword(string $password){
        $this->password = $password;
    }
    public function setStatus(int $status){
        $this->status = $status;
    }
    //------------------Getters--------------------
    public function getName(){
        return $this->name;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getStatus(){
        return $this->status;
    }
    //----------------constructer-------------------
    function __construct(array $data = null){
        if($data){
            $this->hydrate($data);
        }
    }
}
?> 