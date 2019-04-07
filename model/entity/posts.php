<?php
class posts extends entity{

    //-------------attributs----------------------
    protected $title;
    protected $publication_date;
    protected $chapô;
    protected $contents;
    protected $author;

    //------------------Setters--------------------

    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setPublication_date(int $publication_date){
        $this->publication_date = $publication_date;
    }
    public function setChapô(string $chapô){
        $this->chapô = $chapô;
    }
    public function setContents(string $contents){
        $this->contents = $contents;
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

    public function getChapô(){
        return $this->chapô;
    }
    public function getContents(){
        return $this->contents;
    }
    public function getAuthor(){
        return $this->author;
    }

    //----------------constructor-------------------
    function __construct(aray $data = null){
        if($data){
            $this->hydrate($data);
        }
    }
}
?>