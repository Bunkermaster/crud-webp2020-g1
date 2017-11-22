<?php
if (!isset($_GET['id'])) {
    header('Location: index.php?error=noidprovidededit');
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
    <title>Ajouter un garage</title>
</head>
<body>
<?php
require "header.php";
?>
<form action="doedit.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <label for="nom">Nom</label> <input type="text" name="nom" value="<?=$row['nom']?>"><br>
    <label for="marque">Marque</label> <input type="text" name="marque" value="<?=$row['marque']?>"><br>
    <input type="submit" value="Ajouter">
</form>
</body>
</html>