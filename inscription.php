<!DOCTYPE html>
<html lang="en">

<?php include("../Chat/include/header.php"); ?>   

<body>
        <div class="containerInscri"> 
            <br><h1> Inscription </h1>
            <form method="post" action="../Chat/insert/insertinscription.php">
                <label>Pseudo</label> <br><br>
                <input type="text" name="pseudo" required Placeholder="Pseudo"> <br><br>

                <label>Mot de passe</label> <br><br>
                <input type="password" name="password" id="password" required Placeholder="Mot de passe"> <br><br>
                <label>Confirmation mot de passe</label> <br><br>
                <input type="password" name="password2" id="password2" required Placeholder="Confirmation mot de passe"> <br><br>
                
                <label for="checkbox">
                    <input type="checkbox" id="checkbox">
                        Afficher le mot de passe
                </label><br><br>

                <button class="bouton btn btn-danger"> S'insrire </button><br><br>
            </form>
        </div>
        <br><br>
    </body>
    <?php include("../Chat/include/footer.php"); ?>
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="viewPassword.js"></script>
</html>