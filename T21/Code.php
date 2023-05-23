<?php
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
?>

<form method="post" action="php/addVehicule.php">
                <label for="immatriculation">Immatriculation :</label>
                <input type="text" id="immatriculation" name="immatriculation" pattern="[0-9]{6}NC" placeholder="Ex: 123456NC" required> Pour 1 000 NC renseigner 001000NC<br>
                
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

                
Vérifiez l'état de connexion sur les pages protégées : Sur les pages que vous souhaitez protéger, vous devez vérifier si l'utilisateur est connecté en vérifiant si la variable de session appropriée est définie.

php
Copy code
<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION["identifiant"])) {
    // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
    header("Location: login.php");
    exit();
}
?>
Déconnexion de l'utilisateur : Pour permettre à l'utilisateur de se déconnecter, vous pouvez fournir un lien ou un bouton de déconnexion qui supprimera la session en cours.

php
Copy code
<?php
session_start();

// Déconnexion de l'utilisateur
session_destroy();
?>
Utilisez les informations de session : Sur les pages protégées, vous pouvez utiliser les informations de session pour personnaliser le contenu ou effectuer des opérations spécifiques à l'utilisateur connecté.

php
Copy code
<?php
session_start();

// Utilisation des informations de session
$identifiant = $_SESSION["identifiant"];

// Afficher le contenu personnalisé pour l'utilisateur connecté
echo "Bienvenue, $identifiant !";
?>

// Récupère l'immatriculation saisie dans le formulaire
    $immatriculation = $_POST["rechercheImmatriculation"];

    $requete = "SELECT * FROM stock WHERE IMMAT = '$immatriculation'";
    $resultat = mysqli_query($conn, $requete);
    if ($resultat) {

    if(mysqli_num_rows($resultat) == 1) {
        
    $row = mysqli_fetch_assoc($resultat);
    $marque = $row['marque_id'];
    $modele = $row['modele'];
    $dateC = $row['dateCirculation'];
    $prixVente = $row['prixVente'];
    $dateEntreeGarage = $row['dateEntreeGarage'];
    $chevauxF = $row['chevauxF'];
    $description = $row['description'];




    index

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
                <img src="images/<?php echo $immatriculation?>.jpg" alt="">
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