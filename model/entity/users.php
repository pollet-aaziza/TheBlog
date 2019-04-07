<?php
class users extends entity{
    protected $name;
    protected $mail;
    protected $pasword;
    protected $status;

    //------------------Setters--------------------

    public function setName(string $name){
        $this->name = $name;
    }
    public function setMail(int $mail){
        $this->mail = $mail;
    }
    public function setPasword(string $pasword){
        $this->pasword = $pasword;
    }
    public function setStatus(string $status){
        $this->statuss = $status;
    }


    //------------------Getters--------------------
    public function getName(){
        return $this->name;
    }
    public function getMail(){
        return $this->mail;
    }

    public function getPasword(){
        return $this->password;
    }
    public function getStatus(){
        return $this->status;
    }
    //----------------constructer-------------------
    function __construct(aray $data = null){
        if($data){
            $this->hydrate($data);
        }
    }
}
?>