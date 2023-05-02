<?php
include "connect.php";

// Récupérer les valeurs du formulaire
$immatriculation = $_POST["immatriculation"];
$description = $_POST["description"];
$date = $_POST["date"];

// Échapper les caractères spéciaux pour éviter les injections SQL
$immatriculation = mysqli_real_escape_string($conn, $immatriculation);
$description = mysqli_real_escape_string($conn, $description);
$date = mysqli_real_escape_string($conn, $date);

// Créer la requête SQL pour insérer les données dans la table des véhicules
$requete = "INSERT INTO test (IMMAT, DESCRIPTION, DateEntréeGarage) VALUES ('$immatriculation', '$description', '$date')";

// Exécuter la requête SQL
if (mysqli_query($conn, $requete)) {
  //echo "Véhicule enregistré avec succès.";
  header('Location: ../annexes/ajouterRéussi.html');
} else {
  echo "Erreur: " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>