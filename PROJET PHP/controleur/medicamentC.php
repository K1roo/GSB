<?php

class medicament{
    private $id;
    private $nomCommercial;
    private $idFamille;
    private $composition;
    private $effets;
    private $contreIndications;
    private $lesMedicaments=array();
    public function __construct($id,$idFamille,$composition,$effets,$contreIndications,$lesMedicaments){
        $this->id=$id;
        $this->nomCommercial=$nomCommercial;
        $this->idFamille=$idFamille;
        $this->composition=$composition;
        $this->effets=$effets;
        $this->contreIndications=$contreIndications;
        $this->lesMedicaments=$lesMedicaments
    }
    public function getid(){
        return $this->id;
    }
    public function getnomCommercial(){
        return $this->nomCommercial;
    }
    public function getidFamille(){
        return $this->idFamille;
    }
    public function getcomposition(){
        return $this->composition;
    }
    public function geteffets(){
        return $this->effets;
    }
    public function contreIndications(){
        return $this->contreIndications;
    }
    public function lesMedicaments(){
        return $this->lesMedicaments;
    }

?>