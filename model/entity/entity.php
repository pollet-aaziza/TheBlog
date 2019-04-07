<?php
abstract class entity{
    protected $id;
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
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