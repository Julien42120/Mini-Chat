<?php

require_once(__DIR__ . "/pdo.php");

$r1 = $pdo->query('SELECT * FROM Users JOIN MSG ON Users.id = MSG.idUser ORDER BY MSG.DateTime ASC');

    while ($donnees = $r1->fetch())
    {
        echo '<strong><span style="color:'.$donnees['color'].';">' . htmlspecialchars($donnees['pseudo']). '</span> le  '.htmlspecialchars($donnees['DateTime']). ' : </strong> ' . htmlspecialchars($donnees['content']) . '</p>';
    }

    $r1->closeCursor();