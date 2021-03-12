<?php

require_once(__DIR__ . "/requetes/pdo.php");


$deleteMSGStatement = $pdo-> prepare("DELETE FROM MSG WHERE idUser=? ");
$deleteMSGStatement->execute([
    $_GET["id"]
]);


$deleteUserStatement = $pdo-> prepare("DELETE FROM Users WHERE id=? ");
$deleteUserStatement->execute([
    $_GET["id"]
]);

header('Location:index.php?message= L\'Utilisateur a bien été supprimé.');