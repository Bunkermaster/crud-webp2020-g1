<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=demo-garage-lol', 'root', 'root');
} catch(PDOException $exception) {
    die("Arrrrrghhhh X_x");
}
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
    <h1>Garage ¬_¬</h1>
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
            <td><?=$row['nom']?></td>
            <td><?=$row['marque']?></td>
            <td></td>
        </tr>
        <?php endwhile;?>
    </table>
</body>
</html>
