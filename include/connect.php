<?php
// Récupération des variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Garage";

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

