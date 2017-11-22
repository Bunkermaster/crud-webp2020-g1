<?php
if (!isset($_GET['id'])) {
    header('Location: index.php?error=noidprovideddetails');
    exit;
}
require_once "connexion.php";
$requete = "SELECT 
  `id`, 
  `nom`, 
  `marque` 
FROM 
  `garage`
WHERE
  `id` = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details de <?=$row['nom']?></title>
</head>
<body>
<?php
    require "header.php";
?>
    <h1><?=$row['nom']?></h1>
    <p><?=$row['marque']?></p>
    <ul>
        <li><a href="delete.php?id=<?=$row['id']?>">Supprimer</a></li>
        <li><a href="edit.php?id=<?=$row['id']?>">Modifier</a></li>
    </ul>
</body>
</html>