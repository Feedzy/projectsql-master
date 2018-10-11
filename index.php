<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 11/10/2018
 * Time: 10:47
 */
try
{
    $connexion = new PDO('mysql:host=localhost;dbname=project-sql-master', 'root','');
}
catch (Exception $e)
{
    die('Erreur :'.$e->getMessage() );
}

 $nom_palmer =$connexion->query("SELECT * FROM client WHERE first_name = 'Palmer'");

while ( $recuperation = $nom_palmer->fetch())
{
    echo $recuperation['first_name'];
    echo $recuperation['last_name'];
    echo "<br>";
}
$nom_palmer->closeCursor();