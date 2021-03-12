<?php require_once(__DIR__ . "/requetes/pdo.php");
if (isset($_GET['id'])) {
    $selectUsers = $pdo->prepare("SELECT pseudo FROM Users WHERE id=? ");
    $selectUsers->execute([$_GET["id"]]);
    $connectedUsers = $selectUsers->fetch(PDO::FETCH_ASSOC);
}
$AllUsers = $pdo->prepare("SELECT pseudo , id FROM Users");
$AllUsers->execute();
$selectMessage = $pdo->prepare('SELECT * FROM Users JOIN MSG ON Users.id = MSG.idUser ORDER BY MSG.DateTime ASC');
$selectMessage->execute();
?>

<!DOCTYPE html>
<html lang="en">

<?php include("../Chat/include/header.php"); ?>

<body>
    <br>

    <div class="containerMSG">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="message col-sm-8"><br>
                <h2>Discussion</h2><br>
                <div class="containerMessage" id="scroll">
                    <?php
                        include('./requetes/chargeMSG.php');
                    ?>
                </div>
            </div>
            <div class="Users-connected col-sm-2"><br>
                <h3> Utilisateurs </h3><br>
                <div class="containerUsers">
                    <?php foreach ($AllUsers->fetchAll() as $Users) {
                    ?> <p>
                            <?= $Users['pseudo'] ?>
                            <a href="deleteUsers.php?id=<?= $Users['id']?>"> ❌ </a>
                        </p>
                    <?php    }
                    ?>
                </div>
            </div>
                    
            <br><br>
            </div>
            <div class="row_Mess">
                <?php if(isset($_GET['id'])){ ?>
                    <div class="pseudoCo col-sm-2">
                        <input type="hidden" name="pseudo" id="pseudo" value="<?= empty($connectedUsers['pseudo']) ? "" : $connectedUsers['pseudo']; ?>">
                        <p> <?= empty($connectedUsers['pseudo']) ? "" : $connectedUsers['pseudo']; ?> </p>
                    </div>
                    
                        <textarea name="content" id="content" placeholder="Message a Envoyer" required></textarea>
                       
                    <div class="boutonEnvoi col-sm-2">
                        <button id="envoi" class="bouton btn-lg btn-danger" onclick="sendMessage()"> Envoi </button>
                    </div> 
                <?php }else{ ?>
                    <h3>Connectez vous pour utiliser le chat</h3>
                <?php } ?>
            </div>
        </div>
    </div>
</body>


<?php include("../Chat/include/footer.php"); ?>

</html>