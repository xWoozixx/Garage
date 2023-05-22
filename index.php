<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Garage</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php include_once 'include/head.php'; ?>
    <?php include_once 'include/header.php'; ?>

    <section class="test2">
        <?php
        require_once "include/connect.php";
        $immatriculation = "212121NC";

        $requete = "SELECT * FROM stock WHERE IMMAT = '$immatriculation'";
        $resultat = mysqli_query($conn, $requete);

        while ($row = mysqli_fetch_assoc($resultat)) {
            $marque_id = $row['marque_id'];
            $modele = $row['modele'];
            $dateC = $row['dateCirculation'];
            $prixVente = $row['prixVente'];
            $chevauxF = $row['chevauxF'];
            $description = $row['description'];

            $requeteMarques = "SELECT nom FROM `marques` WHERE id = $marque_id";
            $resultrequete = mysqli_query($conn, $requeteMarques);
            $listereponses = mysqli_fetch_assoc($resultrequete);
            $marque = $listereponses['nom'];
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
                <img src="images/raox.jpg" alt="">
                <p>marque</p>
                <p>imatriculation</p>

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

            <?php
        }

        mysqli_close($conn);
        ?>
    </section>

    <script>
        const test3Divs = document.querySelectorAll('.test3');

        let loadedImages = 0;

        const checkAllImagesLoaded = () => {
            loadedImages++;

            if (loadedImages === test3Divs.length) {
                let maxWidth = 0;
                let maxHeight = 0;

                test3Divs.forEach(div => {
                    const image = div.querySelector('img');
                    const width = image.offsetWidth;
                    const height = image.offsetHeight;

                    if (width > maxWidth) {
                        maxWidth = width;
                    }

                    if (height > maxHeight) {
                        maxHeight = height;
                    }
                });

                test3Divs.forEach(div => {
                    div.style.width = maxWidth + 'px';
                    div.style.height = maxHeight + 'px';
                });
            }
        };

        test3Divs.forEach(div => {
            const image = div.querySelector('img');
            image.addEventListener('load', checkAllImagesLoaded);
        });
    </script>

    <?php include_once 'include/footer.php'; ?>
</body>

</html>