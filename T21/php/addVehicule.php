<?php
include "../../include/connect.php";

// Récupérer les valeurs du formulaire ET Échapper les caractères spéciaux pour éviter les injections SQL
if (isset($_FILES['image'])) {
  $file = $_FILES['image'];
  $originalName = $file['name'];
  $tmpFilePath = $file['tmp_name'];

  // Obtenir les informations du véhicule pour générer le nom de fichier
  $immatriculation = $_POST['immatriculation'];

  // Générer un nom de fichier basé sur les informations du véhicule
  $extension = pathinfo($originalName, PATHINFO_EXTENSION);
  $newFileName = $immatriculation . '.' . $extension;

  // Déplacer l'image vers le répertoire de destination avec le nouveau nom
  $destinationPath = 'C:\wamp64\www\GithubWamp\Garage\images\\' . $newFileName;
  move_uploaded_file($tmpFilePath, $destinationPath);

  // Enregistrer le chemin de l'image renommée dans votre base de données
}

$immatriculation = mysqli_real_escape_string($conn, $_POST["immatriculation"]);
$marque = mysqli_real_escape_string($conn, $_POST["marque"]);
$modele = mysqli_real_escape_string($conn, $_POST["modele"]);
$dateC = mysqli_real_escape_string($conn, $_POST["dateC"]);
$prixVente = mysqli_real_escape_string($conn, $_POST["prixVente"]);
$dateEntreeGarage = mysqli_real_escape_string($conn, $_POST["dateEntreeGarage"]);
$chevauxF = mysqli_real_escape_string($conn, $_POST["chevauxF"]);
$description = mysqli_real_escape_string($conn, $_POST["description"]);

$requeteMarqueId = "SELECT id FROM `marques` WHERE nom='$marque'";
$resultatMarqueId = mysqli_query($conn, $requeteMarqueId);
$marqueId = mysqli_fetch_assoc($resultatMarqueId)['id'];

$values = "('$immatriculation', $marqueId, '$modele', '$dateC',  $prixVente, '$dateEntreeGarage', $chevauxF, '$description')";

// Créer la requête SQL pour insérer les données dans la table des véhicules
// table de test $requete = "INSERT INTO test (IMMAT, DESCRIPTION, DateEntréeGarage) VALUES ('$immatriculation', '$description', '$date')";
$requete = "INSERT INTO stock (IMMAT, marque_id, modele, dateCirculation, prixVente, DateEntreeGarage, chevauxF, DESCRIPTION) VALUES $values";
// Exécuter la requête SQL
if (mysqli_query($conn, $requete)) {
  //echo "Véhicule enregistré avec succès.";
  header('Location: ../ajouter.php');//redirection si ajout réussi
} else {
  echo ($marque);
  echo "Erreur: " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>