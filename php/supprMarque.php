<?php
include "connect.php";

$supprMarque = mysqli_real_escape_string($conn, $_POST["supprMarque"]);

$supprMarqueId = "SELECT id FROM `marques` WHERE nom='$supprMarque'";
$MarqueId = mysqli_query($conn, $supprMarqueId);//récupère l'id de la marque
$MarqueId = mysqli_fetch_assoc($MarqueId)['id'];


$requete = "DELETE FROM marques WHERE `marques`.`id` = $MarqueId";

if (mysqli_query($conn, $requete)) {
    header('Location: ../annexes/ajouterRéussi.html');//redirection si ajout réussi
  } else {
    echo ($requete);
    echo "Erreur: " . mysqli_error($conn);
  }  

mysqli_close($conn);
?>