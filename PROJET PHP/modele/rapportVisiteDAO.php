<?php

include_once('GDVconnexionDAO.php');

class rapportVisiteDAO{
  
    public static function chargerRapport(): array
    {
        $resultat= array();
        $maConnexion = GDVconnextionDAO::createConnexion();
        $cnx = GDVconnextionDAO::$connexion;
        $req = $cnx->prepare("select* from rapport");
        $req->execute();
        $ligne = $req->fetchAll();
        foreach ($ligne as $key => $val) {
            $Rapport = new rapport ($val['id'], $val['date'], $val['motif'], $val['bilan'], $val['idVisiteur'], $val['idMedecin']);
            $collectionRapport[]=$Rapport;
        }
        return $collectionRapport;
    }
    
}
