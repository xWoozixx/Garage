<?php
require_once "../../include/connect.php";
session_start();

$immatriculation = mysqli_real_escape_string($conn, $_POST["immatriculation"]);


$requete = "DELETE FROM stock WHERE`stock`.`IMMAT` = '$immatriculation'";

if (mysqli_query($conn, $requete)) {
    $_SESSION['message'] = "Véhicule supprimé avec succès !";
    header('Location: ../ajouter.php');//redirection si ajout réussi
  } else {
    $_SESSION['message'] = "Erreur, voici la requete: ".$requete."Erreur: " . mysqli_error($conn);
    header('Location: ../ajouter.php');
    exit();
  }
mysqli_close($conn);
?>