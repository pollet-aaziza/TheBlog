<?php
class users extends entity{

    //----------------attributs------------------
    protected $name;
    protected $mail;
    protected $pasword;
   
   

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
    
    
    //----------------constructer-------------------
    function __construct(array $data = null){
        if($data){
            $this->hydrate($data);
        }
    }
}
?>