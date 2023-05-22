<?php
require_once "../../include/connect.php";
session_start();

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Récupère l'immatriculation saisie dans le formulaire
  $immatriculation = $_POST["rechercheImmatriculation"];

  $requete = "SELECT * FROM stock WHERE IMMAT = '$immatriculation'";
  $resultat = mysqli_query($conn, $requete);
if ($resultat) { 
  if(mysqli_num_rows($resultat) == 1) {
    $row = mysqli_fetch_assoc($resultat);
    $marque = $row['marque_id'];
    $modele = $row['modele'];
    $dateC = $row['dateCirculation'];
    $prixVente = $row['prixVente'];
    $dateEntreeGarage = $row['dateEntreeGarage'];
    $chevauxF = $row['chevauxF'];
    $description = $row['description'];
    $url = "../rechercherVoiture.php ?immatriculation=" . urlencode($immatriculation);
    $_SESSION['message'] = $immatriculation;
    echo "URL: " . $url; // Affiche l'URL pour vérification
    header('Location: ../rechercherVoiture.php');//redirection si Véhicule
  } else {
    $_SESSION['message'] = "Aucun véhicule trouvé avec cette immatriculation.";
    header('Location: ../ajouter.php');//redirection
  }
}
  else{
    echo "Erreur lors de la requête : " . mysqli_error($conn);
  }

}

mysqli_close($conn);
?>