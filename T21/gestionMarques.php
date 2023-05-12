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
        <section class="contenu">
            <br>
            <h1>Temporaire ! Design à changer<br><br> Attentien à ne pas ajouter d'espaces inutiles</h1>
            <br><br>
            <div>
            <h1>Ajouter</h1><br>
                <form method="post" action="php/addMarque.php">

                <label for="newMarque">Pour ajouter une nouvelle marque entrez la dans le champ disponible<br></label>
                <input type="text" id="newMarque" name="newMarque" pattern="^[a-zA-Z]{1,20}$" placeholder="Ex: Toyota" required> Uniquement des lettres et 20 max<br>
                Appuyez sur le bouton pour valider l'ajout <br>
                <input type="submit" value="Ajouter cette marque">
                </form>
                <h1>
                <?php // message si ajout réussi ou message d'erreur 
                if (isset($_SESSION['message'])) {
                echo "<p>" . $_SESSION['message'] . "</p>";
                unset($_SESSION['message']); // pour ne pas afficher le message plusieurs fois
                }
                ?>
                </h1>
            </div>
            <br><br><br><br>
            <h1>Supprimer <br><br> Avant de supprimer assurez vous de ne plus avoir de voitures de cette marque</h1><br><br>
            <div>
                <form method="post" action="php/supprMarque.php">
                <label for="supprMarque">Pour SUPPRIMER une marque selectionnez-la<br></label>
                <select name="supprMarque" required>
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
                Appuyez sur le bouton pour valider la suppression <br>
                <input type="submit" value="SUPPRIMER cette marque">
            </div>
        </section>

    </body>
    <?php include_once '../include/footer.php'?>
</html>