<?php 
include_once('modele/GererVisites.php');
include_once('modele/GererVisitesDAO.php');

$ListeVisites = visitesDAO::chargervisites();

include('vue/entete.html.php');
include('vue/vueGererVisites.php');


class visiteur{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $cp;
    private $ville;
    private $dateEmbauche;
    private $ticket;
    public function __construct($id, $nom,$prenom,$adresse,$cp,$ville,$dateEmbauche,$ticket){
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->cp=$cp;
        $this->ville=$ville;
        $this->dateEmbauche=$dateEmbauche;
        $this->ticket=$ticket;
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
    public function getcp(){
        return $this->cp;
    }
    public function getville(){
        return $this->ville;
    }
    public function getdateembauche(){
        return $this->dateembauche;
    }
    public function getticket(){
        return $this->ticket;
    }
}


?>