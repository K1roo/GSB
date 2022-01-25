<?php

include_once('GDVconnexionDAO.php');

class offrirDAO{
 
    public static function offrir()
    {
        $resultat ;
        $maConnexion = GDVconnexionDAO::createConnexion();
        $cnx = GDVconnexionDAO::$connexion;
        $req = $cnx->prepare("select* from offrir");
        $req->execute();
        $ligne = $req->fetchAll();
        foreach ($ligne as $key => $val) {
            $offremedoc = new offrir($val['idRapport'], $val['idMedicament'], $val['quantite']);
            $resultat[]=$offremedoc;
        }
     
        return $resultat;
    }
   
   
   
   
 
    }