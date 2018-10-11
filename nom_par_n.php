<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 11/10/2018
 * Time: 12:23
 */
try
{
    $connexion = new PDO('mysql:host=localhost;dbname=project-sql-master', 'root','');
}
catch (Exception $e)
{
    die('Erreur :'.$e->getMessage() );
}

$etat = $connexion->query("SELECT * FROM client WHERE country_code like 'N%' ");

while($recup = $etat->fetch())
{
    echo $recup['email'];
    echo "<br>";
}