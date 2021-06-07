<?php
require_once("connexion.php");

if ($_POST) {
    if(isset($_POST["nom"]) && !empty($_POST["nom"])
   && isset($_POST["image"]) && !empty($_POST["image"])
&& isset($_POST["description"]) && !empty($_POST["description"])){
    
 $nom = strip_tags($_POST["nom"]);
    $image = strip_tags($_POST["image"]);
    $description = strip_tags($_POST["description"]);


    //requête préparée
    $sql ="INSERT INTO projets (name, image, description) VALUES (:name, :image, :description)";
    $query = $db ->prepare($sql);
    $query->bindValue(':name', $nom);
    $query->bindValue(':image', $image);
    $query->bindValue(':description', $description);

    //execution de la query
    $query->execute();

}
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div class="form-group"> 
            <laber for="nom">Nom du projet</label>
            <input type="text" name="nom" required> 
        </div>
        <div class="form-group"> 
            <laber for="image">image du projet</label>
            <input type="file" name="image" required> 
        </div>
        <div class="form-group"> 
            <laber for="description">description du projet</label>
            <input type="text" name="description" required> 
        </div>
    <input type="submit" value ="Envoyer">
</form>

</body>
</html>