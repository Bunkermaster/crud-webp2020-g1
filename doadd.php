<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 22/11/2017
 * Time: 15:19
 */
require_once "connexion.php";
$requete = "INSERT INTO 
`garage` 
(`nom`, `marque`) 
VALUES 
(:nom, :marque)
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':marque', $_POST['marque']);
$stmt->execute();
header('Location: index.php');
