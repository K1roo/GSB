<?php
class rapport{
    private $id;
    private $date;
    private $motif;
    private $bilan;
    private $idVisiteur;
    private $idMedecin;
    private $lesrapports=array();
}
public function __construct($id,$date,$motif,$bilan,$idVisiteur,$idMedecin,$lesrapports){
    $this->id=$id;
    $this->date=$date;
    $this->motif=$motif;
    $this->bilan=$bilan;
    $this->idVisiteur=$idVisiteur;
    $this->idMedecin=$idMedecin;
    $this->lesrapports=$lesrapports;
}

public function getid(){
    return $this->id;
}
public function getdate(){
    return $this->date;
}
public function getmotif(){
    return $this->motif;
}
public function getbilan(){
    return $this->bilan;
}
public function getidVisiteur(){
    return $this->idVisiteur;
}
public function getidMedecin(){
    return $this->idMedecin;
}
public function getlesrapports(){
    return $this->lesrapports;
}
?>