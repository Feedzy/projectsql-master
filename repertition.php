<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 11/10/2018
 * Time: 12:33
 */
try
{
    $connexion = new PDO('mysql:host=localhost;dbname=project-sql-master', 'root','');
}
catch (Exception $e)
{
    die('Erreur :'.$e->getMessage() );
}

$repartition = $connexion->query("SELECT country_code, COUNT(*) as nbr FROM client GROUP BY country_code ORDER BY  country_code");

while ($recup = $repartition->fetch())
{
    echo $recup['country_code'];
    echo $recup['nb'];
    echo "<br>";
}