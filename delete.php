<?php
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
    <title>T'es sur?</title>
</head>
<body>
<form action="dodelete.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <label for="">T'es sur de vouloir supprimer <?=$row['nom']?></label><br>
    <input type="submit" value="Je suis certain! OUIIII!">
</form>
</body>
</html>