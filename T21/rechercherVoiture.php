<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION["login"])) {
    // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
    header("Location: ../T21.php");
    exit();
}
?>
<!DOCTYPE html> 
<html>
    <title>Garage 21</title>
    <?php include_once 'include/T_head.php'?>
    <?php include_once 'include/T_header.php'?>

    <body id="haut_de_page">
        <h1 class="titre_page"><div class="titre_important">Garage</div></h1>
        <section class="contenu">
            <div>
<?php
include "../include/connect.php";
// Récupère l'immatriculation saisie dans le formulaire
$immatriculation = $_SESSION['message'];

$requete = "SELECT * FROM stock WHERE IMMAT = '$immatriculation'";
$resultat = mysqli_query($conn, $requete);
    
$row = mysqli_fetch_assoc($resultat);
$marque = $row['marque_id'];
$modele = $row['modele'];
$dateC = $row['dateCirculation'];
$prixVente = $row['prixVente'];
$dateEntreeGarage = $row['dateEntreeGarage'];
$chevauxF = $row['chevauxF'];
$description = $row['description'];

echo "<br><h1>Véhicule immatriculé <strong>". $immatriculation."</strong></h1><br><br>";
mysqli_close($conn);
?>
<h1>Modifier </h1><br><br>

            <form method="post" action="php/updateVehicule.php">
                <input type='hidden' id="immatriculation" name="immatriculation" pattern="[0-9]{6}NC" value="<?php echo $immatriculation; ?>" required>
                
                <label for="marque">Marque :</label>
                <select name="marque" required>
                <?php
                include "../include/connect.php";
                $requeteMarques = "SELECT * FROM `marques`";
                $resultatMarques = mysqli_query($conn, $requeteMarques);
                while ($rowMarques = mysqli_fetch_assoc($resultatMarques)) {
                $idMarque = $rowMarques['id'];
                $nomMarque = $rowMarques['nom'];
                $selected = ($idMarque == $marque) ? "selected" : ""; // Vérifie si l'ID correspond à celui à sélectionner par défaut
                echo "<option value=\"$idMarque\" $selected>$nomMarque</option>";
                }
                ?>
                </select><br>
                
                <label for="modele">Modèle :</label>
                <input type="text" id="modele" name="modele" value="<?php echo $modele; ?>" pattern="^[a-zA-Z][0-9]{1,20}$" placeholder="Ex: Clio" required> Uniquement des lettres et 20 max<br>
              
                <label for="dateC">Date de première mise en circulation du véhicule :</label>
                <input type="date" id="dateC" name="dateC" value="<?php echo $dateC; ?>" required><br>

                <label for="prixVente">Prix de vente :</label>
                <input type="number" id="prixVente" name="prixVente" value="<?php echo $prixVente; ?>" min="0" max="9999999999" step="1" placeholder="Ex: 1000000" required>Uniquement un entier max: 9999999999<br>

                <label for="dateEntreeGarage">Date d'entrée au garage :</label>
                <input type="date" id="dateEntreeGarage" name="dateEntreeGarage" value="<?php echo $dateEntreeGarage; ?>" required><br>

                <label for="chevauxF">Chevaux fiscaux :</label>
                <input type="number" id="chevauxF" name="chevauxF" value="<?php echo $chevauxF; ?>" min="0" max="999" placeholder="Ex: 5" required><br>

                <label for="description">Description :</label>
                <textarea id="description" name="description" placeholder="Rapide description du véhicule"><?php echo $description; ?></textarea> Optionnel<br>

                <br>
                <input type="submit" value="Appliquer les modifications">
              </form>
              <form method="post" action="php/delete.php">
                <input type='hidden' id="immatriculation" name="immatriculation" pattern="[0-9]{6}NC" value="<?php echo $immatriculation; ?>" required>
                <br>
                <input type="submit" value="Supprimer le véhicule">
              </form>
            </div>
        </section>
    </body>
    <?php include_once '../include/footer.php'?>
</html>