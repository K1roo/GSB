<?php
 $servername = 'localhost';
 $username = 'root';
$password = '';
//On essaie de se connecter
try{
  $conn = new PDO("mysql:host=$servername;dbname=gsbrapports", $username, $password);
//On définit le mode d'erreur de PDO sur Exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }

$reponse = $conn->query('SELECT * FROM visiteur');
$donnees = $reponse->fetch();


if ($_POST['login'] ==$donnees['login'] && $_POST['password']==$donnees['mdp']){
        include_once('accueil.php');
        }
else{ include_once('pageerr.php');
          }
