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
<?php include_once 'include/T_head.php' ?>
<?php include_once 'include/T_header.php' ?>

<body id="haut_de_page">
    <section class="contenu">
        <br>
        <h1>Attention à ne pas ajouter d'espaces inutiles</h1>
        <br><br>
        <script>
            // Fonction pour initialiser les tooltips
            function initTooltips() {
                const tooltips = document.querySelectorAll('.tooltip');
                tooltips.forEach((tooltip) => {
                    const input = tooltip.querySelector('input');
                    const tooltipText = tooltip.querySelector('.tooltiptext');
                    input.addEventListener('mouseover', () => {
                        tooltipText.style.visibility = 'visible';
                        tooltipText.style.opacity = '1';
                    });
                    input.addEventListener('mouseout', () => {
                        tooltipText.style.visibility = 'hidden';
                        tooltipText.style.opacity = '0';
                    });
                });
            }
            // Appel de la fonction d'initialisation des tooltips
            initTooltips();
        </script>
        <form method="post" action="php/rechercherVehicule">
            <label for="rechercheImmatriculation">Rechercher par immatriculation :</label>
            <input type="text" id="rechercheImmatriculation" name="rechercheImmatriculation" pattern="[0-9]{6}NC"
                placeholder="Ex: 123456NC">
            <button type="submit">Rechercher</button>

            <h1 id="message">
                <?php // message si ajout réussi ou message d'erreur 
                if (isset($_SESSION['message'])) {
                    echo "<p>" . $_SESSION['message'] . "</p>";
                    unset($_SESSION['message']); // pour ne pas afficher le message plusieurs fois
                }
                ?>
            </h1>

        </form>

        <br><br><br>
        <form method="post" action="php/addVehicule.php" enctype="multipart/form-data">

            <h1>Ajouter un Véhicule</h1><br>

            <div class="tooltip">
                <label for="immatriculation">Immatriculation :</label>
                <input type="text" id="immatriculation" name="immatriculation" pattern="[0-9]{6}NC"
                    placeholder="Ex: 123456NC" required>
                <span class="tooltiptext"><br>Pour 1 000 NC renseigner 001000NC<br></span>
            </div>
            <br>

            <label for="marque">Marque :</label>
            <select name="marque" required>
                <?php
                include "../include/connect.php";
                $requete = "SELECT * FROM `marques`";
                $marques = mysqli_query($conn, $requete);
                while ($row = mysqli_fetch_assoc($marques)) {
                    echo "<option value=\"" . $row['nom'] . "\">" . $row['nom'] . "</option>";
                }
                ?>
            </select>
            <br><br><br>

            <div class="tooltip">
                <label for="modele">Modèle :</label>
                <input type="text" id="modele" name="modele" pattern="^[a-zA-Z0-9]{1,20}$" placeholder="Ex: Clio"
                    required>
                <span class="tooltiptext"><br>Uniquement des lettres et 20 max<br></span>
            </div>
            <br>

            <label for="dateC">Date de première mise en circulation du véhicule :</label>
            <input type="date" id="dateC" name="dateC" required><br>
            <br><br>

            <div class="tooltip">
                <label for="prixVente">Prix de vente :</label>
                <input type="number" id="prixVente" name="prixVente" min="0" max="9999999999" step="1"
                    placeholder="Ex: 1000000" required>
                <span class="tooltiptext"><br>Uniquement un entier max: 9999999999<br></span>
            </div>
            <br>

            <label for="dateEntreeGarage">Date d'entrée au garage :</label>
            <input type="date" id="dateEntreeGarage" name="dateEntreeGarage" required><br>
            <br><br>

            <label for="chevauxF">Chevaux fiscaux :</label>
            <input type="number" id="chevauxF" name="chevauxF" min="0" max="999" placeholder="Ex: 5" required><br>
            <br><br>

            <div class="tooltip">
                <label for="description">Description :</label>
                <textarea id="description" name="description" placeholder="Rapide description du véhicule"></textarea>
                <span class="tooltiptext"><br>Optionnel<br></span>
            </div>
            <br>

            <label for="image">Image du véhicule :</label>
            <input type="file" id="image" name="image" accept="image/*">
            <br>
            <br><br>

            <input type="submit" value="Ajouter le véhicule">
        </form>
        <br>
        <button type="button" onclick="remplirChamps()">Remplir avec des valeurs d'exemple</button>
        <br><br>.
    </section>



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
<?php include_once 'include/T_footer.php' ?>

</html>