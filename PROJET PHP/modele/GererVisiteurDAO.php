<?php

include_once('GDVconnexionDAO.php');

class GererVisiteurDAO{
  
    public static function chargerVisiteur(): array
    {
        $resultat= array();
        $maConnexion = GDVconnextionDAO::createConnexion();
        $cnx = GDVconnextionDAO::$connexion;
        $req = $cnx->prepare("select* from visiteur");
        $req->execute();
        $ligne = $req->fetchAll();
        foreach ($ligne as $key => $val) {
            $resultat = new visiteur ($val['id'], $val['nom'], $val['prenom'], $val['adresse'], $val['cp'], $val['ville'], $val['dateEmbauche'], $val['ticket']);
            $collectionvisiteur[]=$resultat;
        }
        return $resultat;
    }
    
}
