<?php

require_once(__DIR__ . "/pdo.php");

if (empty($_POST["pseudo"])) {
    die("Paramètres manquants");
}

if (isset($_POST['pseudo'])) {

    $nickname = $_POST['pseudo'];
    
    $req = $pdo->prepare('SELECT * FROM Users WHERE pseudo = ?');
    
    $req->execute(array(
        $nickname));
        $resultat = $req->fetch();
        
        $id = $resultat['id'];
        
        if ($resultat['pseudo'] === $nickname && $resultat['password'] === $_POST['password']) {
            setcookie('cookiePseudo', $resultat['pseudo'],  time()+3600);
            header('Location:../index.php?message=Salut '.$nickname.' tu es connecté a ton compte !&id='.$id.'');
            
        }
        
        else {
            header('Location:../index.php?message=pseudo ou mot de passe faux !');
        }
}

