<?php
class posts extends entity{

    //-------------attributs----------------------
    protected $title;
    protected $publication_date;
    protected $chapo;
    protected $content;
    protected $author;

    //------------------Setters--------------------

    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setPublication_date(int $publication_date){
        $this->publication_date = $publication_date;
    }
    public function setChapo(string $chapo){
        $this->chapô = $chapo;
    }
    public function setContent(string $content){
        $this->contents = $content;
    }
    public function setAuthor(string $author){
        $this->author = $author;
    }


    //------------------Getters--------------------
    public function getTitle(){
        return $this->title;
    }
    public function getPublication_date(){
        return $this->publication_date;
    }

    public function getChapo(){
        return $this->chapo;
    }
    public function getContent(){
        return $this->content;
    }
    public function getAuthor(){
        return $this->author;
    }

    //----------------constructor-------------------
    function __construct(array $data = null){
        if($data){
            $this->hydrate($data);
        }
    }
}
?>