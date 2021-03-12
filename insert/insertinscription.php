<?php
require_once(__DIR__ . "/../requetes/pdo.php");


include "../RandomColor.php/src/RandomColor.php";
use Colors\RandomColor;
$random = new RandomColor();
$color = $random->one(array("format"=>"hex"));



if (empty($_POST["pseudo"])) {
    die("Paramètres manquants");
}

$pseudo = $_POST["pseudo"];
$password = $_POST["password"];
$pass2 = $_POST["password2"];

if ($password != $pass2){
    header('Location:../inscription.php?message=Les mots de passe sont différents.');
} else {
    
    $insertStatement = $pdo->prepare("INSERT INTO Users
    (pseudo, password , AdresseIP, color )
    VALUES
    (?, ? , ?, ?);
    ");
    
    $insertStatement->execute([
        $pseudo,
        $password,
        $_SERVER["REMOTE_ADDR"],
        $color
    
    ]);
    header('Location:../index.php?message=Votre utilisateur a bien été crée.');
}    
