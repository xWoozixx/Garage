<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <title>Garage</title>
    <?php include_once 'include/head.php'?>
    <?php include_once 'include/header.php'?>

    <body>
        <section class="test2">

            <div class="test">
            <?php
require_once "include/connect.php";
// Récupère l'immatriculation saisie dans le formulaire
$immatriculation = "212121NC";

$requete = "SELECT * FROM stock WHERE IMMAT = '$immatriculation'";
$resultat = mysqli_query($conn, $requete);
    
$row = mysqli_fetch_assoc($resultat);

$marque_id = $row['marque_id'];
//$marque
$modele = $row['modele'];
$dateC = $row['dateCirculation'];
$prixVente = $row['prixVente'];
$dateEntreeGarage = $row['dateEntreeGarage'];
$chevauxF = $row['chevauxF'];
$description = $row['description'];


$requeteMarques = "SELECT nom FROM `marques` WHERE id = $marque_id";
$resultrequete = mysqli_query($conn, $requeteMarques);
$listereponses = mysqli_fetch_assoc($resultrequete);
$marque = $listereponses['nom'];
echo $marque;



mysqli_close($conn);
?>
                <img src="images/raox.jpg" alt="">
                
                <p>
                    <h1><?php echo $chevauxF." test".$immatriculation;?></h1>
                <?php echo "<br><h1>Véhicule immatriculé <strong>". $immatriculation."</strong></h1><br><br>";?>
                </p>
                
                <p>imatriculation</p>

            </div>

            <div class="test">
                <img src="images/jimmy.jpg" alt="">
                <p>marque</p>
                <p>imatriculation</p>

            </div>

            <div class="test">
                <img src="images/multiplat.jpg" alt="">
                <p>marque</p>
                <p>imatriculation</p>
                <p>jong</p>
            </div>

        </section>
    </body>
    <?php include_once 'include/footer.php'?>
</html>