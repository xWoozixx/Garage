<?php
include "../../include/connect.php";

if(isset($_POST['search'])) {
  $immatriculation = $_POST['immatriculation'];
  
  $requete = "SELECT * FROM vehicules WHERE immatriculation = '$immatriculation'";
  $resultat = mysqli_query($conn, $requete);
  
  if(mysqli_num_rows($resultat) == 1) {
    $row = mysqli_fetch_assoc($resultat);
    $marque = $row['marque'];
    $modele = $row['modele'];
    $dateC = $row['date_circulation'];
    $prixVente = $row['prix_vente'];
    $dateEntreeGarage = $row['date_entree_garage'];
    $chevauxF = $row['chevaux_fiscaux'];
    $description = $row['description'];
  } else {
    echo "Aucun véhicule trouvé avec cette immatriculation.";
  }
}

mysqli_close($conn);
?>