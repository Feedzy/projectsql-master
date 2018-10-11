<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 11/10/2018
 * Time: 12:29
 */
try
{
    $connexion = new PDO('mysql:host=localhost;dbname=project-sql-master', 'root','');
}
catch (Exception $e)
{
    die('Erreur :'.$e->getMessage() );
}

$email=$connexion->query("SELECT * FROM client WHERE email like '%google%'");

while ($result = $email->fetch())
{
    echo $result['gender'];
    echo "<br>";
}