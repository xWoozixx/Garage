<?php
include "connect.php";

$newMarque = mysqli_real_escape_string($conn, $_POST["newMarque"]);

$requete = "INSERT INTO marques (id, nom) VALUES (NULL, '$newMarque')";

if (mysqli_query($conn, $requete)) {
    header('Location: ../annexes/ajouterRéussi.html');//redirection si ajout réussi
  } else {
    echo ($requete);
    echo "Erreur: " . mysqli_error($conn);
  }  

mysqli_close($conn);
?>