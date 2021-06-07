<?php 

$servername="localhost";
$dbname ="crud";
$username ="root";
$password ="dada";

try {
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOEXCEPTION $e){

    echo "Connexion failed ! Try again.". $e ->getMessage();
}