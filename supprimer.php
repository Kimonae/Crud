<?php
    require_once("connexion.php");

if(isset($_GET["id"])&& !empty($_GET["id"])) {

    //get id et supprimes balises, php, html d'une chaine
$id = strip_tags($_GET["id"]);
//var_dump($id);
$sql = "SELECT id FROM projets WHERE id = :id";
$query = $db->prepare($sql);
$query->bindValue(":id", $id, PDO::PARAM_INT); //changer le format string par def en int

$query->execute();

$sql = "DELETE FROM projets WHERE id = :id";
$query = $db->prepare($sql);
$query->bindValue(":id", $id, PDO::PARAM_INT); 
$query->execute();

header("Location: index.php");

}

?>