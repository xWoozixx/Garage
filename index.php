<!DOCTYPE html>
<html>
<title>Garage</title>
<?php include_once 'include/head.php' ?>
<?php include_once 'include/header.php' ?>

<body>
    <section class="test2">
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



        mysqli_close($conn);
        ?>
        <div class="test">
            <div class="test3">
                <img src="images/raox.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/jimmy.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>

        </div>

        <div class="test">
            <div class="test3">
                <img src="images/multiplat.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/jsp.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/raox.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/jimmy.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>

        </div>

        <div class="test">
            <div class="test3">
                <img src="images/multiplat.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/jsp.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/raox.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/jimmy.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>

        </div>

        <div class="test">
            <div class="test3">
                <img src="images/multiplat.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/jsp.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/raox.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/jimmy.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>

        </div>

        <div class="test">
            <div class="test3">
                <img src="images/multiplat.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/jsp.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/raox.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/jimmy.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>

        </div>

        <div class="test">
            <div class="test3">
                <img src="images/multiplat.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

        <div class="test">
            <div class="test3">
                <img src="images/jsp.jpg" alt="">
            </div>
            <p>
                <?php echo $marque . " " . $modele . "<br><br>chevaux: " . $chevauxF .
                    "<br><br>mise en circulation: " . $dateC . "<br><br>" . $immatriculation . "<br><br>prix: " .
                    $prixVente . " Fr"; ?>
            </p>
        </div>

    </section>

    <script>
        // Sélectionnez toutes les divs .test3
        const test3Divs = document.querySelectorAll('.test3');

        // Compteur pour suivre le nombre d'images chargées
        let loadedImages = 0;

        // Fonction pour exécuter le code lorsque toutes les images sont chargées
        const checkAllImagesLoaded = () => {
            loadedImages++;

            // Vérifie si toutes les images sont chargées
            if (loadedImages === test3Divs.length) {
                // Initialisez la taille maximale
                let maxWidth = 0;
                let maxHeight = 0;

                // Parcourez toutes les divs .test3 pour trouver la plus grande taille affichée
                test3Divs.forEach(div => {
                    const image = div.querySelector('img');
                    const width = image.offsetWidth; // largeur affichée de l'image
                    const height = image.offsetHeight; // hauteur affichée de l'image

                    // Mettez à jour la taille maximale si nécessaire
                    if (width > maxWidth) {
                        maxWidth = width;
                    }

                    if (height > maxHeight) {
                        maxHeight = height;
                    }
                });

                // Appliquez la taille maximale aux dimensions CSS de toutes les divs .test3
                test3Divs.forEach(div => {
                    div.style.width = maxWidth + 'px';
                    div.style.height = maxHeight + 'px';
                });
            }
        };

        // Écoutez l'événement de chargement pour chaque image dans les divs .test3
        test3Divs.forEach(div => {
            const image = div.querySelector('img');
            image.addEventListener('load', checkAllImagesLoaded);
        });

    </script>
</body>
<?php include_once 'include/footer.php' ?>

</html>