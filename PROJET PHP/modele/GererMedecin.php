<?php 


class medecin{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $tel;
    private $specialitecomplementaire;
    private $departement;
    private $lesmedecins=array();

    public function __construct($id, $nom,$prenom,$adresse, $tel, $specialitecomplementaire, $departement, $lesmedecins){
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->tel=$tel;
        $this->specialitecomplementaire=$specialitecomplementaire;
        $this->departement=$departement;
        $this->lesmedecins=$lesmedecins;
    }
    public function getid(){
        return $this->id;
    }
    public function getnom(){
        return $this->nom;
    }
    public function getprenom(){
        return $this->prenom;
    }
    public function getadresse(){
        return $this->adresse;

    }
    public function gettel(){
        return $this->tel;
    }
    public function getspecialitecomplementaire(){
        return $this->specialitecomplementaire;
    }
    public function getdepartement(){
        return $this->getdepartement;
    }
    public function getmedecin(){
        return $this->lesmedecins;

    }
}



?>