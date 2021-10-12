<?php
    $resultat=require_once("connect.php");

    $recup=$pdo->prepare("SELECT * FROM personnages");
    $recup->execute();

    $resultat= $recup->fetchAll(PDO::FETCH_ASSOC);

    return $resultat;

?>