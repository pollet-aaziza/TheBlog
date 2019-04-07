<?php
class comments extends entity{
    protected $contents;
    protected $post_id;

    //------------------Setters--------------------

    public function setContents(string $contents){
        $this->contents = $contents;
    }
    public function setPost_id(int $post_id){
        $this->post_id = $post_id;
    }


    //------------------Getters--------------------

    public function getContents(){
        return $this->contents;
    }
    public function getPost_id(){
        return $this->post_id;
    }

    //----------------constructor-------------------
    function __construct(aray $data = null){
        if($data){
            $this->hydrate($data);
        }
    }
}
?>