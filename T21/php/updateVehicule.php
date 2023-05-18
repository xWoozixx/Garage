<?php
// Inclure le fichier de connexion à la base de données
require_once "../../include/connect.php";

// Récupérer les valeurs du formulaire ET Échapper les caractères spéciaux pour éviter les injections SQL
$immatriculation = mysqli_real_escape_string($conn, $_POST["immatriculation"]);
//$marque = mysqli_real_escape_string($conn, $_POST["marque"]);
$modele = mysqli_real_escape_string($conn, $_POST["modele"]);
$dateC = mysqli_real_escape_string($conn, $_POST["dateC"]);
$prixVente = mysqli_real_escape_string($conn, $_POST["prixVente"]);
$dateEntreeGarage = mysqli_real_escape_string($conn, $_POST["dateEntreeGarage"]);
$chevauxF = mysqli_real_escape_string($conn, $_POST["chevauxF"]);
$description = mysqli_real_escape_string($conn, $_POST["description"]);

// Mise à jour du véhicule dans la base de données !!!!marque = '$marque',
$requete = "UPDATE stock SET  modele = '$modele', dateCirculation = '$dateC' , prixVente = '$prixVente' , dateEntreeGarage = '$dateEntreeGarage' , chevauxF = '$chevauxF' , description = '$description' WHERE IMMAT  = '$immatriculation' ";

if (mysqli_query($conn, $requete)) {
  
    header('Location: ../ajouter.php');//redirection si ajout réussi
    exit();
  } else {
    $_SESSION['message'] = "Erreur lors de la modification du véhicule, voici la requete: ".$requete."Erreur: " . mysqli_error($conn);
    header('Location: ../rechercherVoiture.php');
    exit();
  }
// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>