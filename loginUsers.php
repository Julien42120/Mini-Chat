<!DOCTYPE html>
<html lang="en">

<?php include("../Chat/include/header.php"); ?>

<body>
    <div class="containerlogin">

        <div id="form">
            <form action="../Chat/requetes/login.php" method="POST" class="login">
                <br><h1>Connexion</h1>
                <div class="labelLogin">
                    <label><b> Pseudo </b></label><br><br>
                    <input type="text" class="input-field" placeholder="Entrer votre Pseudo" name="pseudo" required>
                </div><br>
                                   
                <div class="labelLogin">
                    <label><b> Mot de Passe </b></label><br><br>
                    
                    <input type="password" class="input-field" placeholder="Votre mot de passe" name="password" id="password" required>
                </div><br>
                <label for="checkbox">
                    <input type="checkbox" id="checkbox">
                        Afficher le mot de passe
                </label><br><br>
        

                <button class="bouton btn btn-danger"> Se connecter </button><br><br>

                <?php
                if (isset($_GET['erreur'])) {
                    $err = $_GET['erreur'];
                    if ($err == 1 || $err == 2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>

            </form>
        </div>
    </div><br><br>
</body>
<?php include("../Chat/include/footer.php"); ?>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="viewPassword.js"></script>
</html>