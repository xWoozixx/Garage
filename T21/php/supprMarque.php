<?php
require_once "../../include/connect.php";
session_start();

$supprMarque = mysqli_real_escape_string($conn, $_POST["supprMarque"]);

$supprMarqueId = "SELECT id FROM `marques` WHERE nom='$supprMarque'";
$MarqueId = mysqli_query($conn, $supprMarqueId);//récupère l'id de la marque
$MarqueId = mysqli_fetch_assoc($MarqueId)['id'];


$requete = "DELETE FROM marques WHERE `marques`.`id` = $MarqueId";

if (mysqli_query($conn, $requete)) {
    $_SESSION['message'] = "Modification effectuée avec succès !";
    header('Location: ../gestionMarques.php');//redirection si ajout réussi
  } else {
    $_SESSION['message'] = "Erreur, voici la requete: ".$requete."Erreur: " . mysqli_error($conn);
    header('Location: ../gestionMarques.php');
    exit();
  }
mysqli_close($conn);
?>