<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Galaxy Swiss Bourdin | Saisir Visiteur</title>
    <link rel="icon" href="../Ressources/Logo.png"/>
    <!-- css -->
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initale-scale=1.0">

</head>

<body>

    <div class="container">

        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="accueil.php">Galaxy Swiss Bourdin</a>
            <!-- Afficher le nom et prenom de l'utilisateur -->
            
            <!-- Permet de change la navBar sur les smartphones -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item">
                        <a class="nav-link " href="accueil.php"><strong>Accueil</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="#"><strong>Saisir</strong></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-warning" href="consulterrapport.php"><strong>Consulter</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="Deconnexion.php"><strong>Déconnexion</strong></a>
                    </li>
                </ul>
            </div>
        </nav>

<?php

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
    echo "<tr> ";
    foreach ($all_property as $item) {
        echo '<td> ' . $row[$item] . '</td>'; //get items using property value

    }
    echo '</td>';
}

?>