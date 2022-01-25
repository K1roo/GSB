<?php

include_once('GDVconnexionDAO.php');

class MedicamentDAO{
 
    public static function chargerLesMedicaments()
    {
        $resultat = array();
        $maConnexion = GDVconnexionDAO::createConnexion();
        $cnx = GDVconnexionDAO::$connexion;
        $req = $cnx->prepare("select* from medicament");
        $req->execute();
        $ligne = $req->fetchAll();
        foreach ($ligne as $key => $val) {
            $resultat = new medicament($val['id'], $val['nomCommercial'], $val['idFamille'], $val['composition'], $val['effets'], $val['contreIndications']);
            $collectionMedicament[]=$resultat;
        }
     
        return $resultat;
    }
   
   
   
   
 
    }