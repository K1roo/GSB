<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Galaxy Swiss Bourdin | Accueil Visiteur</title>
  <link rel="icon" href="../Ressources/Logo.png"/>
  <!-- css -->
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initale-scale=1.0">

</head>

<body>

  <div class="container">

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Galaxy Swiss Bourdin</a>

      <!-- Afficher le nom et prenom de l'utilisateur -->
      

      
      <!-- Permet de change la navBar sur les smartphones -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item">
            <a class="nav-link " href="#"><strong>Accueil</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="SaisirVisiteur.php"><strong>Gerer Mes Medecins</strong></a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-warning" href="creationrapport.php"><strong>Gerer Mes Rapports de Visite</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="Deconnexion.php"><strong>Déconnexion</strong></a>
          </li>
        </ul>
      </div>
    </nav>


    <!-- Hero Section -->
    <?php 
include 'verification.php';
    ?>
    <div class="jumbotron">
      <h1 class="display-3 text-center"> Bienvenue <?php   echo $donnees['login']; ?> 
    </h1>

    </div>
  </div>



    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>


</html>