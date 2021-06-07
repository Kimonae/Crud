<?php
require_once("connexion.php");

$sql = "SELECT * FROM projets";
$query = $db->prepare($sql);
$query->execute();
//boucle sur tab associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);

//var_dump($result);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title>
</head>
<body>
    <table>

<thead>
<th>projet</th>
<th>image</th>
<th>description</th>
</thead>

<tbody>
        <?php
        //boucle sur variable comme telle variable
        foreach($result AS $projet){
            ?>
                <tr>     <!-- Même chose -->
                        <td> <?php echo $projet["name"]?> </td>
                        <td> <?= $projet["image"]?></td> <!-- Src image dossier blabla-->
                        <td> <?= $projet["description"]?></td>
                        <td> <a href="supprimer.php?id=<?= $projet['id']?>">supprimer</a></td>
                        <td> <a href="modifier.php?id=<?= $projet['id']?>">modifier</a></td>
                </tr>
                                   <?php } ?>
<tbody>
</table>
    
</body>
</html>