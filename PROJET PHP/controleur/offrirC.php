<?php
class offrir{
    private $idRapport;
    private $idMedicament;
    private $quantite;
}
public function __construct($idRapport, $idMedicament, $quantite){
    $this->idRapport=$idRapport;
    $this->idMedicament=$idMedicament;
    $this->quantite=$quantite;
}
public function getidRapport(){
    return $this->idRapport;
}
public function getidMedicament(){
    return $this->idMedicament;
}
public function getquantite(){
    return $this->quantite;
}
?>