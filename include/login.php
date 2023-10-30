<?php
include "connect.php";
session_start();

// Vérification des informations de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];

 // Préparez la requête pour récupérer les informations d'utilisateur à partir de la table appropriée dans la base de données
 $requete = "SELECT * FROM admin WHERE login = '$login'";

 // Exécutez la requête
 $resultat = mysqli_query($conn, $requete);

 // Vérifiez si la requête a renvoyé un résultat
 if (mysqli_num_rows($resultat) == 1) {
     // Récupérez la ligne de résultat
     $row = mysqli_fetch_assoc($resultat);
     // echo($row["password"]." mypassword ".$password);
     // Vérifiez le mot de passe
     if (password_verify($password,$row["password"])) {
         // Les informations de connexion sont correctes, démarrez la session et redirigez l'utilisateur vers la page protégée
         $_SESSION["login"] = $login;
         header("Location: ../T21/index.php");
         exit();
     } else {
         // Les informations de connexion sont incorrectes, affichez un message d'erreur
         $messageErreur = "Identifiant ou mot de passe incorrect.";
     }
 } else {
     // Les informations de connexion sont incorrectes, affichez un message d'erreur
     $messageErreur = "Identifiant ou mot de passe incorrect.";
 }

 // Fermez la connexion à la base de données
 mysqli_close($conn);
}
?>