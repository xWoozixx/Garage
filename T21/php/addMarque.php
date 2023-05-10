<?php
include "../../include/connect.php";
session_start();

$newMarque = mysqli_real_escape_string($conn, $_POST["newMarque"]);

$requete = "INSERT INTO marques (id, nom) VALUES (NULL, '$newMarque')";

if (mysqli_query($conn, $requete)) {
    $_SESSION['message'] = "Modification effectuée avec succès !";
    header('Location: ../ajouterMarque.php');//redirection si ajout réussi
    exit();
  } else {
    $_SESSION['message'] = "Erreur, voici la requete: ".$requete."Erreur: " . mysqli_error($conn);
    header('Location: ../ajouterMarque.php');
    exit();
  }  

mysqli_close($conn);
?>