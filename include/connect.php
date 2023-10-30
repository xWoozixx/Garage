<?php
// Récupération des variables
$servername = "localhost";
$username = "garage";
$password = "130103";
$dbname = "garage";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
// (' . mysqli_connect_errno() . ') 
// Passage de la connexion en utf8
//mysqli_set_charset($cnx, 'utf8');
?>

