<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Garage 21</title>
<?php include_once 'include/head.php' ?>
<?php include_once 'include/header.php' ?>

<body>
    <section class="test2">
        <?php
        require_once "include/connect.php";
        // Requête SQL pour récupérer toutes les voitures de la table stock
$requete = "SELECT s.IMMAT, m.nom AS marque, s.modele, s.chevauxF, s.dateCirculation, s.prixVente 
            FROM stock s 
            INNER JOIN marques m ON s.marque_id = m.id";
$resultat = mysqli_query($conn, $requete);

// Vérifier si des voitures ont été trouvées
if (mysqli_num_rows($resultat) > 0) {
    // Parcourir les résultats et afficher chaque voiture
    while ($row = mysqli_fetch_assoc($resultat)) {
        $immatriculation = $row['IMMAT'];
        $marque = $row['marque'];
        $modele = $row['modele'];
        $chevauxF = $row['chevauxF'];
        $dateC = $row['dateCirculation'];
        $prixVente = $row['prixVente'];

        // Afficher la voiture dans la structure HTML
        echo '<div class="test">';
        echo '<div class="test3">';
        echo '<img src="images/' . $immatriculation . '.jpg" alt="">';
        echo '</div>';
        echo '<p>';
        echo $marque . ' ' . $modele . '<br><br>chevaux: ' . $chevauxF . '<br><br>mise en circulation: ' .
            $dateC . '<br><br>' . $immatriculation . '<br><br>prix: ' . $prixVente . ' Fr';
        echo '</p>';
        echo '</div>';
    }
} else {
    echo 'Aucune voiture trouvée.';
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
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