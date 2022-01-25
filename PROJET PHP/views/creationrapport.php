<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Galaxy Swiss Bourdin | gerer mes rapports de Visite</title>
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
						<a class="nav-link " href="creationrapport.php"><strong>Creer un rapport</strong></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-warning" href="consulterrapport.php"><strong>Consulter mes Rapports</strong></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-warning" href="afficherrapport.php"><strong>Afficher un Rapport</strong></a>
		</li>
			<a class="nav-link text-warning" href="SaisirVisiteur.php"><strong>Modifier un Rapport</strong></a>
		</li>
					<li class="nav-item">
						<a class="nav-link text-danger" href="Deconnexion.php"><strong>Déconnexion</strong></a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Hero Section -->
		<div class="jumbotron">
			<h1 class="display-4 text-center"> Consulter Mes rapports de visite </h1>

		</div>

		<!-- Formulaire -->
		<div class="row">
	
			<div class="col-sm-12 col-md-4">
				<div class="card mb-4">
					<div class="card-body text-center">
						<h3 class="card-title">Période à selectionner</h3>
						<form name="validerPeriodeForm" id="validerPeriodeForm" method="post" action="">
							
						    <div class="input-group mb-3">

						      <div class="input-group-prepend">
						        <span  class="input-group-text">Période</span>
						      </div>

						      	<!-- Choix de la période de la fiche frais a afficher. -->
								<select class="custom-select" name="periode" >

									<?php
										$yearArray = range(date('Y'), 2010);
										$monthArray = array(
											'01' => 'Janvier', '02' => 'Février', '03' => 'Mars',
											'04' => 'Avril', '05' => 'Mai', '06' => 'Juin',
											'07' => 'Juillet', '08' => 'Août', '09' => 'Septembre',
											'10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre', 
											);


										foreach ($yearArray as $year) {
											foreach ($monthArray as $month) {

												echo '<option>'.$month.' '.$year.'</option>';
											}
										}
									?>
								</select>

						    </div>

							<button type="reset" class="btn btn-warning mb-3 mt-3"><i class=" fas fa-times"></i> Annuler</button>
							<button type="submit" form="validerPeriodeForm" class="btn btn-success mb-3 mt-3"  name="okPeriode" value="Valider"><i class=" fas fa-check"></i> Valider</button>
						</form>
					</div>
				</div>

			</div>




    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>


</html>

<a href="formulairerapport.php" <?php $req ?> >;

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