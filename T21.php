<!DOCTYPE html>
<html>
<title>Garage</title>
<?php include_once 'include/head.php' ?>
<?php include_once 'include/header.php' ?>

<body id="haut_de_page">
    <h1 class="titre_page">Garage</h1>
    <section class="contenu">
        <div>
            <h2>Veuillez vous connecter</h2>
            <form method="post" action="include/login.php">
                <label for="login">Login</label>
                <input type="text" id="login" name="login" pattern="^[a-zA-Z0-9]{1,20}$" placeholder="Ex: Mabrick"
                    required><br>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" pattern="^[a-zA-Z0-9]{1,20}$"
                    placeholder="Ex: Mabrick06126984" required><br>

                <input type="submit" class="bouton" value="Se connecter">
            </form>
            <button class="bouton" type="button" onclick="admin()">Login Admin Démo</button>
            <script>
                function admin() {
                    document.getElementById("login").value = "Mabrick";
                    document.getElementById("password").value = "MabrickIsGay";
                }
            </script>
        </div>
    </section>
</body>
<?php include_once 'include/footer.php' ?>

</html>