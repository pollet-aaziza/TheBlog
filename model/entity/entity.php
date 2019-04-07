<?php
abstract class entity{

    //------------attributs-----------
    protected $id;


    //-----------setters------------
    public function setId($id){
        $this->id = $id;
    }


    //------------getters----------
    public function getId(){
        return $this->id;
    }

    //-----------hydrate-----------
    public function hydrate(array $data){
        if(!empty($data)){
            foreach($data as $key => $value){
                $method = "set" . ucfirst($key);
                if(method_exists($this, $method)){
                    $this->$method($value);
                }
            }
        }
    }
}
?>