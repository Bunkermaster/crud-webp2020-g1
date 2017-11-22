<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 22/11/2017
 * Time: 15:19
 */
if (!isset($_POST['id'])) {
    header('Location: index.php?error=nopostdatadelete');
    exit;
}
require_once "connexion.php";
$requete = "DELETE FROM 
`garage` 
WHERE 
id = :id;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: index.php');
