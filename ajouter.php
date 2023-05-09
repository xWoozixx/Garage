<!DOCTYPE html>
<html>
    <title>Garage</title>
    <?php include_once 'include/head.php'?>
    <?php include_once 'include/header.php'?>

    <body id="haut_de_page">
        <section class="contenu">
            <br>
            <h1>Attentien à ne pas ajouter d'espaces inutiles</h1>
            <br><br>
            <a class="bouton" href="ajouterMarque.php">Temporaire Gestion des marques</a>
            <br><br><br>
            <form method="post" action="php/addVehicule.php">
                <label for="immatriculation">Immatriculation :</label>
                <input type="text" id="immatriculation" name="immatriculation" pattern="[0-9]{6}NC" placeholder="Ex: 123456NC" required> Pour 1 000 NC renseigner 001000NC<br>
                
                <label for="marque">Marque :</label>
                <select name="marque" required>
                <?php
                include "include/connect.php";
                $requete = "SELECT * FROM `marques`";
                $marques=mysqli_query($conn, $requete);
                while ($row = mysqli_fetch_assoc($marques)) {
                    echo "<option value=\"" . $row['nom'] . "\">" . $row['nom'] . "</option>";
                }
                ?>
                </select>
                <br>
                <label for="modele">Modèle :</label>
                <input type="text" id="modele" name="modele" pattern="^[a-zA-Z][0-9]{1,20}$" placeholder="Ex: Clio" required> Uniquement des lettres et 20 max<br>
              
                <label for="dateC">Date de première mise en circulation du véhicule :</label>
                <input type="date" id="dateC" name="dateC" required><br>

                <label for="prixVente">Prix de vente :</label>
                <input type="number" id="prixVente" name="prixVente" min="0" max="9999999999" step="1" placeholder="Ex: 1000000" required>Uniquement un entier max: 9999999999<br>

                <label for="dateEntreeGarage">Date d'entrée au garage :</label>
                <input type="date" id="dateEntreeGarage" name="dateEntreeGarage" required><br>

                <label for="chevauxF">Chevaux fiscaux :</label>
                <input type="number" id="chevauxF" name="chevauxF" min="0" max="999" placeholder="Ex: 5" required><br>

                <label for="description">Description :</label>
                <textarea id="description" name="description" placeholder="Rapide description du véhicule"></textarea> Optionnel<br>
              
                <input type="submit" value="Ajouter le véhicule">
              </form>
        </section>
        <br>
        <button type="button" onclick="remplirChamps()">Remplir avec des valeurs d'exemple</button>
        <script>
            function remplirChamps() {
              document.getElementById("immatriculation").value = "123456NC";
              document.getElementById("modele").value = "C4";
              document.getElementById("dateC").value = "2020-01-01";
              document.getElementById("prixVente").value = "1000000";
              document.getElementById("dateEntreeGarage").value = "2023-05-04";
              document.getElementById("chevauxF").value = "5";
              document.getElementById("description").value = "Véhicule en excellent état";

              document.querySelector('select[name="marque"] option:nth-child(3)').selected = true;
            }
            </script>
    </body>
    <?php include_once 'include/footer.php'?>
</html>