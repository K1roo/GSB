<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["controleurRapport"] = "rapportC.php";
    $lesActions["controleurMedecin"] = "GererMedecinC.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["formulaireAjout"] = "formulaireAjout.php";
    $lesActions["formulaireModif"] = "formulaireModif.php";
    $lesActions["formulaireMedecin"] = "formulaireMedecin.php";
    $lesActions["miseAjour"] = "miseAjour.php";
 

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
    
}