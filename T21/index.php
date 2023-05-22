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
                <h2>Voici la section administration du Garage 21</h2>
                <div>
                    Ici vous pourrez effectuer les modifications nécéssaires au fonctionnement de votre garage
                </div>
                <br>

                <a class=bouton href="logout.php">Se déconnecter</a>
            </div>
        </section>
    </body>
    <?php include_once '../include/footer.php'?>
</html>