<?php
require_once(__DIR__ . "/../requetes/pdo.php");

$message = $_POST['content']; // on créé une variable qui récupère les messages de BDD
$pseudo = $_POST['pseudo']; // on crée une variable qui récupère les pseudos
$insertStatement = $pdo -> prepare('SELECT * FROM Users WHERE pseudo = ?'); // requete qui permet de vérifier le pseudo
$insertStatement -> execute([$pseudo]);// execution de la requete 
$verifpseudo = $insertStatement->fetch(PDO::FETCH_ASSOC); // verifie si le pseudo existe dans la table Users


function insertMessage ($pdo, $message ,$user_id){
    $insertMessage = $pdo -> prepare('INSERT INTO MSG ( content , idUser ) VALUE (?,?)');
    $insertMessage -> execute([
        $message,
        $user_id
    ]);
}

// si le pseudo existe on enregistre le message avec l'id user
if ($verifpseudo){ 
    insertMessage($pdo, $message, $verifpseudo['id']);
// sinon enregistrer User et envoyé le message 
};
