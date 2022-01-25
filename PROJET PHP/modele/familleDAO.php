<?php

include_once('GDVconnexionDAO.php');

class FamilleDAO{
 
    public static function chargerLesFamilles()
    {
        $resultat = array();
        $maConnexion = GDVconnexionDAO::createConnexion();
        $cnx = GDVconnexionDAO::$connexion;
        $req = $cnx->prepare("select* from famille");
        $req->execute();
        $ligne = $req->fetchAll();
        foreach ($ligne as $key => $val) {
            $resultat= new famille($val['id'], $val['libelle']);
            $collectionFamille[]=$resultat;
        }
     
        return $resultat;
    }
   
   
   
   
 
    }