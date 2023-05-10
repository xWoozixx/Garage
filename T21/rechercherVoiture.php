<!DOCTYPE html>
<!---
    <label for='marque'>Marque :</label>
    <input type='text' id='marque' name='marque' value='$marque'><br>
    -->
<html>
    <title>Garage 21</title>
    <?php include_once '../include/T_head.php'?>
    <?php include_once '../include/T_header.php'?>

    <body id="haut_de_page">
        <h1 class="titre_page"><div class="titre_important">Garage</div></h1>
        <section class="contenu">
            <div>
            <?php
include "../include/connect.php";
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère l'immatriculation saisie dans le formulaire
    $immatriculation = $_POST["rechercheImmatriculation"];

    $requete = "SELECT * FROM stock WHERE IMMAT = '$immatriculation'";
    $resultat = mysqli_query($conn, $requete);
    if ($resultat) {

    if(mysqli_num_rows($resultat) == 1) {
        
    $row = mysqli_fetch_assoc($resultat);
    //$marque = $row['marque_id '];
    $modele = $row['modele'];
    $dateC = $row['dateCirculation'];
    $prixVente = $row['prixVente'];
    $dateEntreeGarage = $row['dateEntreeGarage'];
    $chevauxF = $row['chevauxF'];
    $description = $row['description'];
    
    echo "<br><h1>Véhicule immatriculé <strong>". $immatriculation."</strong></h1><br><br>";
    
    // Affiche les résultats dans un formulaire
    echo "<form method='post' action='modifierVoiture.php'>
    <input type='hidden' name='immatriculation' value='$immatriculation'>
    <label for='modele'>Modèle :</label>
    <input type='text' id='modele' name='modele' value='$modele'><br>
    <label for='dateCirculation'>Date de circulation :</label>
    <input type='date' id='dateCirculation' name='dateCirculation' value='$dateC'><br>
    <label for='prixVente'>Prix de vente :</label>
    <input type='number' id='prixVente' name='prixVente' value='$prixVente'><br>
    <label for='dateEntreeGarage'>Date d'entrée au garage :</label>
    <input type='date' id='dateEntreeGarage' name='dateEntreeGarage' value='$dateEntreeGarage'><br>
    <label for='chevauxFiscaux'>Chevaux fiscaux :</label>
    <input type='number' id='chevauxFiscaux' name='chevauxFiscaux' value='$chevauxF'><br>
    <label for='description'>Description :</label>
    <textarea id='description' name='description'>$description</textarea><br>
    <button type='submit'>Modifier</button>
    </form>";
  } else {
    echo "Aucun véhicule trouvé avec cette immatriculation.";
  }
}
else{
    echo "Erreur lors de la requête : " . mysqli_error($conn);
}
}

mysqli_close($conn);
?><br>
            <form method="post" action="php/addVehicule.php">
                <input type='hidden' id="immatriculation" name="immatriculation" pattern="[0-9]{6}NC" value="<?php echo $immatriculation; ?>" required>
                
                <label for="marque">Marque :</label>
                <select name="marque" required>
                <?php
                include "../include/connect.php";
                $requete = "SELECT * FROM `marques`";
                $marques=mysqli_query($conn, $requete);
                while ($row = mysqli_fetch_assoc($marques)) {
                    echo "<option value=\"" . $row['nom'] . "\">" . $row['nom'] . "</option>";
                }
                ?>
                </select>
                <br>
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

                <input type="submit" value="Ajouter le véhicule">
              </form>    
            
            </div>
        </section>
    </body>
    <?php include_once '../include/footer.php'?>
</html>