<!--<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="formulairerapport.php" <?php $req ?> >;
</body>
</html>

<?php
include_once('GDVconnexionDAO.php');

class GererMedecinsDAO{
  
    public static function medecin(): array
    {
        $resultat= array();
        $maConnexion = ttpconDAO::createConnexion();
        $cnx = ttpconDAO::$connexion;
        $req = $cnx->prepare("select* from medecin");
        $req->execute();
        $ligne = $req->fetchAll();
        
    }
    
}

$Host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "gsbrapports";

//create connection
$connection = mysqli_connect($Host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM medecin");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_Push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?> -->


<?php

include_once('GDVconnexionDAO.php');

class MedecinDAO{
  
    public static function chargerLesMedecins()
    {
        $resultat = array();
        $maConnexion = GDVconnexionDAO::createConnexion();
        $cnx = GDVconnexionDAO::$connexion;
        $req = $cnx->prepare("select* from medecin");
        $req->execute();
        $ligne = $req->fetchAll();
        foreach ($ligne as $key => $val) {
            $resultat = new medecin($val['id'], $val['nom'], $val['prenom'], $val['adresse'], $val['tel'], $val['specialitecomplementaire'], $val['departement']);
            $collectionMedecins[]=$resultat;
        }
     
        return $resultat;
    }
    
   
    
    
  
    }
