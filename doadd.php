<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 22/11/2017
 * Time: 15:19
 */
if (!isset($_POST['nom']) || !isset($_POST['marque']) ) {
    header('Location: index.php?nopostdata');
    exit;
}
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
header('Location: details.php?id='.$conn->lastInsertId());
