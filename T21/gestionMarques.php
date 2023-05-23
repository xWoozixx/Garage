<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["login"])) {
    // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
    header("Location: ../T21.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Garage 21 - Gestion des marques de voitures</title>
        <?php include_once 'include/T_head.php' ?>
        <?php include_once 'include/T_header.php' ?>
    </head>
    <body id="haut_de_page">
        <section class="contenu">
            <br>
            <div>
                <h1>Ajouter une nouvelle marque de voiture</h1><br>
                <form method="post" action="php/addMarque.php">
                    <label for="newMarque">Entrez le nom de la nouvelle marque :</label>
                    <input type="text" id="newMarque" name="newMarque" pattern="^[a-zA-Z]{1,20}$" placeholder="Ex: Toyota" required><br>
                    <small>Seules les lettres sont autorisées (20 caractères maximum)</small><br>
                    <input type="submit" value="Ajouter cette marque">
                </form>
                <h1 id="message">
                    <?php
                    // Afficher un message de succès ou d'erreur après l'ajout de la marque
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']); // Supprimer le message de la session pour éviter les répétitions
                    }
                    ?>
                </h1>
            </div>
            <br><br><br><br>
            <h1>Supprimer une marque de voiture</h1><br>
            <div>
                <form method="post" action="php/supprMarque.php">
                    <label for="supprMarque">Sélectionnez une marque à supprimer :</label>
                    <select name="supprMarque" required>
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
                    <input type="submit" value="SUPPRIMER cette marque">
                </form>
            </div>
        </section>
        <?php include_once '../include/footer.php' ?>
    </body>
</html>
