<?php
class famille{
    private $id;
    private $libelle;
    public function __construct($id,$libelle){
        $this->id=$id;
        $this->libelle=$libelle;
    }
    public function getid(){
        return $this->id;
    }
    public function getlibelle(){
        return $this->libelle;
    }


?>