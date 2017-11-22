<?php
require_once "connexion.php";
$requete = "SELECT 
  `id`, 
  `nom`, 
  `marque` 
FROM 
  `garage`
;";
$stmt = $conn->prepare($requete);
$stmt->execute();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des garages</title>
    <style>
        td, th {
            border-bottom: 1px solid #128f27;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET['error'])) {
?>
    <div style="color: red"><?=$_GET['error']?></div>
<?php
}
?>
    <h1>Garage ¬_¬</h1>
    <a href="add.php">Ajouter</a>
    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Marque</th>
            <th>Action</th>
        </tr>
        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><a href="details.php?id=<?=$row['id']?>"><?=$row['nom']?></a></td>
            <td><?=$row['marque']?></td>
            <td>
                <a href="delete.php?id=<?=$row['id']?>">Supprimer</a>
                <a href="edit.php?id=<?=$row['id']?>">Modifier</a>
            </td>
        </tr>
        <?php endwhile;?>
    </table>
</body>
</html>
